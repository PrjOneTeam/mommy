<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\File;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Repositories\ArticleRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function __construct(
        private readonly ArticleRepository $articleRepository,
        private readonly File $file,
    ) {
    }

    public function index(Request $request): View|JsonResponse
    {
        if ($request->ajax()) {
            $articles = $this->articleRepository->all();
            $results = [];

            if ($articles->count() > 0) {
                $results = $articles->map(function ($article) {
                    return [
                        'id' => $article->id,
                        'title' => $article->title,
                        'content' => Str::limit($article->content, 50),
                        'created_at' => $article->created_at->format('Y-m-d H:i:s'),
                        'updated_at' => $article->updated_at->format('Y-m-d H:i:s'),
                        'action' => Helper::renderAction('article', $article->id),
                    ];
                });
            }

            return response()->json(['data' => $results]);
        }

        return view('admin.articles.listing');
    }

    public function create(): View
    {
        return view('admin.articles.form');
    }

    public function edit(int $id): View
    {
        $article = $this->articleRepository->find($id);

        return view('admin.articles.form', ['article' => $article]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'id' => 'nullable|numeric',
            'title' => 'required|string',
            'content' => 'required|string',
            'pictures' => 'nullable|image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:1048',
        ]);

        try {
            if ($request->hasFile('pictures')) {
                $data['pictures'] = $this->file->uploadFile($request, 'pictures');
            }

            if ($request->has('id')) {
                $article = $this->articleRepository->find($data['id']);
                $this->articleRepository->update($article, $data);

                return redirect()->route('admin.article.index')->with('success', __('Article updated successfully'));
            } else {
                $this->articleRepository->create($data);

                return redirect()->route('admin.article.index')->with('success', __('Article created successfully'));
            }
        } catch (\Exception $e) {
            $logs = [
                'type' => 'Error in ArticleController@store',
                'message' => $e->getMessage(),
                'request' => $request->toArray(),
                'trace' => $e->getTrace(),
            ];
            Log::error(json_encode($logs));

            return redirect()->back()->with('error', __('Something went wrong'));
        }
    }

    public function destroy(int $id, Request $request): RedirectResponse
    {
        try {
            $article = $this->articleRepository->find($id);
            $this->articleRepository->delete($article);

            return redirect()->route('admin.article.index')->with('success', __('Article deleted successfully'));
        } catch (\Exception $e) {
            $logs = [
                'type' => 'Error in ArticleController@destroy',
                'message' => $e->getMessage(),
                'request' => $request->toArray(),
                'trace' => $e->getTrace(),
            ];
            Log::error(json_encode($logs));

            return redirect()->route('admin.article.index')->with('error', __('Article could not be deleted'));
        }
    }
}
