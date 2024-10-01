<?php

namespace App\Http\Controllers\Cpa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisualizarResultadosPesquisaController extends Controller
{
    public function visualizarResultadosPesquisa()
    {
        // Retornar a Tela
        return view("Cpa/visualizar-resultados-pesquisa");
    }
}
