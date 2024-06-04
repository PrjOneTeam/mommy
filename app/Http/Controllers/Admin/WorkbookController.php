<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Grade;
use App\Helpers\File;
use App\Helpers\Helper;
use App\Helpers\Language;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Slug;
use App\Models\Workbook;
use App\Repositories\SlugRepository;
use App\Repositories\WorkbookRepository;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class WorkbookController extends Controller
{
    public function __construct(
        private readonly WorkbookRepository $workbookRepository,
        private readonly File $file,
        private readonly Category $category,
        private readonly Language           $language,
        private readonly SlugRepository     $slugRepository,
    ) {
    }

    public function index(Request $request): View|JsonResponse
    {
        if ($request->ajax()) {
            $workbooks = $this->workbookRepository->all();
            $results = [];

            if ($workbooks->count() > 0) {
                $results = $workbooks->map(function ($workbook) {
                    $adsStatus = $workbook->ads == 1 ? '<button class="status-btn btn-success" data-status="1">ON</button>' : '';
                    return [
                        'ads' => $adsStatus ,
                        'id' => $workbook->id,
                        'name' => $workbook->name,
                        'description' => Str::limit($workbook->description, 50),
                        'grade' => $workbook->grade,
                        'topic' => $workbook->topic ? implode(', ', $workbook->topic) : null,
                        'status' => $workbook->status ? __('Active') : __('Inactive'),
                        'price' => number_format($workbook->price, 0, ',', ',') . ' VND',
                        'created_at' => $workbook->created_at->format('Y-m-d H:i:s'),
                        'updated_at' => $workbook->updated_at->format('Y-m-d H:i:s'),
                        'action' => Helper::renderWorkbookAction('workbook', $workbook->id),
                    ];
                });
            }

            return response()->json(['data' => $results]);
        }

        return view('admin.products.workbook-listing');
    }

    public function create(): View
    {
        $topics = $this->category->getKeyValueCategories();

        return view('admin.products.workbook-form', [
            'topics' => $topics,
        ]);
    }

    public function edit(int $id): View
    {
        $topics = $this->category->getKeyValueCategories();
        $workbook = $this->workbookRepository->find($id);

        return view('admin.products.workbook-form', [
            'topics' => $topics,
            'workbook' => $workbook,
        ]);
    }

    public function ads(int $id)
    {
        $workbook = $this->workbookRepository->find($id);
        $oldWorkbook = Workbook::where('ads', 1)->first();
        if ($oldWorkbook) {
            $oldWorkbook->ads = 0;
            $oldWorkbook->save();
        }
        $workbook->ads = 1;
        $workbook->save();
        return redirect()
            ->route('admin.workbook.index')
            ->with('success', 'Thay đổi quảng bá trang chủ thành công!');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'id' => 'nullable|numeric',
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
            'grade' => 'required',
            'topic' => ['nullable', 'array', Rule::in(array_keys($this->category->getKeyValueCategories()))],
        ]);

        try {
            $data['status'] = $request->boolean('status');
            $data['color_pick'] = $request->boolean('color_pick');
            $data['image_bw'] = $this->file->uploadFile($request, 'image_bw');
            $data['image_color'] = $this->file->uploadFile($request, 'image_color');
            $data['image_both'] = $this->file->uploadFile($request, 'image_both');
            $data['files_bw'] = $this->file->uploadFile($request, 'files_bw', 'pdfs', true);
            $data['files_color'] = $this->file->uploadFile($request, 'files_color', 'pdfs', true);
            $data['file_both'] = $this->file->uploadFile($request, 'file_both', 'pdfs', true);

            if ($request->has('id')) {
                if (!$data['image_color']) unset($data['image_color']);
                if (!$data['image_bw']) unset($data['image_bw']);
                if (!$data['image_both']) unset($data['image_both']);
                if (!$data['files_bw']) unset($data['files_bw']);
                if (!$data['files_color']) unset($data['files_color']);
                if (!$data['file_both']) unset($data['file_both']);

                $workbook = $this->workbookRepository->find($data['id']);
                $this->workbookRepository->update($workbook, $data);

                $message = __('Workbook updated successfully');
            } else {
                $slug = $this->language->convert_vi_to_en($data['name']);
                $slug = str_replace(' ', '-', strtolower($slug));

                $already = $this->slugRepository->findBySlug($slug);
                if ($already) {
                    $slug = $slug . '-' . time();
                }

                if (strpos($slug, "#") !== false) {
                    $slug = str_replace("#", "hashtag", $slug);
                }
                $workbook = $this->workbookRepository->create($data);
                $this->slugRepository->create([
                    'slug' => $slug,
                    'workbook_id' => $workbook->id,
                ]);
                $message = __('Workbook created successfully');
            }

            return redirect()->route('admin.workbook.index')->with('success', $message);
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

            $slug = Slug::where('workbook_id',$id)->first();
            $slug->delete();

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
