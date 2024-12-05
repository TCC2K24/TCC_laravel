<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Curso extends Model
{
    use HasFactory;

    protected $primaryKey = 'idCurso';
    protected $fillable = ['nomeCurso'];
    public $timestamps = false;

    public function Setor() : BelongsTo {
        return $this->belongsTo(Setor::class, 'setor_id'); 
    }

    public function Disciplina() : BelongsToMany {
        return $this->belongsToMany(Disciplina::class, 'curso_disciplina', 'curso_id', 'disciplina_id');
    }

    public function Usuario() : HasMany {
        return $this->hasMany(Usuario::class);
    }

    public function pesquisas() : BelongsToMany
    {
        return $this->belongsToMany(Pesquisa::class, 'pesquisa_curso', 'curso_id', 'pesquisa_id');
    }
}
