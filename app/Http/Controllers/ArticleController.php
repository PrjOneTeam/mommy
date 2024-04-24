<?php

namespace App\Http\Controllers;

use App\Helpers\File;
use App\Repositories\ArticleRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ArticleController extends Controller
{
    public function __construct(
        private readonly ArticleRepository $articleRepository,
        private readonly File $file,
    ) {
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'pictures' => 'nullable|string',
        ]);


        try {
            $this->file->uploadFile($request, 'pictures');
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
