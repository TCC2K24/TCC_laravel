<?php

namespace App\Http\Controllers\Cpa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResultadosController extends Controller
{
    public function resultados()
    {
        // Retornar a Tela
        return view("Cpa/resultados");
    }
    
    public function visualizarResultados()
    {
        // Retornar a Tela
        return view("Cpa/visualizar-resultados");
    }

    public function visualizarResultadosFormulario()
    {
        // Retornar a Tela
        return view("Cpa/visualizar-resultados-formulario");
    }

    public function visualizarResultadosPesquisa()
    {
        // Retornar a Tela
        return view("Cpa/visualizar-resultados-pesquisa");
    }
}
