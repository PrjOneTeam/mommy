<?php

namespace App\Http\Controllers;

use App\Enums\Grade;
use App\Helpers\File;
use App\Repositories\WorkbookRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;

class WorkbookController extends Controller
{
    public function __construct(
        private readonly WorkbookRepository $workbookRepository,
        private readonly File $file,
    ) {
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'color_pick' => 'required|boolean',
            'image_bw' => 'nullable|string',
            'image_color' => 'nullable|string',
            'image_both' => 'nullable|string',
            'status' => 'required|boolean',
            'files_bw' => 'nullable|string',
            'files_color' => 'nullable|string',
            'file_both' => 'nullable|string',
            'size' => 'nullable|string',
            'price' => 'nullable|numeric',
            'price_both' => 'nullable|numeric',
            'sale_price' => 'nullable|numeric',
            'sale_price_both' => 'nullable|numeric',
            'grade' => ['nullable', Rule::in(Grade::all())],
            'topic' => ['nullable', 'array'],
        ]);

        try {
            $this->file->uploadFile($request, 'image_bw');
            $this->file->uploadFile($request, 'image_color');
            $this->file->uploadFile($request, 'image_both');
            $this->file->uploadFile($request, 'files_bw', 'pdfs');
            $this->file->uploadFile($request, 'files_color', 'pdfs');
            $this->file->uploadFile($request, 'file_both', 'pdfs');

            $workbook = $this->workbookRepository->create($data);

            return response()->json($workbook, 201);
        } catch (\Exception $e) {
            $logs = [
                'type' => 'Error in WorkbookController@store',
                'message' => $e->getMessage(),
                'request' => $request->toArray(),
                'trace' => $e->getTrace(),
            ];
            Log::error(json_encode($logs));

            return response()->json(['message' => __('System Errors')], 500);
        }
    }
}
