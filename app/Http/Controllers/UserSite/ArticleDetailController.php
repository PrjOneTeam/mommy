<?php

declare(strict_types=1);

namespace App\Http\Controllers\UserSite;


use App\Http\Controllers\Controller;
use App\Models\Pdf;
use App\Models\Slug;
use App\Models\Workbook;
use App\Repositories\OrderRepository;
use App\Repositories\SlugRepository;
use App\Repositories\WorksheetRepository;
use Illuminate\Http\Request;

class ArticleDetailController extends Controller
{
    public function __construct(
        private readonly WorksheetRepository $worksheetRepository,
        private readonly SlugRepository $slugRepository,
        private readonly OrderRepository $orderRepository,
    )
    {
    }

    public function index(Request $request, ?string $articleId = null): \Illuminate\Contracts\View\View
    {
        $slug = $this->slugRepository->findBySlug($worksheet);
        if ($slug === null) {
            abort(404);
        }

        $worksheet = $slug->workbook_id ? $slug->workbook : $slug->pdf;
        $type = $worksheet instanceof \App\Models\Workbook ? 'workbook' : 'pdf';
        $worksheetRelated = $this->worksheetRepository->getRelatedWorksheet($type, $worksheet->topic);

        $isPurchase = $this->orderRepository->isPurchase($worksheet->id);

        $adsWorkbook = Workbook::where('ads', 1)->first();
        if ($adsWorkbook != null) {
            $adsWorkbook->slug = Slug::where('workbook_id', $adsWorkbook->id)->first()->slug;
        }
        $adsPdf = Pdf::where('ads',1)->first();
        if ($adsPdf != null) {
            $adsPdf->slug = Slug::where('pdf_id', $adsPdf->id)->first()->slug;
        }

        return view('user-site.worksheet-detail', [
            'type' => $type,
            'worksheet' => $worksheet,
            'worksheetRelated' => $worksheetRelated,
            'slug' => $slug->slug,
            'isPurchase' => $isPurchase,
            'adsWorkbook' => $adsWorkbook,
            'adsPdf' => $adsPdf
        ]);
    }
}
