<?php

namespace App\Models\Cpa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CriarPesquisa extends Model
{
    use HasFactory;

    protected $table = 'pesquisa';
    protected $fillable = ['tipo', 'descricao', 'periodo', 'dataInicio', 'dataFim'];

}
