<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->id('idFormulario');
            $table->string('nome_formulario', 50);
            $table->json('dados');
            $table->integer('tempoDeParticipacao');
            $table->foreignId('pesquisa_id')->references('idPesquisa')->on('pesquisas');
            $table->foreignId('disciplina_id')->references('idDisciplina')->on('disciplinas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formularios');
    }
};
