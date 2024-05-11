<?php

namespace App\Http\Controllers\UserSite;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class HomeController extends Controller
{
    function index() {
        $articleList = Article::take(3)->get();
        return view('user-site.home', [
            'articleList' => $articleList
        ]);
    }

}
