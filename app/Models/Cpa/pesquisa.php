<?php

namespace App\Models\cpa;

use App\Models\Curso;
use app\Models\usuario;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class pesquisa extends Model
{
    use HasFactory;
    protected $primaryKey = 'idPesquisa'; 
    protected $fillable = ['tipo', 'descricao', 'periodo', 'dataInicio', 'dataFim'];

    public function Formulario() : HasMany {
        return $this->hasMany(Formulario::class);
    }
    public function Curso() : BelongsToMany {
        return $this->belongsToMany(Curso::class);
    }
    public function Usuario() : BelongsToMany {
        return $this->belongsToMany(Usuario::class);
    }
    public function Certificado(): HasMany{
        return $this->hasMany(Certificado::class);
    }
}
