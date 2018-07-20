<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SistemaController extends Controller
{
    public function index()
    {

        return view('welcome');

    }

    public function create()
    {

        return view('abas.login');

    }

    public function store()
    {


        if(! auth()->attempt(request(['email', 'password']))){
            
            return back();

        }
        
        return redirect('/');        
        
        // $this->validate(request(), [

        //     'nome' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required',

        // ]);

        // $usuario = User::create(request(['nome', 'email', 'password']));

        // auth()->login($usuario);

        // return redirect('/');

    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/');
    }
}
