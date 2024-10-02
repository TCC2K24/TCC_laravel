<?php

namespace App\Http\Controllers\Cpa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisualizarResultadosFormularioController extends Controller
{
    public function visualizarResultadosFormulario()
    {
        // Retornar a Tela
        return view("Cpa/visualizar-resultados-formulario");
    }
}
