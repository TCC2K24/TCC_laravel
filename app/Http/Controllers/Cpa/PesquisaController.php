<?php

namespace App\Http\Controllers\Cpa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cpa\pesquisa;
use App\Models\Setor;
use App\Models\Curso;
use App\Models\Cpa\formulario;


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
        return view('Cpa.criar-pesquisa', compact('setores', 'cursos'));
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
        $cursos = Curso::where('setor_id', $setorId)->get();
        return response()->json($cursos);
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

    public function salvarEdicao(Request $request, $id)
    {
        // Validação do formulário
        $validated = $request->validate([
            'tipo' => 'required|string',
            'descricao' => 'required|string',
            'periodo' => 'required|string',
            'setor_id' => 'required|integer',
            'curso_id' => 'required|array',
            'curso_id.*' => 'integer|exists:cursos,idCurso',
            'dataFim' => 'required|date',
        ]);
    
        // Encontrar a pesquisa para edição
        $pesquisa = Pesquisa::findOrFail($id);
    
        // Armazenar os cursos antigos associados a esta pesquisa
        $cursosAntigos = $pesquisa->Curso->pluck('idCurso')->toArray(); // Cursos antigos da pesquisa
    
        // Atualiza os dados da pesquisa
        $pesquisa->update([
            'tipo' => $validated['tipo'],
            'descricao' => $validated['descricao'],
            'periodo' => $validated['periodo'],
            'setor_id' => $validated['setor_id'],
            'dataFim' => $validated['dataFim'],
        ]);
    
        // Se o setor foi alterado, remova todos os cursos antigos associados a essa pesquisa
        if ($pesquisa->setor_id != $validated['setor_id']) {
            // Remover todos os cursos antigos da pesquisa
            $pesquisa->Curso()->detach();
        
            // Remover formulários relacionados aos cursos antigos
            Formulario::whereIn('disciplina_id', function ($query) use ($cursosAntigos) {
                // Encontrar disciplinas associadas aos cursos antigos através da tabela intermediária
                $query->select('disciplina_id')
                    ->from('curso_disciplina')
                    ->whereIn('curso_id', $cursosAntigos);
            })->where('pesquisa_id', $id)
              ->delete();
        }
    
        // Atualiza a associação de cursos na pesquisa (com sync)
        $pesquisa->Curso()->sync($validated['curso_id']);
    
        // Verifica quais cursos foram removidos
        $cursosAdicionados = $validated['curso_id'];
        $cursosRemovidos = array_diff($cursosAntigos, $cursosAdicionados);
    
        // Se houver cursos removidos, exclui os formulários relacionados
        if (count($cursosRemovidos) > 0) {
            Formulario::whereIn('disciplina_id', function ($query) use ($cursosRemovidos) {
                // Encontrar disciplinas associadas aos cursos removidos através da tabela intermediária
                $query->select('disciplina_id')
                    ->from('curso_disciplina')
                    ->whereIn('curso_id', $cursosRemovidos);
            })->where('pesquisa_id', $id)
              ->delete();
        }
        
    
        return redirect()->route('cpa.minhas-pesquisas')->with('success', 'Pesquisa atualizada com sucesso!');
    }
    
    

    public function show($id)
    {
        $pesquisa = Pesquisa::findOrFail($id); 
        
        return view('cpa.show', compact('pesquisa'));
    }

}
