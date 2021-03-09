<?php

namespace App\Http\Controllers;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function showHome()
    {
        return redirect()->route("HOME.USERDASHBOARD");
    //     if (strcmp(session()->get('value', 'default'), "admin") == 0) {
                
    //     }
    //     return redirect()->route("LOGIN");
    }
}
