<?php

namespace App\Http\Controllers\Cpa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cpa\pesquisa;
use App\Models\Cpa\formulario;
use App\Models\Disciplina;


class FormulariosController extends Controller
{
    public function criarFormulario($idPesquisa)
    {
        $pesquisa = Pesquisa::findOrFail($idPesquisa);
        $cursos = $pesquisa->Curso;  
        $disciplinas = $cursos->pluck('Disciplina')->flatten();

        return view('cpa.criar-formulario', compact('pesquisa'));
    }

    public function formulariosDaPesquisa($id)
    {
        $pesquisa = Pesquisa::findOrFail($id);
        $formularios = $pesquisa->Formulario()->with('disciplina')->get();

        return view('cpa.formularios-da-pesquisa', compact('pesquisa', 'formularios'));
    }

    public function destroy($idPesquisa, $idFormulario)
    {
        $formulario = Formulario::findOrFail($idFormulario);
        $pesquisaId = Pesquisa::findOrFail($idPesquisa);
        $formulario->delete();

        return redirect()->route('cpa.formularios-da-pesquisa', ['id' => $pesquisaId])
                        ->with('success', 'Formulário excluído com sucesso!');
    }

    public function modelosDeFomulario()
    {
        return view('Cpa.modelos-de-formulario');
    }

}
