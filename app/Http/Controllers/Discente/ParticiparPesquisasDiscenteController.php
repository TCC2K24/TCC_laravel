<?php

namespace App\Http\Controllers\Discente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ParticiparPesquisasDiscenteController extends Controller
{
    public function participarPesquisasDiscente()
    {
        // Retornar a Tela
        return view('Discente.participar-pesquisas');
    }
}
