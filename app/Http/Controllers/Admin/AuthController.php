<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function getLogin()
    {
        if (Auth::check()) {
            return redirect()->route('adminDashboard');
        }
        return view('admin.login');
    }

    public function postLogin(Request $request)
    {
        $remember = false;
        if ($request->remember) {
            $remember = true;
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            return redirect()->route('adminDashboard');
        }
        return redirect()->route('getLogin');
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('getLogin');
    }
}
