<?php

namespace App\Models\cpa;

use App\Models\Curso;
use App\Models\Usuario;
use App\Models\Setor;
use App\Models\Disciplina;
use App\Models\cpa\Resultado;
use App\Models\cpa\Formulario;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pesquisa extends Model
{
    use HasFactory;

    protected $primaryKey = 'idPesquisa'; 
    protected $fillable = ['tipo', 'descricao', 'periodo', 'dataInicio', 'dataFim', 'status', 'setor_id'];
    protected $table = 'pesquisas';

    // Relacionamentos
    public function Formulario() : HasMany {
        return $this->hasMany(Formulario::class, 'pesquisa_id', 'idPesquisa');
    }

    public function Curso() : BelongsToMany {
        return $this->belongsToMany(Curso::class, 'pesquisa_curso', 'pesquisa_id', 'curso_id');
    }

    public function Usuario() : BelongsToMany {
        return $this->belongsToMany(Usuario::class);
    }

    public function Certificado(): HasMany {
        return $this->hasMany(Certificado::class);
    }

    public function Resultado(): HasMany {
        return $this->hasMany(Resultado::class, 'id_pesquisa', 'idPesquisa');
    }

    public function Setor(): BelongsTo {
        return $this->belongsTo(Setor::class, 'setor_id');
    }

    // Métodos de consulta
    public function getFormulariosByDisciplinas(array $disciplinas) {
        return $this->Formulario()
                    ->whereIn('disciplina_id', $disciplinas)
                    ->with('disciplina')
                    ->get();
    }

    public static function getPesquisasByCurso($cursoId, $status = 'postada') {
        return self::whereHas('Curso', function($query) use ($cursoId) {
            $query->where('curso_id', $cursoId);
        })->where('status', $status)->get();
    }

    public function getFormularioComPerguntas($idFormulario) {
        $formulario = $this->Formulario()
                        ->where('idFormulario', $idFormulario)
                        ->firstOrFail();
        $formulario->perguntas = json_decode($formulario->dados, true);
        return $formulario;
    }

    // Métodos de ação
    public function postar() {
        if ($this->status === 'em aberto') {
            $this->status = 'postada';
            $this->save();
        } else {
            throw new \Exception('A pesquisa não está em estado válido para ser postada.');
        }
    }

    public function finalizar() {
        $this->status = 'finalizada';
        $this->save();   
    }

    // Métodos estáticos
    public static function criarPesquisa(array $dados) {
        return self::create([
            'tipo' => $dados['tipo'],
            'descricao' => $dados['descricao'],
            'periodo' => $dados['periodo'],
            'setor_id' => $dados['setor_id'],
            'dataFim' => $dados['dataFim'],
        ]);
    }

    public static function filtrarPesquisas($filtros) {
        $query = self::query();

        if (!empty($filtros['titulo'])) {
            $query->where('descricao', 'like', '%' . $filtros['titulo'] . '%');
        }

        if (!empty($filtros['situacao'])) {
            $query->where('status', $filtros['situacao']);
        }

        if (!empty($filtros['exibir'])) {
            if ($filtros['exibir'] === 'disponiveis') {
                $query->whereDate('dataInicio', '<=', now())
                    ->whereDate('dataFim', '>=', now());
            } elseif ($filtros['exibir'] === 'passadas') {
                $query->whereDate('dataFim', '>', now());
            }
        }

        return $query->orderBy('created_at', 'desc')->get();
    }

    // Métodos auxiliares e específicos
    public function sincronizarCursos(array $novosCursos) {
        $cursosAnteriores = $this->Curso()->pluck('idCurso')->toArray();
        $cursosRemovidos = array_diff($cursosAnteriores, $novosCursos);

        if (!empty($cursosRemovidos)) {
            $disciplinasRemovidas = Disciplina::whereHas('Curso', function ($query) use ($cursosRemovidos) {
                $query->whereIn('idCurso', $cursosRemovidos);
            })->pluck('idDisciplina')->toArray();

            $formulariosRemovidos = $this->Formulario()
                                        ->whereIn('disciplina_id', $disciplinasRemovidas)
                                        ->pluck('idFormulario')
                                        ->toArray();

            Formulario::destroy($formulariosRemovidos);
        }

        $this->Curso()->sync($novosCursos);
    }

    public function salvarRespostas(array $respostas, $idFormulario, $idUsuario)
    {
        Resultado::create([
            'resultados' => json_encode($respostas),
            'id_pesquisa' => $this->idPesquisa,
            'id_formulario' => $idFormulario,
            'id_usuario' => $idUsuario,
        ]);
    }

    public function removerPesquisa()
    {
        Resultado::where('id_pesquisa', $this->idPesquisa)->delete();

        // Excluir todos os formulários relacionados à pesquisa
        Formulario::where('pesquisa_id', $this->idPesquisa)->delete();
    
        // Excluir todos os registros na tabela pesquisa_curso relacionados à pesquisa
        \DB::table('pesquisa_curso')->where('pesquisa_id', $this->idPesquisa)->delete();
        $this->delete();
    }

    // Validação
    public static function regrasDeValidacao() {
        return [
            'tipo' => 'required|string',
            'descricao' => 'required|string',
            'periodo' => 'required|string',
            'setor_id' => 'required|integer',
            'curso_id' => 'required|array',
            'curso_id.*' => 'integer|exists:cursos,idCurso',
            'dataFim' => 'required|date',
        ];
    }
}

