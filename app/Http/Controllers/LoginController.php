<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('authen.login');
    }

    public function proses(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password'  =>  'required'
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = User::where('username', $request->username)->first();

            if ($user->role == 1) {
                return redirect()->intended('/Dashboard/Admin');
            } else if ($user->role == 2) {
                return redirect()->intended('/Dashboard/User');
            }
        }
        return back();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
