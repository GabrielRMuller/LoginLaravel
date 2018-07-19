<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Usuario;


class UsuarioController extends Controller
{
    public function index()
    {

        $usuarios = Usuario::all();

        return view('abas.users', compact('usuarios'));

    }

    public function showRegister()
    {

        return view('abas.register');

    }

    public function store()
    {

        $this->validate(request(), [

            'nome' => 'required',
            'email' => 'required',
            'password' => 'required'
            
        ]);

        usuario::create(request(['nome', 'email', 'password']));

        return redirect('/');

    }
}
