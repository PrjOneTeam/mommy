<?php

namespace App\Http\Controllers\UserSite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocaleController extends Controller {
    public function setLocale($locale)
    {
        if (in_array($locale, ['en', 'vi'])) {
            session(['locale' => $locale]);
            App::setlocale(session()->get('locale','en'));
        }

        return redirect()->back();
    }
}

