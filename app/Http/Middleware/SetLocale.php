<?php

namespace App\Http\Middleware;

use App\Helpers\Helper;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        $locale = session('locale', 'vi');

        App::setLocale($locale);

        return $next($request);
    }
}
