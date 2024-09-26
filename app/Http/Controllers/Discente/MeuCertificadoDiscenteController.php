<?php

namespace App\Http\Controllers\Discente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MeuCertificadoDiscenteController extends Controller
{
    public function meuCertificadoDiscente()
    {
        // Retornar a Tela
        return view("Discente.meu-certificado");
    }
}
