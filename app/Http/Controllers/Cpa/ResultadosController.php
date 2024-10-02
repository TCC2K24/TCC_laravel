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
    
}
