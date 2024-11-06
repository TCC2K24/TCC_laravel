<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioControler;


use App\Http\Controllers\Discente\TelaInicialDiscenteController;
use App\Http\Controllers\Discente\ParticiparPesquisasDiscenteController;
use App\Http\Controllers\Discente\VisualizarPesquisasDiscenteController;
use App\Http\Controllers\Discente\ResponderFormularioDiscenteController;
use App\Http\Controllers\Discente\MeusCertificadosDiscenteController;
use App\Http\Controllers\Discente\MeuCertificadoDiscenteController;


//Route::get('/', function () {
//    return view('welcome');
//});

// Rota de login
Route::controller(UsuarioControler::class)->group(function (){
    Route::get('/login','index')->name('usuario.login');
    Route::post('/login','store')->name('login.store');
});



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



require __DIR__.'/servidor-auth.php';