<?php

namespace App\Http\Controllers\Cpa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormulariosDaPesquisaController extends Controller
{
    public function formulariosDaPesquisa()
    {
        return view('Cpa/formularios-da-pesquisa');
    }
}
