<?php

namespace App\Http\Controllers\UserSite;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Pdf;
use App\Models\Slug;
use App\Models\Workbook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class HomeController extends Controller
{
    function index() {
        $articleList = Article::take(3)->get();
        $adsWorkbook = Workbook::where('ads', 1)->first();
        $adsWorkbook->slug = Slug::where('workbook_id', $adsWorkbook->id)->first()->slug;
        $adsPdf = Pdf::where('ads',1)->first();
        $adsPdf->slug = Slug::where('pdf_id', $adsPdf->id)->first()->slug;
        return view('user-site.home', [
            'articleList' => $articleList,
            'adsWorkbook' => $adsWorkbook,
            'adsPdf' => $adsPdf
        ]);
    }

}
