<?php

namespace App\Models;

use App\Models\cpa\pesquisa;
use App\Models\cpa\certificado;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class usuario extends Model
{
    use HasFactory;

    protected $fillable = ['GRR','senha','curso','tipoUsuario'];
    protected $hidden = ['senha'];


    public function Disciplina() : BelongsToMany {
        return $this->belongsToMany(Disciplina::class);
    }

   public function Pesquisa() : BelongsToMany {
        return $this->belongsToMany(Pesquisa::class);
    }

    public function Curso() : BelongsTo {
        return $this->belongsTo(Curso::class);
    }

    public function Certificado() : HasMany {
        return $this->hasMany(Certificado::class);
    }

}
