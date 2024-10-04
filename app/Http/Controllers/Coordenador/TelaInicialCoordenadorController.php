<?php

namespace App\Http\Controllers\Coordenador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TelaInicialCoordenadorController extends Controller
{
    public function telaInicialCoordenador()
    {
        // Retornar a Tela
        return view("Coordenador.tela-inicial");
    }
}
