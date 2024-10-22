<?php

namespace App\Models\cpa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class formulario extends Model
{
    use HasFactory;


    public function Pesquisa() : BelongsTo {
        return $this->belongsTo(Pesquisa::class);
    }
}
