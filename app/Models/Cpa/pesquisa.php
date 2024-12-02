<?php

namespace App\Models\cpa;

use App\Models\Curso;
use App\Models\usuario;
use App\Models\Setor;
use App\Models\cpa\formulario;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class pesquisa extends Model
{
    use HasFactory;
    protected $primaryKey = 'idPesquisa'; 
    protected $fillable = ['tipo', 'descricao', 'periodo', 'dataInicio', 'dataFim', 'status', 'setor_id'];
    protected $table = 'pesquisas';

    public function Formulario() : HasMany {
        return $this->hasMany(Formulario::class, 'pesquisa_id', 'idPesquisa');
    }
    public function Curso() : BelongsToMany {
        return $this->belongsToMany(Curso::class, 'pesquisa_curso', 'pesquisa_id', 'curso_id');
    }
    public function Usuario() : BelongsToMany {
        return $this->belongsToMany(Usuario::class);
    }
    public function Certificado(): HasMany{
        return $this->hasMany(Certificado::class);
    }
    public function Setor(): BelongsTo {
        return $this->belongsTo(Setor::class, 'setor_id');
    }
}
