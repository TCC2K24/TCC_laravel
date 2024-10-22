<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class disciplina extends Model
{
    use HasFactory;


    public function Curso() : BelongsToMany {
        return $this->belongsToMany(Curso::class);
    }

    public function Usuario():BelongsToMany {
        return $this->belongsToMany(Usuario::class);
    }
}
