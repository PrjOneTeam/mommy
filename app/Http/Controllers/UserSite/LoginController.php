<?php

namespace App\Http\Controllers\UserSite;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    function index() {
        return view('user-site.login');
    }

    function login(Request $request) {
        $attempt = Auth::guard('web')->attempt([
            'email' => $request->email,
            'password' => $request->password
        ], $request->filled('remember'));

        if ($attempt) {
            return redirect()->route('user-site-home');
        }
        else {
            $error = __('auth.failed');
            throw ValidationException::withMessages([
                'account' => [$error],
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('user-site.login');
    }
}
