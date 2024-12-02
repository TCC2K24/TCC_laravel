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
        $usuarioId = auth('usuario')->user()->idUsuario;
        $usuario = usuario::find($usuarioId);

        $disciplinas = $usuario->disciplina->pluck('idDisciplina');

        $pesquisa = Pesquisa::findOrFail($id);

        $formularios = $pesquisa->Formulario()
                                ->whereIn('disciplina_id', $disciplinas->toArray())
                                ->with('disciplina')
                                ->get();

        return view('Discente.participar-pesquisas', compact('pesquisa', 'formularios'));
    }

    public function visualizarPesquisasDiscente()
    {
        
        $usuarioId = auth('usuario')->user()->idUsuario; 
        $usuario = usuario::find($usuarioId);

        $cursoId = $usuario->curso_id; 
    
        $pesquisas = pesquisa::whereHas('Curso', function($query) use ($cursoId) {
            $query->where('curso_id', $cursoId);
        })->get();

        return view("Discente.visualizar-pesquisas", compact('pesquisas'));
    }

    public function responderFormularioDiscente($idPesquisa, $idFormulario)
    {
        $pesquisa = pesquisa::with('Curso')->findOrFail($idPesquisa);
        $formulario = formulario::where('pesquisa_id', $idPesquisa)
                                ->where('idFormulario', $idFormulario)
                                ->firstOrFail();

        $perguntas = json_decode($formulario->dados, true);

        return view('Discente.responder-formulario', compact('pesquisa', 'formulario', 'perguntas'));
    }

    public function enviarResposta(Request $request, $idPesquisa, $idFormulario)
    {

        $request->validate([
            'respostas' => 'required|array',
        ]);

        $respostas = $request->input('respostas');

        Resultado::create([
            'resultados' => json_encode($respostas), 
            'id_pesquisa' => $idPesquisa,
            'id_formulario' => $idFormulario,  
        ]);

        return redirect()->route('tela-inicial-d')->with('success', 'Respostas enviadas com sucesso!');
    }

}
