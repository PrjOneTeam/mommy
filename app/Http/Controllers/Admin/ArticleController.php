<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\File;
use App\Http\Controllers\Controller;
use App\Repositories\ArticleRepository;
use Illuminate\Http\JsonResponse;
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

    public function store(Request $request): JsonResponse
    {
        $data = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'pictures' => 'nullable|image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:1048',
        ]);


        try {
            $data['pictures'] = $this->file->uploadFile($request, 'pictures');
            $article = $this->articleRepository->create($data);

            return response()->json($article, 201);
        } catch (\Exception $e) {
            $logs = [
                'type' => 'Error in ArticleController@store',
                'message' => $e->getMessage(),
                'request' => $request->toArray(),
                'trace' => $e->getTrace(),
            ];
            Log::error(json_encode($logs));

            return response()->json(['message' => __('System Errors')], 500);
        }
    }
}
