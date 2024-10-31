<?php

namespace App\Http\Controllers\Cpa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cpa\pesquisa;

class CriarPesquisaController extends Controller
{
   
    public function criarPesquisa()
    {
        // Carregar a Tela
        return view('Cpa/criar-pesquisa');
    }

    public function store(Request $request)
    {
        // Validação dos campos
        $validatedData = $request->validate([
            'tipo' => 'required|string|max:50',
            'descricao' => 'required|string|max:50',
            'periodo' => 'required|string|max:50',
            'dataFim' => 'required|date',
        ]);

        // Criação da nova pesquisa
        pesquisa::create($validatedData);


         // Define a sessão de sucesso
         return redirect()->route('cpa.criar-pesquisa')->with('success', 'Pesquisa criada com sucesso!');

    }
}
