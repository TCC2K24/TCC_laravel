<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioControler;


use App\Http\Controllers\TelasController;
use App\Http\Controllers\Discente\PesquisaController;
use App\Http\Controllers\Discente\CertificadoController;


//Route::get('/', function () {
//    return view('welcome');
//});

// Rota de login
Route::controller(UsuarioControler::class)->group(function (){
    Route::get('/login','index')->name('usuario.login');
    Route::post('/login','store')->name('login.store');
});



// Rota da Tela Inicial - DISCENTE
Route::get('/tela-inicial', [TelasController::class, 'telaInicial'])->name('tela-inicial-d');

// Rota da Tela de Participar de Pesquisas - DISCENTE
Route::get('/participar-pesquisas-discente', [PesquisaController::class, 'participarPesquisasDiscente'])->name('discente.participar-pesquisas');

// Rota da Tela de Participar de Pesquisas - DISCENTE
Route::get('/visualizar-pesquisas-discente', [PesquisaController::class, 'visualizarPesquisasDiscente'])->name('discente.visualizar-pesquisas');

// Rota da Tela de Responder Formulários - DISCENTE
Route::get('/responder-formulario-discente', [PesquisaController::class, 'responderFormularioDiscente'])->name("discente.responder-formulario");

// Rota da Tela de Meus Certificados - DISCENTE
Route::get('/meus-certificados-discente', [CertificadoController::class, 'meusCertificadosDiscente'])->name("discente.meus-certificados");

// Rota da Tela de Meu Certificado - DISCENTE
Route::get('/meu-certificado-discente', [CertificadoController::class, 'meuCertificadoDiscente'])->name("discente.meu-certificado");



require __DIR__.'/servidor-auth.php';