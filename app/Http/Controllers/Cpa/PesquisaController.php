<?php

namespace App\Http\Controllers\Cpa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cpa\pesquisa;
use App\Models\Cpa\formulario;
use App\Models\disciplina;
use App\Models\Setor;
use App\Models\Curso;


class PesquisaController extends Controller
{
    public function minhasPesquisas(Request $request)
    {
        $filtros = $request->only(['titulo', 'situacao', 'exibir']);
        $pesquisas = Pesquisa::filtrarPesquisas($filtros);

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
    
        $cursosSelecionados = $pesquisa->Curso->pluck('idCurso')->toArray();
    
        return view('Cpa.editar-pesquisa', compact('pesquisa', 'setores', 'cursos', 'cursosSelecionados'));
    }

    public function postar($id)
    {
        try {
            $pesquisa = Pesquisa::findOrFail($id);
            $pesquisa->postar();

            return redirect()->back()->with('success', 'A pesquisa foi postada com sucesso!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function finalizar($id)
    {
        try {
            $pesquisa = Pesquisa::findOrFail($id);
            $pesquisa->finalizar(); // Chama o método no modelo

            // Redireciona para a rota "tela-inicial-s" com uma mensagem de sucesso
            return redirect()->route('tela-inicial-s')->with('success', 'A pesquisa foi finalizada com sucesso!');
        } catch (\Exception $e) {
            // Redireciona para a rota anterior com uma mensagem de erro
            return redirect()->route('tela-inicial-s')->with('error', $e->getMessage());
        }
    }
    
    public function getCursosPorSetor($setorId)
    {
        $setor = Setor::find($setorId);
    
        if (!$setor) {
            return response()->json(['error' => 'Setor não encontrado'], 404);
        }
    
        $cursos = Curso::bySetor($setorId)->get();
        
        return view('components.cursos', compact('cursos'));
    }
    


    public function store(Request $request)
    {
        $validated = $request->validate(Pesquisa::regrasDeValidacao());

        $pesquisa = Pesquisa::criarPesquisa($validated);

        $pesquisa->Curso()->attach($validated['curso_id']); 

        return redirect()->route('cpa.minhas-pesquisas')->with('success', 'Pesquisa criada com sucesso!');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate(Pesquisa::regrasDeValidacao());

        $pesquisa = Pesquisa::findOrFail($id);
        $pesquisa->update($validated);

        if (!empty($validated['curso_id'])) {
            $pesquisa->sincronizarCursos($validated['curso_id']);
        } else {
            $pesquisa->Curso()->sync([]);
            Formulario::where('pesquisa_id', $pesquisa->idPesquisa)->delete();
        }

        return redirect()->route('cpa.minhas-pesquisas')->with('success', 'Pesquisa editada com sucesso!');
    }

    public function delete($id)
    {
        // Buscar a pesquisa pelo ID
        $pesquisa = Pesquisa::findOrFail($id);

        // Chamar o método removerPesquisa no modelo
        $pesquisa->removerPesquisa();

        // Redirecionar para a lista de pesquisas ou uma página específica com sucesso
        return redirect()->route('cpa.minhas-pesquisas')->with('success', 'Pesquisa removida com sucesso!');
    }


    
    public function show($id)
    {
        $pesquisa = Pesquisa::findOrFail($id); 
        
        return view('cpa.show', compact('pesquisa'));
    }

}
