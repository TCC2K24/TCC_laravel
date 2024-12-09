<?php

namespace App\Models\cpa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\usuario;

class resultado extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'idResultado';
    protected $fillable = ['resultados', 'id_pesquisa', 'id_formulario', 'id_usuario'];

    public function Resultado() : HasOne {
        return $this->hasOne(Resultado::class);
    }

    public function Pesquisa() : BelongsTo {
        return $this->belongsTo(Pesquisa::class);
    }

    public function Formulario() : BelongsTo {
        return $this->belongsTo(Formulario::class);
    }

    public function Usuario() : BelongsTo {
        return $this->belongsTo(Usuario::class);
    }
}
