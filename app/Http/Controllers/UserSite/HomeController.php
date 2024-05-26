<?php

namespace App\Http\Controllers\UserSite;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Pdf;
use App\Models\Slug;
use App\Models\Workbook;
use App\Repositories\WorksheetRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class HomeController extends Controller
{
    public function __construct(
        private readonly WorksheetRepository $worksheetRepository,
    ) {
    }
    function index() {
        $articleList = Article::take(3)->get();
        $workbookList = $this->worksheetRepository->getWorksheets(
            null,
            null,
            null,
            null,
        )->take(10);

        $adsWorkbook = Workbook::where('ads', 1)->first();
        if ($adsWorkbook !=null) {
            $adsWorkbook->slug = Slug::where('workbook_id', $adsWorkbook->id)->first()->slug;
        }

        $adsPdf = Pdf::where('ads',1)->first();
        if ($adsPdf) {
            $adsPdf->slug = Slug::where('pdf_id', $adsPdf->id)->first()->slug;
        } 

        return view('user-site.home', [
            'articleList' => $articleList,
            'workbookList' => $workbookList,
            'adsWorkbook' => $adsWorkbook,
            'adsPdf' => $adsPdf
        ]);
    }

}
