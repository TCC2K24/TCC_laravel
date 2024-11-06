<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Cpa\CriarPesquisaController;
use App\Http\Controllers\Cpa\TelaInicialController;
use App\Http\Controllers\Cpa\MinhasPesquisasController;
use App\Http\Controllers\Cpa\FormulariosDaPesquisaController;
use App\Http\Controllers\Cpa\ModelosDeFormularioController;
use App\Http\Controllers\Cpa\CriarFormularioController;
use App\Http\Controllers\Cpa\ResultadosController;
use App\Http\Controllers\Cpa\VisualizarResultadosController;
use App\Http\Controllers\Cpa\VisualizarResultadosPesquisaController;
use App\Http\Controllers\Cpa\VisualizarResultadosFormularioController;
use App\Http\Controllers\Coordenador\TelaInicialCoordenadorController;
use App\Http\Controllers\Coordenador\ResultadosCoordenadorController;
use App\Http\Controllers\Coordenador\VisualizarResultadosCoordenadorController;
use App\Http\Controllers\Coordenador\VisualizarResultadosFormularioCoordenadorController;
use App\Http\Controllers\Coordenador\VisualizarResultadosPesquisaCoordenadorController;



$prefixo = 'servidor';

Route::prefix($prefixo)->middleware('guest:servidor')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [LoginController::class, 'create'])
                ->name('login');

    Route::post('login', [LoginController::class, 'store']);
});

Route::prefix($prefixo)->middleware('auth:servidor')->group(function () {
    // Rota da Tela Inicial - CPA
Route::get('/tela-inicial-cpa', [TelaInicialController::class, 'telaInicial'])->name('cpa.tela-inicial');

// Rota da Tela de Minhas Pesquisas - CPA
Route::get('/minhas-pesquisas-cpa', [MinhasPesquisasController::class, 'minhasPesquisas'])->name('cpa.minhas-pesquisas');

// Rota da Tela Criar Pesquisa - CPA (GET)
Route::get('/criar-pesquisa-cpa', [CriarPesquisaController::class, 'criarPesquisa'])->name('cpa.criar-pesquisa');


// Rota de Criar Pesquisa - CPA (POST)
Route::post('/criar-pesquisa-cpa', [CriarPesquisaController::class, 'store'])->name('cpa.store');

// Rota de Formulários da Pesquisa - CPA
Route::get('/formularios-da-pesquisa-cpa', [FormulariosDaPesquisaController::class, 'formulariosDaPesquisa'])->name('cpa.formularios-da-pesquisa');

// Rota da Tela de Modelos de Formulário - CPA
Route::get('/modelos-de-formulario', [ModelosDeFormularioController::class, 'modelosDeFomulario'])->name('cpa.modelos-de-formulario');

// Rota da Tela de Criar Formulário - CPA
Route::get('/criar-formulario', [CriarFormularioController:: class, 'criarFormulario'])->name('cpa.criar-formulario');

// Rota da Tela de Resultados - CPA
Route::get('/resultados', [ResultadosController:: class, 'resultados'])->name('cpa.resultados');

// Rota da Tela de Visualizar Resultados - CPA
Route::get('/visualizar-resultados', [VisualizarResultadosController:: class, 'visualizarResultados'])->name('cpa.visualizar-resultados');

// Rota da Tela de Visualizar Resultados por Pesquisa- CPA
Route::get('/visualizar-resultados-pesquisa', [VisualizarResultadosPesquisaController:: class, 'visualizarResultadosPesquisa'])->name('cpa.visualizar-resultados-pesquisa');

// Rota da Tela de Visualizar Resultados por Formulario- CPA
Route::get('/visualizar-resultados-formulario', [VisualizarResultadosFormularioController:: class, 'visualizarResultadosFormulario'])->name('cpa.visualizar-resultados-formulario');

// Rota da Tela Inicial - COORDENADOR
Route::get('/tela-inicial-coordenador', [TelaInicialCoordenadorController::class, 'telaInicialCoordenador'])->name("coordenador.tela-inicial");

// Rota da Tela de Resultados - COORDENADOR
Route::get('/resultados-coordenador', [ResultadosCoordenadorController::class, 'resultadosCoordenador'])->name("coordenador.resultados");

// Rota da Tela de Visualizar Resultados - COORDENADOR
Route::get('/visualizar-resultados-coordenador', [VisualizarResultadosCoordenadorController::class, 'visualizarResultadosCoordenador'])->name("coordenador.visualizar-resultados");

// Rota da Tela de Visualizar Resultados por Formulário - COORDENADOR
Route::get('/visualizar-resultados-formulario-coordenador', [VisualizarResultadosFormularioCoordenadorController::class, 'visualizarResultadosFormularioCoordenador'])->name("coordenador.visualizar-resultados-formulario");

// Rota da Tela de Visualizar Resultados por Pesquisa - COORDENADOR
Route::get('/visualizar-resultados-pesquisa-coordenador', [VisualizarResultadosPesquisaCoordenadorController::class, 'visualizarResultadosPesquisaCoordenador'])->name("coordenador.visualizar-resultados-pesquisa");


    Route::post('logout', [LoginController::class, 'destroy'])->name('logout');
});