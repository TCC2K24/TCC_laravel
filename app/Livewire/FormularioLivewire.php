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
    public $edita = false; 
    public $formulario;

    public function mount($pesquisaId, $formulario = null, $dadosFormulario = null)
    {
    $this->pesquisaId = $pesquisaId;

    if ($this->edita && $formulario) {
        $this->formulario = $formulario; 
        $this->nomeFormulario = $formulario->nome_formulario;
        $this->disciplinaId = $formulario->disciplina_id;
        $this->tempoDeParticipacao = $formulario->tempoDeParticipacao;
        $this->perguntas = $dadosFormulario; 
    } else {
        $this->perguntas = [
            ['pergunta' => '', 'tipo' => 'texto-curto', 'resposta' => '', 'opcoes' => []]
        ];
    }
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
            'disciplinaId' => 'required|exists:disciplinas,idDisciplina',
            'tempoDeParticipacao' => 'required|integer|min:15',
            'perguntas' => 'required|array|min:1',
            'perguntas.*.pergunta' => 'required|string|max:255',
            'perguntas.*.tipo' => 'required|in:texto-curto,texto-longo,escolha-unica,multipla-escolha,estrela',
            'perguntas.*.opcoes' => 'required_if:perguntas.*.tipo,escolha-unica,multipla-escolha|array',
            'perguntas.*.opcoes.*' => 'required_if:perguntas.*.tipo,escolha-unica,multipla-escolha|string|max:255',
        ]);

        if ($this->edita) {
            // Caso de edição: Atualiza o formulário existente
            $this->formulario->update([
                'nome_formulario' => $this->nomeFormulario,
                'dados' => json_encode($this->perguntas),
                'tempoDeParticipacao' => $this->tempoDeParticipacao,
                'pesquisa_id' => $this->pesquisaId,
                'disciplina_id' => $this->disciplinaId,
            ]);
        } else {
            // Caso de criação: Cria um novo formulário
            Formulario::create([
                'nome_formulario' => $this->nomeFormulario,
                'dados' => json_encode($this->perguntas),
                'tempoDeParticipacao' => $this->tempoDeParticipacao,
                'pesquisa_id' => $this->pesquisaId,
                'disciplina_id' => $this->disciplinaId,
            ]);
        }

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
