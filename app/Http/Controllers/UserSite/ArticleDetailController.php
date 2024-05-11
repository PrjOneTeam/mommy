<?php

declare(strict_types=1);

namespace App\Http\Controllers\UserSite;


use App\Http\Controllers\Controller;
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

        return view('user-site.worksheet-detail', [
            'type' => $type,
            'worksheet' => $worksheet,
            'worksheetRelated' => $worksheetRelated,
            'slug' => $slug->slug,
            'isPurchase' => $isPurchase,
        ]);
    }
}
