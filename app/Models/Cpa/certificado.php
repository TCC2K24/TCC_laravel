<?php

namespace App\Models\cpa;

use App\Models\usuario;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class certificado extends Model
{
    use HasFactory;

    protected $fillable = ['dados','pesquisa','usuario'];

    public function Pesquisa() : BelongsTo {
        return $this->belongsTo(Pesquisa::class);
    }

    public function Usuario() : BelongsTo {
        return $this->belongsTo(Usuario::class);
    }
}
