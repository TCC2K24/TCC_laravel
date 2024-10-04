<?php

namespace App\Http\Controllers\Coordenador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisualizarResultadosFormularioCoordenadorController extends Controller
{
    public function visualizarResultadosFormularioCoordenador()
    {
        // Retornar a Tela
        return view("Coordenador.visualizar-resultados-formulario");
    }
}
