<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function show()
    {
        return view('login.show');
    }

    public function index(Request $request)
    {
        $login = $request->login;
        $password = $request->password;
        $credentials = ['email' => $login, 'password' => $password];
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return to_route('homepage.index')->with('success', 'Login successfully' . " " . $login . ".");
        } else {
            return back()->withErrors([
                'login' => 'email or password is invalid.'
            ])->onlyInput('login');
        }
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return to_route('login')->with('success', 'Vous êtes bien déconnecté');
    }
}
