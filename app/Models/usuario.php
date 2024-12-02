<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticable;
use App\Models\cpa\pesquisa;
use App\Models\cpa\certificado;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class usuario extends Authenticable
{
    use HasFactory;

    protected $primaryKey = 'idUsuario';
    protected $guard = 'usuario';
    protected $fillable = ['GRR','password','curso'];
    protected $hidden = ['senha','remember_token'];


    public function Disciplina() : BelongsToMany {
        return $this->belongsToMany(Disciplina::class, 'usuario_disciplina', 'usuario_id', 'disciplina_id');
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
