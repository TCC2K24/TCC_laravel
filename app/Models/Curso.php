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

    protected $fillable = ['nomeCurso'];

    public function Setor() : BelongsTo {
        return $this->belongsTo(Setor::class);
    }

    public function Disciplina() : BelongsToMany {
        return $this->belongsToMany(Disciplina::class);
    }

    public function Usuario() : HasMany {
        return $this->hasMany(Usuario::class);
    }
}
