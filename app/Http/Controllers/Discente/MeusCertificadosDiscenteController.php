<?php

namespace App\Http\Controllers\Discente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MeusCertificadosDiscenteController extends Controller
{
    public function meusCertificadosDiscente()
    {
        // Retornar a Tela
        return view("Discente.meus-certificados");
    }
}
