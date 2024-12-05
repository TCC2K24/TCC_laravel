<?php

namespace App\Models\cpa;

use App\Models\Disciplina; // Importa o modelo Disciplina
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class formulario extends Model
{
    use HasFactory;

    /**
     * Os atributos que podem ser preenchidos em massa.
     *
     * @var array
     */
    protected $fillable = ['nome_formulario', 'dados', 'tempoDeParticipacao', 'pesquisa_id', 'disciplina_id'];
    protected $primaryKey = 'idFormulario';

    /**
     * Evento para garantir valor padrão ao criar um registro.
     */
    protected static function booted()
    {
        static::creating(function ($formulario) {
            // Define o valor padrão de tempoDeParticipacao como 15 apenas se não for enviado
            if (is_null($formulario->tempoDeParticipacao) || $formulario->tempoDeParticipacao === '' || $formulario->tempoDeParticipacao < 15) {
                $formulario->tempoDeParticipacao = 15;
            }
        });
    }

    /**
     * Relacionamento com a classe Pesquisa.
     *
     * @return BelongsTo
     */
    public function Pesquisa(): BelongsTo
    {
        return $this->belongsTo(Pesquisa::class, 'pesquisa_id', 'idPesquisa');
    }

    public function Disciplina(): BelongsTo
    {
        return $this->belongsTo(Disciplina::class, 'disciplina_id', 'idDisciplina');
    }

    public function resultados()
    {
        return $this->hasMany(Resultado::class, 'id_formulario', 'idFormulario');
    }

}
