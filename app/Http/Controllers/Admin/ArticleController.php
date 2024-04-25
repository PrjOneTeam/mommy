<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\File;
use App\Http\Controllers\Controller;
use App\Repositories\ArticleRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function __construct(
        private readonly ArticleRepository $articleRepository,
        private readonly File $file,
    ) {
    }

    public function listing(): View
    {
        $articles = $this->articleRepository->all();
        return view('admin.articles.listing', [
            'articles' => $articles
        ]);
    }

    public function create(): View
    {
        return view('admin.articles.form');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'pictures' => 'nullable|image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:1048',
        ]);


        try {
            $data['pictures'] = $this->file->uploadFile($request, 'pictures');
            $this->articleRepository->create($data);

            return redirect()->route('articles.lists')->with('success', __('Article created successfully'));
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

            return redirect()->back()->with('success', __('Article deleted successfully'));
        } catch (\Exception $e) {
            $logs = [
                'type' => 'Error in ArticleController@destroy',
                'message' => $e->getMessage(),
                'request' => $request->toArray(),
                'trace' => $e->getTrace(),
            ];
            Log::error(json_encode($logs));

            return redirect()->back()->with('error', __('Article could not be deleted'));
        }
    }
}
