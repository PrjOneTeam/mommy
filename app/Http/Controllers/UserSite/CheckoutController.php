<?php

namespace App\Http\Controllers\UserSite;

use App\Http\Controllers\Controller;

class CheckoutController extends Controller {
    public function index() {

        return view('user-site.checkout');
    }
}

