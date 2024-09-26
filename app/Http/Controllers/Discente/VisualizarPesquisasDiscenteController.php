<?php

namespace App\Http\Controllers\Discente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisualizarPesquisasDiscenteController extends Controller
{
    public function visualizarPesquisasDiscente()
    {
        return view("Discente.visualizar-pesquisas");
    }
}
