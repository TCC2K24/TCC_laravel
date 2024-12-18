<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\TelasController;
use App\Http\Controllers\Cpa\PesquisaController;
use App\Http\Controllers\Cpa\FormulariosController;
use App\Http\Controllers\Cpa\ResultadosController;

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
Route::get('/tela-inicial', [TelasController::class, 'telaInicial'])->name('tela-inicial-s');

// Rota da Tela de Minhas Pesquisas - CPA
Route::get('/minhas-pesquisas-cpa', [PesquisaController::class, 'minhasPesquisas'])->name('cpa.minhas-pesquisas');

// Rota da Tela Criar Pesquisa - CPA (GET)
Route::get('/criar-pesquisa-cpa', [PesquisaController::class, 'criarPesquisa'])->name('cpa.criar-pesquisa');

// Rota para pegar os cursos para criar pesquisa
Route::get('/cursos/{setorId}', [PesquisaController::class, 'getCursosPorSetor']);

// Rota de Criar Pesquisa - CPA (POST)
Route::post('/criar-pesquisa-cpa', [PesquisaController::class, 'store'])->name('cpa.store');

// Rota da tela Editar Pesquisa - CPA (GET)
Route::get('/pesquisa/{id}/editar', [PesquisaController::class, 'editarPesquisa'])->name('cpa.editar-pesquisa');

// Rota Remover Pesquisa - Delete
Route::delete('/pesquisa/{id}/remover', [PesquisaController::class, 'delete'])->name('cpa.remover-pesquisa');

Route::put('/pesquisa/{id}', [PesquisaController::class, 'update'])->name('cpa.salvar-edicao-pesquisa');

// Rota para mostrar pesquisa
Route::get('/pesquisa/{id}', [PesquisaController::class, 'show'])->name('cpa.show');

// postar
Route::get('/pesquisa/{id}/postar', [PesquisaController::class, 'postar'])->name('cpa.postar');

// finalizar
Route::get('/pesquisa/{id}/finalizar', [PesquisaController::class, 'finalizar'])->name('cpa.finalizar');

Route::get('/resultados-pesquisa/{idPesquisa}', [ResultadosController::class, 'visualizarResultadosPesquisa'])->name('pesquisa.resultados');

// Rota de Formulários da Pesquisa - CPA
Route::get('/pesquisa/{id}/formulario', [FormulariosController::class, 'formulariosDaPesquisa'])->name('cpa.formularios-da-pesquisa');

// Rota da Tela de Modelos de Formulário - CPA
Route::get('/modelos-de-formulario', [FormulariosController::class, 'modelosDeFomulario'])->name('cpa.modelos-de-formulario');

// Rota da Tela de Criar Formulário - CPA
Route::get('/pesquisa/{idPesquisa}/formulario/novo', [FormulariosController:: class, 'criarFormulario'])->name('cpa.criar-formulario');

// rota da tela para editar formulário
Route::get('formularios/{idFormulario}/editar', [FormulariosController::class, 'editarFormulario'])->name('cpa.editar-formulario');

// rota para deleeter formulario
Route::delete('/pesquisa/{idPesquisa}/formulario/{idFormulario}', [FormulariosController::class, 'destroy'])->name('cpa.excluir-formulario');

// falta criar a rota de put, atualmente ta numa função porém tem q passar para uma rota pra ficar bonitinho
Route::put('/pesquisa/{idPesquisa}/formulario/editar',[FormulariosController::class,'editarFormulario']);
// falta editas

// Rota da Tela de Resultados - CPA
Route::get('/resultados', [ResultadosController:: class, 'resultados'])->name('cpa.resultados');

// Rota da Tela de Visualizar Resultados - CPA
Route::get('/resultados/{idPesquisa}/formulários', [ResultadosController:: class, 'visualizarResultados'])->name('cpa.visualizar-resultados');

// Rota da Tela de Visualizar Resultados por Pesquisa- CPA
Route::get('/resultados/{idPesquisa}/pesquisa', [ResultadosController:: class, 'visualizarResultadosPesquisa'])->name('cpa.visualizar-resultados-pesquisa');

// Rota da Tela de Visualizar Resultados por Formulario- CPA
Route::get('/resultados/{idPesquisa}/formulários/{position}', [ResultadosController::class, 'visualizarResultadosFormulario'])->name('cpa.visualizar-resultados-formulario');


Route::post('logout', [LoginController::class, 'destroy'])->name('logout');
});