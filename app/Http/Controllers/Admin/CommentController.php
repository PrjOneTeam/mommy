<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Repositories\CommentRepository;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class CommentController extends Controller
{
    public function __construct(
        private readonly CommentRepository $commentRepository,
    ) {
    }

    public function index(Request $request): View|JsonResponse
    {
        if ($request->ajax()) {
            $comments = $this->commentRepository->all();
            $results = [];

            if ($comments->count() > 0) {
                $results = $comments->map(function ($comment) {
                    return [
                        'id' => $comment->id,
                        'pdf' => '<a href="' . route('admin.pdf.edit', $comment->pdf_id) . '">' . $comment->pdf?->name . '</a>',
                        'public_name' => $comment->public_name,
                        'rate' => $comment->rate,
                        'review' => $comment->review,
                        'created_at' => $comment->created_at?->format('Y-m-d H:i:s'),
                        'updated_at' => $comment->updated_at?->format('Y-m-d H:i:s'),
                        'action' => Helper::renderAction(module: 'comment', id: $comment->id, actions: [Helper::DELETE_BUTTON]),
                    ];
                });
            }

            return response()->json(['data' => $results]);
        }

        return view('admin.feedback.comment-listing');
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

    public function destroy(int $id): RedirectResponse
    {
        try {
            $comment = $this->commentRepository->find($id);
            $this->commentRepository->delete($comment);

            return redirect()->route('admin.comment.index')->with('success', __('Comment deleted successfully'));
        } catch (Exception $e) {
            Log::error('Error in CommentController@destroy: ' . $e->getMessage(), [
                'id' => $id,
                'trace' => $e->getTrace(),
            ]);

            return redirect()->route('admin.comment.index')->with('error', __('Comment could not be deleted'));
        }
    }
}
