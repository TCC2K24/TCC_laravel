<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Setor extends Model
{
    use HasFactory;

    protected $filable = ['nomeSetor'];

    public function Cursos():HasMany{
        return $this->hasMany(Curso::class);
    }

}
