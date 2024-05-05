<?php

namespace App\Http\Controllers\UserSite;


use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Favorite;
use App\Models\Workbook;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\ValidationException;

class AccountController extends Controller {
    public function index() {
        $userInfo = Auth::user();
        $data = Customer::findOrFail($userInfo->id);
        if (!Helper::getCookie('show_language')) {
            $flag = 'vn';
            Helper::setCookie('show_language', $flag);
        } else {
            $flag = Helper::getCookie('show_language');
        }

        $workbookList = Workbook::all();
        $lang = config('lang_admin.'.$flag);
        View::share('flag', $flag);
        View::share('lang', $lang);
        return view('user-site.account', [
            'data' => $data,
            'recommend_list' => $workbookList
        ]);
    }

    public function favoritesList()
    {
        $userInfo = Auth::user();
        $data = Favorite::where('customer_id', $userInfo->id)->get();
        return view('user-site.edit-account', [
            'data' => $data
        ]);
    }
    public function edit()
    {
        $userInfo = Auth::user();
        return view('user-site.edit-account', [
            'data' => $userInfo
        ]);
    }

    public function update(Request $request)
    {
        $userInfo = Auth::user();
        $customer = Customer::findOrFail($userInfo->id);
        $param = $request->except('_token', '_method', 'actionxm', 'pathway', 'savebtn', 'xm_form_request_token', 'xm_user_token');;
        $customer->fill($param);
        $customer->save();
        return redirect()->route('my-account');

    }

    public function formChangePassword() {
        return view('user-site.change-password');
    }

    public function storeChangePassword(Request $request) {
        $new = $request->password;
        $reNew = $request->confirm_password;
        if ($new != $reNew) {
            $error = 'Mật khẩu mới nhập lại không khớp.';
            throw ValidationException::withMessages([
                'pass' => [$error],
            ]);
        } else {
            $customer_id = Auth::user()->id;
            $customer = Customer::findOrFail($customer_id);
            $customer->password = Hash::make($new);
            $customer->save();
            \Auth::logout();
            $request->session()->invalidate();
            return redirect()->route('user-site.login')
                ->with('loginMsgSuccess', 'Đổi mật khẩu thành công')
                ->with('loginMsgError', 'Vui lòng đăng nhập để tiếp tục');
        }
    }
}

