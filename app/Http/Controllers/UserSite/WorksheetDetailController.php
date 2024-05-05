<?php

declare(strict_types=1);

namespace App\Http\Controllers\UserSite;


use App\Http\Controllers\Controller;
use App\Repositories\PdfRepository;
use App\Repositories\WorkbookRepository;
use App\Repositories\WorksheetRepository;
use Illuminate\Http\Request;

class WorksheetDetailController extends Controller
{
    public function __construct(
        private readonly PdfRepository $pdfRepository,
        private readonly WorkbookRepository $workbookRepository,
        private readonly WorksheetRepository $worksheetRepository,
    )
    {
    }

    public function index(Request $request, ?string $worksheet = null): \Illuminate\Contracts\View\View
    {
        $worksheet = $this->workbookRepository->findBySlug($worksheet) ?? ($this->pdfRepository->findBySlug($worksheet) ?? abort(404));

        $type = $worksheet instanceof \App\Models\Workbook ? 'workbook' : 'pdf';
        $worksheetRelated = $this->worksheetRepository->getRelatedWorksheet($type, $worksheet->topic);

        return view('user-site.worksheet-detail', [
            'type' => $type,
            'worksheet' => $worksheet,
            'worksheetRelated' => $worksheetRelated,
        ]);
    }
}
