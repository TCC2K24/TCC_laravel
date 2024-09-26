<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usuario\UsuarioController;
use App\Http\Controllers\Cpa\CriarPesquisaController;
use App\Http\Controllers\Cpa\TelaInicialController;
use App\Http\Controllers\Cpa\MinhasPesquisasController;
use App\Http\Controllers\Cpa\FormulariosDaPesquisaController;

//Route::get('/', function () {
//    return view('welcome');
//});

// Rota de login
Route::get('/', [UsuarioController::class, 'login'])->name('usuario.login');

// Rota da Tela Inicial - CPA
Route::get('/tela-inicial-cpa', [TelaInicialController::class, 'telaInicial'])->name('cpa.tela-inicial');

// Rota da Tela de Minhas Pesquisas - CPA
Route::get('/minhas-pesquisas-cpa', [MinhasPesquisasController::class, 'minhasPesquisas'])->name('cpa.minhas-pesquisas');

// Rota de Criar Pesquisa - CPA
Route::get('/criar-pesquisa-cpa', [CriarPesquisaController::class, 'criarPesquisa'])->name('cpa.criar-pesquisa');

// Rota de Formulários da Pesquisa - CPA
Route::get('/formularios-da-pesquisa-cpa', [FormulariosDaPesquisaController::class, 'formulariosDaPesquisa'])->name('cpa.formularios-da-pesquisa');