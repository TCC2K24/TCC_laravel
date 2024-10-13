<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = ['nomeCurso'];

    public function Setor() : BelongsTo {
        return $this->belongsTo(Setor::class);
    }
}
