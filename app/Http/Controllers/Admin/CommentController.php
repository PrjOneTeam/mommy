<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\CommentRepository;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class CommentController extends Controller
{
    public function __construct(
        private readonly CommentRepository $commentRepository,
    ) {
    }

    public function listing(): View
    {
        $comments = $this->commentRepository->all();

        return view('admin.feedback.comment-listing', [
            'comments' => $comments
        ]);
    }

    public function create(): View
    {
        return view('comment-form');
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->validate([
            'pdf_id' => 'required|integer|exists:pdfs,id',
            'public_name' => 'required|string|max:255',
            'rate' => 'required|integer|min:1|max:5',
            'review' => 'nullable|string|max:1000',
        ]);

        try {
            $this->commentRepository->create($data);

            return response()->json(['message' => 'Comment created successfully'], 201);
        } catch (Exception $e) {
            Log::error('Error in CommentController@store: ' . $e->getMessage(), [
                'request' => $request->all(),
                'trace' => $e->getTrace(),
            ]);

            return response()->json(['message' => 'Comment could not be created'], 500);
        }
    }
}
