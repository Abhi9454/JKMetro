<?php

namespace App\Http\Controllers;

use App\Models\User as Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function showHome()
    {
        if (Auth::guard("web")) {
            if (strcmp(session()->get('value', 'default'), "admin") == 0) {
                return redirect()->route("HOME.SUPERUSER");
            }
        }
        return view('Auth.login');
    }
}
