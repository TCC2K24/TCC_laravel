<?php

namespace App\Http\Controllers\Discente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cpa\pesquisa;
use App\Models\Cpa\resultado;
use App\Models\usuario;
use App\Models\Cpa\formulario;

class PesquisaController extends Controller
{
    public function participarPesquisasDiscente($id)
    {
        $usuario = auth('usuario')->user();
        
        // usuario disciplinas cadastradas
        $disciplinas = $usuario->disciplina->pluck('idDisciplina')->toArray();

        // busca pesquisa por id    
        $pesquisa = Pesquisa::findOrFail($id);
        $formularios = $pesquisa->getFormulariosByDisciplinas($disciplinas);

        $formulariosRespondidos = $pesquisa->Formulario() 
            ->whereIn('disciplina_id', $disciplinas) 
            ->whereHas('resultados', function ($query) use ($id, $usuario) {
                $query->where('resultados.id_pesquisa', $id) 
                    ->where('resultados.id_usuario', $usuario->idUsuario); 
            })
            ->pluck('idFormulario'); 

        return view('Discente.participar-pesquisas', compact('pesquisa', 'formularios', 'formulariosRespondidos'));
    }

    public function visualizarPesquisasDiscente()
    {
        $usuario = auth('usuario')->user();
        $cursoId = $usuario->curso_id;

        $pesquisas = Pesquisa::getPesquisasByCurso($cursoId);

        return view("Discente.visualizar-pesquisas", compact('pesquisas'));
    }

    public function responderFormularioDiscente($idPesquisa, $idFormulario)
    {
        // busca pesquisa por id
        $pesquisa = Pesquisa::findOrFail($idPesquisa);
        $formulario = $pesquisa->getFormularioComPerguntas($idFormulario);
        $perguntas = $formulario->perguntas;

        return view('Discente.responder-formulario', compact('pesquisa', 'formulario', 'perguntas'));
    }

    public function enviarResposta(Request $request, $idPesquisa, $idFormulario)
    {
        $request->validate(['respostas' => 'required|array']);

        $usuarioId = auth('usuario')->user()->idUsuario;

        $pesquisa = Pesquisa::findOrFail($idPesquisa);
        $pesquisa->salvarRespostas($request->input('respostas'), $idFormulario, $usuarioId);

        return redirect()->route('discente.participar-pesquisas', ['id' => $idPesquisa])
        ->with('success', 'Respostas enviadas com sucesso!');
    }
}