<?php

namespace App\Models\Cpa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CriarPesquisa extends Model
{
    use HasFactory;

    protected $table = 'nome-tabela';
    protected $fillable = ['campos'];

}
