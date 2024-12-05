<?php

namespace App\Models;

use App\Models\cpa\formulario;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class disciplina extends Model
{
    use HasFactory;
    protected $primaryKey = 'idDisciplina';

    public function Curso() : BelongsToMany {
        return $this->belongsToMany(Curso::class, 'curso_disciplina', 'curso_id', 'disciplina_id');
    }

    public function Usuario():BelongsToMany {
        return $this->belongsToMany(Usuario::class, 'usuario_disciplina', 'disciplina_id', 'usuario_id');
    }

    public function Formulario() : HasMany {
        return $this->hasMany(Formulario::class);
    }
}
