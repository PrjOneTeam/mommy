<?php

namespace App\Http\Controllers\UserSite;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Pdf;
use App\Models\Slug;
use App\Models\Workbook;

class ArticleController extends Controller
{
    function index() {
        $articleList = Article::orderBy('created_at', 'desc')->get();

        $adsWorkbook = Workbook::where('ads', 1)->first();
        if ($adsWorkbook != null) {
            $adsWorkbook->slug = Slug::where('workbook_id', $adsWorkbook->id)->first()->slug;
        }
        $adsPdf = Pdf::where('ads',1)->first();
        if ($adsPdf != null) {
            $adsPdf->slug = Slug::where('pdf_id', $adsPdf->id)->first()->slug;
        }

        return view('user-site.article', [
            'articleList' => $articleList,
            'adsWorkbook' => $adsWorkbook,
            'adsPdf' => $adsPdf
        ]);
    }

    public function show($id) {
        $article = Article::findOrFail($id);
        $related = Article::take(3)->get();
        $adsWorkbook = Workbook::where('ads', 1)->first();
        if ($adsWorkbook != null) {
            $adsWorkbook->slug = Slug::where('workbook_id', $adsWorkbook->id)->first()->slug;
        }
        $adsPdf = Pdf::where('ads',1)->first();
        if ($adsPdf != null) {
            $adsPdf->slug = Slug::where('pdf_id', $adsPdf->id)->first()->slug;
        }
        return view('user-site.article-detail', [
            'article' => $article,
            'related' => $related,
            'adsWorkbook' => $adsWorkbook,
            'adsPdf' => $adsPdf
        ]);
    }



}
