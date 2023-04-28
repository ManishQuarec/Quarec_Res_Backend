<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function adminLogout(Request $request)
    {
       
        Session::flush();
        Auth::logout();

        return redirect('/auth/login')->with('message app.logout_success');
    }
}
