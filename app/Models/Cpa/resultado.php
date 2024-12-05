<?php

namespace App\Models\cpa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class resultado extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'idResultado';
    protected $fillable = ['resultados', 'id_pesquisa', 'id_formulario'];

    public function Resultado() : HasOne {
        return $this->hasOne(Resultado::class);
    }

    public function Pesquisa() : BelongsTo {
        return $this->belongsTo(Pesquisa::class);
    }

    public function Formulario() : BelongsTo {
        return $this->belongsTo(Formulario::class);
    }
}
