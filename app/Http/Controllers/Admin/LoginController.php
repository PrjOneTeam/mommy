<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    function index() {
        if (Auth::guard('admin')->check() && Auth::guard('admin')->user()->is_delete == 0) {
            return redirect()->route('admin.dashboard');
        }
        return view('auth.login');
    }

    function login(Request $request) {
        $attempt = Auth::guard('admin')->attempt([
            'email' => $request->userId,
            'password' => $request->password
        ], $request->filled('remember'));

        if ($attempt) {
            return redirect()->route('admin.customer.index');
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
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
