<?php

namespace App\Http\Controllers\Coordenador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisualizarResultadosPesquisaCoordenadorController extends Controller
{
    public function visualizarResultadosPesquisaCoordenador()
    {
        // Retornar a Tela
        return view("Coordenador.visualizar-resultados-pesquisa");
    }
}
