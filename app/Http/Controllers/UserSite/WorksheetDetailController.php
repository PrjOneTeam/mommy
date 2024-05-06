<?php

declare(strict_types=1);

namespace App\Http\Controllers\UserSite;


use App\Http\Controllers\Controller;
use App\Repositories\SlugRepository;
use App\Repositories\WorksheetRepository;
use Illuminate\Http\Request;

class WorksheetDetailController extends Controller
{
    public function __construct(
        private readonly WorksheetRepository $worksheetRepository,
        private readonly SlugRepository $slugRepository,
    )
    {
    }

    public function index(Request $request, ?string $worksheet = null): \Illuminate\Contracts\View\View
    {
        $slug = $this->slugRepository->findBySlug($worksheet);
        if ($slug === null) {
            abort(404);
        }

        $worksheet = $slug->workbook_id ? $slug->workbook : $slug->pdf;
        $type = $worksheet instanceof \App\Models\Workbook ? 'workbook' : 'pdf';
        $worksheetRelated = $this->worksheetRepository->getRelatedWorksheet($type, $worksheet->topic);

        return view('user-site.worksheet-detail', [
            'type' => $type,
            'worksheet' => $worksheet,
            'worksheetRelated' => $worksheetRelated,
            'slug' => $slug->slug,
        ]);
    }
}
