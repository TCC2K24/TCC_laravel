<?php

namespace App\Http\Controllers\Cpa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormulariosController extends Controller
{
    public function criarFormulario()
    {
        // Retornar a Tela
        return view('Cpa.criar-formulario');
    }
    
    public function formulariosDaPesquisa()
    {
        return view('Cpa/formularios-da-pesquisa');
    }

    public function modelosDeFomulario()
    {
        // Retornar a Tela
        return view('Cpa.modelos-de-formulario');
    }

}
