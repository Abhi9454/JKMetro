<?php

namespace App\Http\Controllers;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showHome()
    {
        if (Auth::guard("web")) {
            if (strcmp(session()->get('value', 'default'), "admin") == 0) {
                return redirect()->route("HOME.USERDASHBOARD");
            }
        }
        return view('Auth.login');
    }
}
