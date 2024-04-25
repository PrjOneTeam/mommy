<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Grade;
use App\Helpers\File;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Repositories\PdfRepository;
use App\Repositories\WorkbookRepository;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;

class PdfController extends Controller
{
    public function __construct(
        private readonly PdfRepository $pdfRepository,
        private readonly WorkbookRepository $workbookRepository,
        private readonly File $file,
        private readonly Category $category,
    ) {
    }

    public function listing(): View
    {
        $pdfs = $this->pdfRepository->all();

        return view('admin.products.pdf-listing', [
            'pdfs' => $pdfs
        ]);
    }

    public function create(): View
    {
        $topics = $this->category->getKeyValueCategories();
        $relatedWorkbooks = $this->workbookRepository->getActiveWorkbooks()->pluck('name', 'id')->toArray();

        return view('admin.products.pdf-form', [
            'topics' => $topics,
            'relatedWorkbooks' => $relatedWorkbooks,
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'grade' => ['nullable', Rule::in(Grade::all())],
            'topic' => ['nullable', 'array', Rule::in(array_keys($this->category->getKeyValueCategories()))],
            'image_bw' => 'required|image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:1048',
            'image_color' => 'nullable|image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:1048',
            'files_bw' => 'required',
            'files_color' => 'nullable',
            'status' => 'nullable',
            'price' => 'required|numeric',
            'sale_price' => 'nullable|numeric',
            'related_workbook' => 'nullable|array',
        ]);

        try {
            $data['status'] = $request->boolean('status');
            $data['image_bw'] = $this->file->uploadFile($request, 'image_bw');
            $data['image_color'] = $this->file->uploadFile($request, 'image_color');
            $data['files_bw'] = $this->file->uploadFile($request, 'files_bw', 'pdfs');
            $data['files_color'] = $this->file->uploadFile($request, 'files_color', 'pdfs');

            $pdf = $this->pdfRepository->create($data);

            return response()->json($pdf, 201);
        } catch (Exception $e) {
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
