<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Setor extends Model
{
    use HasFactory;

    protected $primaryKey = 'idSetor';
    protected $filable = ['nomeSetor'];
    public $timestamps = false;
    

    public function Cursos():HasMany{
        return $this->hasMany(Curso::class);
    }

}
