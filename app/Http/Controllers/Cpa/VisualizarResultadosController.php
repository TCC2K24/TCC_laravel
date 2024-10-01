<?php

namespace App\Http\Controllers\Cpa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisualizarResultadosController extends Controller
{
    public function visualizarResultados()
    {
        // Retornar a Tela
        return view("Cpa/visualizar-resultados");
    }
}
