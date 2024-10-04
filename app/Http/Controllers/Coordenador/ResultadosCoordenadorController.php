<?php

namespace App\Http\Controllers\Coordenador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResultadosCoordenadorController extends Controller
{
    public function resultadosCoordenador()
    {
        // Retornar a Tela
        return view("Coordenador.resultados");
    }
}
