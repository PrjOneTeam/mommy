<?php

namespace App\Http\Middleware;

use App\Helpers\Helper;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::guard('admin')->check() || !Auth::guard('admin')->user()->is_delete == 0) {
            if (!Helper::getCookie('show_language')) {
                $flag = 'vn';
                Helper::setCookie('show_language', $flag);
            } else {
                $flag = Helper::getCookie('show_language');
            }
            $lang = config('lang_admin.'.$flag);

            View::share('flag', $flag);
            View::share('lang', $lang);

            return $next($request);
        } else {
            return redirect()->route('admin.login');
        }
    }
}
