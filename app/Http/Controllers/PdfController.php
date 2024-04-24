<?php

namespace App\Http\Controllers;

use App\Enums\Grade;
use App\Helpers\File;
use App\Repositories\PdfRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;

class PdfController extends Controller
{
    public function __construct(
        private readonly PdfRepository $pdfRepository,
        private readonly File $file,
    ) {
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'grade' => ['nullable', Rule::in(Grade::all())],
            'topic' => 'nullable|array',
            'image_bw' => 'required|string',
            'image_color' => 'nullable|string',
            'status' => 'required|boolean',
            'files_bw' => 'required|string',
            'files_color' => 'nullable|string',
            'price' => 'required|numeric',
            'sale_price' => 'nullable|numeric',
            'related_workbook' => 'nullable|array',
        ]);

        $pdf = $this->pdfRepository->create($data);

        try {
            $this->file->uploadFile($request, 'image_bw');
            $this->file->uploadFile($request, 'image_color');
            $this->file->uploadFile($request, 'files_bw', 'pdfs');
            $this->file->uploadFile($request, 'files_color', 'pdfs');

            $pdf = $this->pdfRepository->create($data);

            return response()->json($pdf, 201);
        } catch (\Exception $e) {
            $logs = [
                'type' => 'Error in PdfController@store',
                'message' => $e->getMessage(),
                'request' => $request->toArray(),
                'trace' => $e->getTrace(),
            ];
            Log::error(json_encode($logs));

            return response()->json(['message' => __('System Errors')], 500);
        }
    }
}
