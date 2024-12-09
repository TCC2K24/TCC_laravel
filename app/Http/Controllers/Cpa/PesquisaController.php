<?php

namespace App\Http\Controllers\Cpa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cpa\pesquisa;
use App\Models\Setor;
use App\Models\Curso;


class PesquisaController extends Controller
{
    public function minhasPesquisas()
    {
        $pesquisas = pesquisa::all();
        return view('Cpa.minhas-pesquisas', compact('pesquisas'));
    }

    public function criarPesquisa()
    {
        $setores = Setor::all();
        $cursos = Curso::all();
        $cursosSelecionados = [];
        return view('Cpa.criar-pesquisa', compact('setores', 'cursos', 'cursosSelecionados'));
    }

    public function editarPesquisa($id)
    {
        $pesquisa = Pesquisa::findOrFail($id);
        $setores = Setor::all();
        $cursos = Curso::all();
    
        // Obtenha os cursos já selecionados para essa pesquisa
        $cursosSelecionados = $pesquisa->Curso->pluck('idCurso')->toArray();
    
        return view('Cpa.editar-pesquisa', compact('pesquisa', 'setores', 'cursos', 'cursosSelecionados'));
    }
    
    public function getCursosPorSetor($setorId)
    {
        $setor = Setor::find($setorId);
        
        if (!$setor) {
            return response()->json(['error' => 'Setor não encontrado'], 404);
        }

        $cursos = Curso::where('setor_id', $setorId)->get();

        if ($cursos->isEmpty()) {
            return response()->json(['message' => 'Nenhum curso encontrado para este setor.'], 200);
        }

        return view('components.cursos', compact('cursos'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'tipo' => 'required|string',
            'descricao' => 'required|string',
            'periodo' => 'required|string',
            'setor_id' => 'required|integer',
            'curso_id' => 'required|array', 
            'curso_id.*' => 'integer|exists:cursos,idCurso', 
            'dataFim' => 'required|date',
        ]);

        // Criação da pesquisa
        $pesquisa = Pesquisa::create([
            'tipo' => $validated['tipo'],
            'descricao' => $validated['descricao'],
            'periodo' => $validated['periodo'],
            'setor_id' => $validated['setor_id'],
            'dataFim' => $validated['dataFim'],
        ]);

        $pesquisa->Curso()->attach($validated['curso_id']); 

        return redirect()->route('cpa.minhas-pesquisas')->with('success', 'Pesquisa criada com sucesso!');
    }


    public function show($id)
    {
        $pesquisa = Pesquisa::findOrFail($id); 
        
        return view('cpa.show', compact('pesquisa'));
    }

}
