<?php

namespace App\Http\Controllers;

use App\Models\User as Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function showlogin()
    {
        if (Auth::guard("web")) {
            if (strcmp(session()->get('value', 'default'), "admin") == 0) {
                return redirect()->route("HOME.SUPERUSER");
            }
        }
        return view('Auth.login');
    }

    

    public function login(Request $request)
    {
        $this->validate($request, [
            'Email' => 'required',
            'Password' => 'required',
        ],
            [
                'Email.required' => "Feilds are required!!!",
                'Password.required' => "Blank Password!!!",
            ]
        );
            $username = filter_var($request->Email, FILTER_SANITIZE_STRING);
            if (Auth::guard("web")->attempt(['user_name' => $username, 'password' => $request->Password])) {
                $request->session()->put("value", "admin");
                $request->session()->put("user_id", $user_status[0]->user_id);
                $request->session()->put("name", $user_status[0]->full_name);
                $request->session()->put("email", $user_status[0]->email);
                $request->session()->put("username", $user_status[0]->user_name);
                $request->session()->put("phone_number", $user_status[0]->phone_number);
                $request->session()->put("profile_image", $user_status[0]->profile_image);
                return redirect()->route("HOME.SUPERUSER");
            } else {
                return redirect()->back()->withErrors([
                    'approve' => 'Wrong credentials',
                ]);
            }

    }

    public function logout()
    {
        if (Auth::guard("user_web")) {
            Auth::guard("user_web")->logout();
            session()->flush();
            session()->regenerate();
        }
        return redirect()->route("HOME.USERDASHBOARD");
    }
}
