<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function create()
    {
        return view('User.register');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->fill($request->input());
        if($user->save()){
            return redirect()->route('login')->with('msg', 'Usuario criado com sucesso');
        }else{
            return redirect()->route('User.register')->with('error', 'Erro ao criar usuario');
        };
    }
}
