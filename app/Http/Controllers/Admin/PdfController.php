<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Grade;
use App\Helpers\File;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Repositories\PdfRepository;
use App\Repositories\WorkbookRepository;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class PdfController extends Controller
{
    public function __construct(
        private readonly PdfRepository      $pdfRepository,
        private readonly WorkbookRepository $workbookRepository,
        private readonly File               $file,
        private readonly Category           $category,
    )
    {
    }

    public function index(Request $request): View|JsonResponse
    {
        if ($request->ajax()) {
            $pdfs = $this->pdfRepository->all();
            $results = [];

            if ($pdfs->count() > 0) {
                $results = $pdfs->map(function ($pdf) {
                    return [
                        'id' => $pdf->id,
                        'name' => $pdf->name,
                        'description' => Str::limit($pdf->description, 50),
                        'grade' => $pdf->grade,
                        'topic' => $pdf->topic ? implode(', ', $pdf->topic) : null,
                        'status' => $pdf->status ? __('Active') : __('Inactive'),
                        'price' => $pdf->price,
                        'created_at' => $pdf->created_at->format('Y-m-d H:i:s'),
                        'updated_at' => $pdf->updated_at->format('Y-m-d H:i:s'),
                        'action' => Helper::renderAction('pdf', $pdf->id),
                    ];
                });
            }

            return response()->json(['data' => $results]);
        }
        return view('admin.products.pdf-listing');
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

    public function edit(int $id): View
    {
        $topics = $this->category->getKeyValueCategories();
        $relatedWorkbooks = $this->workbookRepository->getActiveWorkbooks()->pluck('name', 'id')->toArray();

        $pdf = $this->pdfRepository->find($id);

        return view('admin.products.pdf-form', [
            'topics' => $topics,
            'relatedWorkbooks' => $relatedWorkbooks,
            'pdf' => $pdf,
        ]);
    }

    public function validateRequest(Request $request): array
    {
        $condition = [
            'id' => 'nullable|numeric',
            'name' => 'required|string',
            'description' => 'nullable|string',
            'grade' => ['nullable', Rule::in(Grade::all())],
            'topic' => ['nullable', 'array', Rule::in(array_keys($this->category->getKeyValueCategories()))],
            'image_color' => 'nullable|image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:1048',
            'files_color' => 'nullable',
            'status' => 'nullable',
            'price' => 'required|numeric',
            'sale_price' => 'nullable|numeric',
            'related_workbook' => 'nullable|array',
        ];

        if(!isset($request->id)) {
            $condition['files_bw'] = 'required|mage|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:1048';
            $condition['image_bw'] = 'required';
        }

        return $request->validate($condition);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validateRequest($request);

        try {
            $data['status'] = $request->boolean('status');
            $data['image_bw'] = $this->file->uploadFile($request, 'image_bw');
            $data['image_color'] = $this->file->uploadFile($request, 'image_color');
            $data['files_bw'] = $this->file->uploadFile($request, 'files_bw', 'pdfs');
            $data['files_color'] = $this->file->uploadFile($request, 'files_color', 'pdfs');

            if (isset($request->id)) {
                if (!$data['image_color']) unset($data['image_color']);
                if (!$data['image_bw']) unset($data['image_bw']);
                if (!$data['files_bw']) unset($data['files_bw']);
                if (!$data['files_color']) unset($data['files_color']);

                $pdf = $this->pdfRepository->find($request->id);

                $this->pdfRepository->update($pdf, $data);
            } else {
                $this->pdfRepository->create($data);
            }

            return redirect()->route('admin.pdf.index')->with('success', __('Pdf created successfully'));
        } catch (Exception $e) {
            $logs = [
                'type' => 'Error in PdfController@store',
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
            $article = $this->pdfRepository->find($id);
            $this->pdfRepository->delete($article);

            return redirect()->back()->with('success', __('Pdf deleted successfully'));
        } catch (\Exception $e) {
            $logs = [
                'type' => 'Error in PdfController@destroy',
                'message' => $e->getMessage(),
                'request' => $request->toArray(),
                'trace' => $e->getTrace(),
            ];
            Log::error(json_encode($logs));

            return redirect()->back()->with('error', __('Pdf could not be deleted'));
        }
    }
}
