<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usuario\UsuarioController;
use App\Http\Controllers\Cpa\CriarPesquisaController;
use App\Http\Controllers\Cpa\TelaInicialController;
use App\Http\Controllers\Cpa\MinhasPesquisasController;
use App\Http\Controllers\Cpa\FormulariosDaPesquisaController;
<<<<<<< Updated upstream
=======
use App\Http\Controllers\Cpa\ModelosDeFormularioController;
use App\Http\Controllers\Discente\TelaInicialDiscenteController;
use App\Http\Controllers\Discente\ParticiparPesquisasDiscenteController;
use App\Http\Controllers\Discente\VisualizarPesquisasDiscenteController;
use App\Http\Controllers\Discente\ResponderFormularioDiscenteController;
use App\Http\Controllers\Discente\MeusCertificadosDiscenteController;
use App\Http\Controllers\Discente\MeuCertificadoDiscenteController;
>>>>>>> Stashed changes



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
<<<<<<< Updated upstream
Route::get('/formularios-da-pesquisa-cpa', [FormulariosDaPesquisaController::class, 'formulariosDaPesquisa'])->name('cpa.formularios-da-pesquisa');
=======
Route::get('/formularios-da-pesquisa-cpa', [FormulariosDaPesquisaController::class, 'formulariosDaPesquisa'])->name('cpa.formularios-da-pesquisa');

// Rota da Tela de Modelos de Formulário - CPA
Route::get('/modelos-de-formulario', [ModelosDeFormularioController::class, 'modelosDeFomulario'])->name('cpa.modelos-de-formulario');

// Rota da Tela Inicial - DISCENTE
Route::get('/tela-inicial-discente', [TelaInicialDiscenteController::class, 'telaInicialDiscente'])->name('discente.tela-inicial');

// Rota da Tela de Participar de Pesquisas - DISCENTE
Route::get('/participar-pesquisas-discente', [ParticiparPesquisasDiscenteController::class, 'participarPesquisasDiscente'])->name('discente.participar-pesquisas');

// Rota da Tela de Participar de Pesquisas - DISCENTE
Route::get('/visualizar-pesquisas-discente', [VisualizarPesquisasDiscenteController::class, 'visualizarPesquisasDiscente'])->name('discente.visualizar-pesquisas');

// Rota da Tela de Responder Formulários - DISCENTE
Route::get('/responder-formulario-discente', [ResponderFormularioDiscenteController::class, 'responderFormularioDiscente'])->name("discente.responder-formulario");

// Rota da Tela de Meus Certificados - DISCENTE
Route::get('/meus-certificados-discente', [MeusCertificadosDiscenteController::class, 'meusCertificadosDiscente'])->name("discente.meus-certificados");

// Rota da Tela de Meu Certificado - DISCENTE
Route::get('/meu-certificado-discente', [MeuCertificadoDiscenteController::class, 'meuCertificadoDiscente'])->name("discente.meu-certificado");
>>>>>>> Stashed changes
