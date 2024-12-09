<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\cpa\pesquisa;

class Setor extends Model
{
    use HasFactory;

    protected $primaryKey = 'idSetor';
    protected $fillable = ['nomeSetor'];
    public $timestamps = false;
    

    public function Cursos():HasMany{
        return $this->hasMany(Curso::class);
    }

    public function Pesquisas(): HasMany
    {
        return $this->hasMany(Pesquisa::class, 'setor_id');
    }

}
