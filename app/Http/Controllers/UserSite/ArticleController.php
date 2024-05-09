<?php

namespace App\Http\Controllers\UserSite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class ArticleController extends Controller
{
    function index() {
        return view('user-site.article');
    }

}
