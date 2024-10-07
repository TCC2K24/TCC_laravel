<?php

namespace App\Http\Controllers\Cpa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cpa\CriarPesquisa;

class CriarPesquisaController extends Controller
{
   
    public function criarPesquisa()
    {
        // Carregar a Tela
        return view('Cpa/criar-pesquisa');
    }

    public function store(Request $request)
    {
         return CriarPesquisa::create([$request->all()]);
    }
}
