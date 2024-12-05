<?php

namespace App\Http\Controllers\Discente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CertificadoController extends Controller
{
    public function meuCertificadoDiscente()
    {
        return view("Discente.meu-certificado");
    }

    public function meusCertificadosDiscente()
    {
        return view("Discente.meus-certificados");
    }
}
