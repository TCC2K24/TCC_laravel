<?php

namespace App\Http\Controllers\Cpa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CriarPesquisaController extends Controller
{
    public function criarPesquisa()
    {
        // Carregar a Tela
        return view('Cpa/criar-pesquisa');
    }
}
