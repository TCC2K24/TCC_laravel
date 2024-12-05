<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('usuario.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuario.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'GRR' =>['required'],
            'password'=>['required']
        ],[
            'GRR.required'=>'Digite o seu GRR',
            'password.required'=>'Digite sua senha'
        ]);

        $credentials = $request->only('GRR','password');
        $authenticated = Auth::guard('usuario')->attempt($credentials);
       
        if(!$authenticated){
            return redirect()->route('usuario.login')->withErrors(['error'=>'Credenciais inválidas']);
        }


        return redirect()->route('tela-inicial-d')->with('success','logado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        //
    }

  
}
