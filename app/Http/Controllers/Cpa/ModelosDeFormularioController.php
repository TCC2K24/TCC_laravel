<?php

namespace App\Http\Controllers\Cpa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ModelosDeFormularioController extends Controller
{
    public function modelosDeFomulario()
    {
        // Retornar a Tela
        return view('Cpa.modelos-de-formulario');
    }
}
