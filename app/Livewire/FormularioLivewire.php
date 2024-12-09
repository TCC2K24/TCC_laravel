<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Cpa\Formulario;
use App\Models\Cpa\Pesquisa;
use App\Models\Disciplina;


class FormularioLivewire extends Component
{
    public $nomeFormulario;
    public $perguntas = [];
    public $disciplinaId;
    public $pesquisaId;
    public $tempoDeParticipacao;

    public function mount($pesquisaId)
    {
        $this->pesquisaId = $pesquisaId;
        $this->perguntas = [
            ['pergunta' => '', 'tipo' => 'texto-curto', 'resposta' => '', 'opcoes' => []]
        ];
    }

    public function adicionarPergunta()
    {
        $this->perguntas[] = [
            'pergunta' => '',
            'tipo' => 'texto-curto',
            'resposta' => '',
            'opcoes' => []
        ];
    }

    public function adicionarOpcao($index)
    {
        $this->perguntas[$index]['opcoes'][] = '';
    }

    public function removerOpcao($index, $opcaoIndex)
    {
        unset($this->perguntas[$index]['opcoes'][$opcaoIndex]);
        $this->perguntas[$index]['opcoes'] = array_values($this->perguntas[$index]['opcoes']); 
    }

    public function removerPergunta($index)
    {
        unset($this->perguntas[$index]);
        $this->perguntas = array_values($this->perguntas);
    }

    public function salvarFormulario()
    {
        $this->validate([
            'nomeFormulario' => 'required|string|max:255',
        ]);

        Formulario::create([
            'nome_formulario' => $this->nomeFormulario,
            'dados' => json_encode($this->perguntas),
            'tempoDeParticipacao' => $this->tempoDeParticipacao,
            'pesquisa_id' => $this->pesquisaId,
            'disciplina_id' => $this->disciplinaId,
        ]);

        return redirect()->route('cpa.formularios-da-pesquisa', ['id' => $this->pesquisaId]);
    }

    public function render()
    {
        $pesquisa = Pesquisa::findOrFail($this->pesquisaId);
        $cursos = $pesquisa->Curso;

        $disciplinas = $cursos->pluck('Disciplina')->flatten();

        return view('livewire.formulario-livewire', compact('disciplinas'));
    }


}
