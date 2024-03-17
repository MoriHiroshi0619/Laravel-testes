<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credenciais = $request->only('email', 'password');


        if(Auth::attempt($credenciais, true)){
            $request->session()->regenerate();

            return redirect()->intended('home')->with('msg', 'Login feito com sucesso');
        }

        return back()->withErrors([
            'email' => 'Os dados fornecidos estão incorretos',
        ])->withInput($request->only('email'));
    }

    public function logout(Request $request)
    {
        \auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }

}
