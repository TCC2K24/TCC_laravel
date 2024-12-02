<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TelasController extends Controller
{
    public function telaInicial()
    {
        return view('tela-inicial');
    }
}
