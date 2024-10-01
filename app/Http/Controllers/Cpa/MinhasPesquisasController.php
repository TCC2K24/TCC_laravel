<?php

namespace App\Http\Controllers\Cpa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MinhasPesquisasController extends Controller
{
    public function minhasPesquisas()
    {
        // Carregar a Tela
        return view('Cpa/minhas-pesquisas');
    }
}
