<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\ReviewRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ReviewController extends Controller
{

    public function __construct(
        private readonly ReviewRepository $reviewRepository,
    ) {
    }

    public function listing()
    {
        $reviews = $this->reviewRepository->all();

        return view('reviews.index', [
            'reviews' => $reviews
        ]);
    }

    public function create()
    {
        return view('review-form');
    }

    public function store(Request $request)
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
        } catch (\Exception $e) {
            Log::error('Error in ReviewController@store: ' . $e->getMessage(), [
                'request' => $request->all(),
                'trace' => $e->getTrace(),
            ]);

            return response()->json(['message' => 'Review could not be created'], 500);
        }
    }
}