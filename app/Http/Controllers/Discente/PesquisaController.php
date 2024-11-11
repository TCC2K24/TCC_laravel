<?php

namespace App\Http\Controllers\Discente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PesquisaController extends Controller
{
    public function participarPesquisasDiscente()
    {
        // Retornar a Tela
        return view('Discente.participar-pesquisas');
    }

    public function visualizarPesquisasDiscente()
    {
        // Retornar a Tela
        return view("Discente.visualizar-pesquisas");
    }

    public function responderFormularioDiscente()
    {
        // Retornar a Tela
        return view("Discente.responder-formulario");
    }
}
