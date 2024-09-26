<?php

namespace App\Http\Controllers\Discente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResponderFormularioDiscenteController extends Controller
{
    public function responderFormularioDiscente()
    {
        // Retornar a Tela
        return view("Discente.responder-formulario");
    }
}
