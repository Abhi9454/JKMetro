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
                return redirect()->route("HOME.USERDASHBOARD");
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
            $email = filter_var($request->Email, FILTER_SANITIZE_EMAIL);
            if (Auth::attempt(['user_email' => $email, 'password' => $request->Password])) {
                $user_status = DB::table('users')->where('user_email', $request->Email)->get();
                $request->session()->put("value", "admin");
                $request->session()->put("user_id", $user_status[0]->user_id);
                $request->session()->put("email", $user_status[0]->user_email);
                return redirect()->route("HOME.USERDASHBOARD");
            } else {
                return redirect()->back()->withErrors([
                    'approve' => 'Wrong credentials',
                ]);
            }

    }

    public function logout()
    {
        if (Auth::guard("web")) {
            Auth::guard("web")->logout();
            session()->flush();
            session()->regenerate();
        }
        return redirect()->route("HOME.USERDASHBOARD");
    }
}
