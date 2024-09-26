<?php

namespace App\Http\Controllers\Discente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TelaInicialDiscenteController extends Controller
{
    public function telaInicialDiscente()
    {
        // Retornar a Tela
        return view('Discente.tela-inicial');
    }
}
