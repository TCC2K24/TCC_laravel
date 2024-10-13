<?php

namespace App\Models\cpa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class pesquisa extends Model
{
    use HasFactory;


    public function Resultado() : HasOne {
        return $this->hasOne(Resultado::class);
    }

    public function Formulario() : HasMany {
        return $this->hasMany(Formulario::class);
    }
}
