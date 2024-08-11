<?php

namespace App\Http\Controllers\UserSite;

use App\Http\Controllers\Controller;
use App\Mail\PasswordResetMail;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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

    public function forgot()
    {
        return view('user-site.forgot');
    }

    public function submitForgot(Request $request)
    {
        $customer = Customer::where('email', $request->email)->first();

        if ($customer) {
            $resetCode = str_pad(random_int(0, 9999), 4, '0', STR_PAD_LEFT);
            $customer->reset_code = $resetCode;
            $customer->save();
            Mail::to($customer->email)->send(new PasswordResetMail($resetCode));
            return view('user-site.reset-password', ['customer_email' => $customer->email]);
        }
        else {
            $error = __('auth.failed');
            throw ValidationException::withMessages([
                'account' => [$error],
            ]);
        }

    }

    public function resetPassword(Request $request)
    {
        $param = $request->except('_token');
        $customer = Customer::where('email', $param['customer_email'])->first();
        if ($customer->reset_code == $param['reset_code']) {
            $customer->password = Hash::make($param['password']);
            $customer->save();
            return view('user-site.login');
        } else {
            $error = 'Wrong password or reset code';
            throw ValidationException::withMessages([
                'account' => [$error],
            ]);
        }
    }
}
