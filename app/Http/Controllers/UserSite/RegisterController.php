<?php

namespace App\Http\Controllers\UserSite;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller {
    public function index() {
        return \view('user-site.register');
    }

    public function store(Request $request)
    {
        $param = $request->except('_token');
        $customer = new Customer();
        $customer->fill($param);
        $customer->password = Hash::make($param['password']);
        $customer->grade_teacher = [];
        $customer->subject_prefer = [];
        $customer->save();

        return redirect()->route('user-site.login');
    }


}

