<?php

namespace App\Http\Controllers\Cpa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CriarFormularioController extends Controller
{
    public function criarFormulario()
    {
        // Retornar a Tela
        return view('Cpa.criar-formulario');
    }
}
