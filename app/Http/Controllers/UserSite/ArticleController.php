<?php

namespace App\Http\Controllers\UserSite;

use App\Http\Controllers\Controller;
use App\Models\Article;

class ArticleController extends Controller
{
    function index() {
        $articleList = Article::orderBy('created_at', 'desc')->get();
        return view('user-site.article', [
            'articleList' => $articleList
        ]);
    }

    public function show($id) {
        $article = Article::findOrFail($id);
        $related = Article::take(3)->get();
        return view('user-site.article-detail', [
            'article' => $article,
            'related' => $related
        ]);
    }



}
