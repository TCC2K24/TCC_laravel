<?php

namespace App\Http\Controllers\Discente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CertificadoController extends Controller
{
    public function meuCertificadoDiscente()
    {
        // Retornar a Tela
        return view("Discente.meu-certificado");
    }

    public function meusCertificadosDiscente()
    {
        // Retornar a Tela
        return view("Discente.meus-certificados");
    }
}
