<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function login()
    {
        // Carregar a Tela
        return view('Usuario.login');

    }
}
