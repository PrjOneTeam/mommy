<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Repositories\ReviewRepository;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ReviewController extends Controller
{

    public function __construct(
        private readonly ReviewRepository $reviewRepository,
    ) {
    }

    public function index(Request $request): View|JsonResponse
    {
        if ($request->ajax()) {
            $reviews = $this->reviewRepository->all();
            $results = [];

            if ($reviews->count() > 0) {
                $results = $reviews->map(function ($review) {
                    return [
                        'id' => $review->id,
                        'workbook' => '<a href="' . route('admin.workbook.edit', $review->workbook_id) . '">' . $review->workbook?->name . '</a>',
                        'public_name' => $review->public_name,
                        'rate' => $review->rate,
                        'review' => $review->review,
                        'created_at' => $review->created_at?->format('Y-m-d H:i:s'),
                        'updated_at' => $review->updated_at?->format('Y-m-d H:i:s'),
                        'action' => Helper::renderAction('review', $review->id),
                    ];
                });
            }

            return response()->json(['data' => $results]);
        }

        return view('admin.feedback.review-listing');
    }

    public function create(): View
    {
        return view('review-form');
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->validate([
            'workbook_id' => 'required|integer|exists:workbooks,id',
            'public_name' => 'required|string|max:255',
            'rate' => 'required|integer|min:1|max:5',
            'review' => 'nullable|string|max:1000',
        ]);

        try {
            $this->reviewRepository->create($data);

            return response()->json(['message' => 'Review created successfully'], 201);
        } catch (Exception $e) {
            Log::error('Error in ReviewController@store: ' . $e->getMessage(), [
                'request' => $request->all(),
                'trace' => $e->getTrace(),
            ]);

            return response()->json(['message' => 'Review could not be created'], 500);
        }
    }
}
