<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Grade;
use App\Helpers\File;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Repositories\WorkbookRepository;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;

class WorkbookController extends Controller
{
    public function __construct(
        private readonly WorkbookRepository $workbookRepository,
        private readonly File $file,
        private readonly Category $category,
    ) {
    }

    public function listing(): View
{
    $workbooks = $this->workbookRepository->all();

    return view('admin.products.workbook-listing', [
        'workbooks' => $workbooks
    ]);
}

    public function create(): View
    {
        $topics = $this->category->getKeyValueCategories();

        return view('admin.products.workbook-form', [
            'topics' => $topics,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'color_pick' => 'nullable',
            'image_bw' => 'nullable|image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:1048',
            'image_color' => 'nullable|image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:1048',
            'image_both' => 'nullable|image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:1048',
            'status' => 'nullable',
            'files_bw' => 'nullable',
            'files_color' => 'nullable',
            'file_both' => 'nullable',
            'size' => 'nullable|string',
            'price' => 'nullable|numeric',
            'price_both' => 'nullable|numeric',
            'sale_price' => 'nullable|numeric',
            'sale_price_both' => 'nullable|numeric',
            'grade' => ['nullable', Rule::in(Grade::all())],
            'topic' => ['nullable', 'array', Rule::in(array_keys($this->category->getKeyValueCategories()))],
        ]);

        try {
            $data['status'] = $request->boolean('status');
            $data['color_pick'] = $request->boolean('color_pick');
            $data['image_bw'] = $this->file->uploadFile($request, 'image_bw');
            $data['image_color'] = $this->file->uploadFile($request, 'image_color');
            $data['image_both'] = $this->file->uploadFile($request, 'image_both');
            $data['files_bw'] = $this->file->uploadFile($request, 'files_bw', 'pdfs');
            $data['files_color'] = $this->file->uploadFile($request, 'files_color', 'pdfs');
            $data['file_both'] = $this->file->uploadFile($request, 'file_both', 'pdfs');

            $workbook = $this->workbookRepository->create($data);

            return redirect()->route('workbooks.lists')->with('success', __('Workbook created successfully'));
        } catch (Exception $e) {
            $logs = [
                'type' => 'Error in WorkbookController@store',
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
            $article = $this->workbookRepository->find($id);
            $this->workbookRepository->delete($article);

            return redirect()->back()->with('success', __('Workbook deleted successfully'));
        } catch (\Exception $e) {
            $logs = [
                'type' => 'Error in WorkbookController@destroy',
                'message' => $e->getMessage(),
                'request' => $request->toArray(),
                'trace' => $e->getTrace(),
            ];
            Log::error(json_encode($logs));

            return redirect()->back()->with('error', __('Workbook could not be deleted'));
        }
    }
}
