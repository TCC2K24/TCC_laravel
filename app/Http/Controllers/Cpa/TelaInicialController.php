<?php

namespace App\Http\Controllers\Cpa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TelaInicialController extends Controller
{
    public function telaInicial()
    {
        // Carregar a tela
        return view('Cpa/tela-inicial');
    }
}
