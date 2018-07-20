<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;


class UsuarioController extends Controller
{

  

    public function index()
    {

        $usuarios = User::all();

        return view('abas.users', compact('usuarios'));

    }

    public function create()
    {

        return view('abas.register');

    }

    public function store()
    {

        $this->validate(request(), [

            'nome' => 'required',
            'email' => 'required|email',
            'password' => 'required'
            
        ]);

        $usuario = User::create(request(['nome','email', 'password']));

        auth()->login($usuario);

        return redirect('/');

    }
}
