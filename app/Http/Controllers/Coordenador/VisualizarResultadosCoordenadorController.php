<?php

namespace App\Http\Controllers\Coordenador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisualizarResultadosCoordenadorController extends Controller
{
    public function visualizarResultadosCoordenador()
    {
        // Retornar a Tela
        return view("Coordenador.visualizar-resultados");
    }
}
