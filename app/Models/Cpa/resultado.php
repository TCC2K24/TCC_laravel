<?php

namespace App\Models\cpa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class resultado extends Model
{
    use HasFactory;

   protected $fillable = ['resultados'];

    public function Pesquisa() : BelongsTo {
        return $this->belongsTo(Pesquisa::class);
    }
}
