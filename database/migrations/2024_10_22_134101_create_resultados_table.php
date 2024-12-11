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
        Schema::create('resultados', function (Blueprint $table) {
            $table->id('idResultado');
            $table->json('resultados');
            $table->foreignId('id_pesquisa')->references('idPesquisa')->on('pesquisas');
            $table->foreignId('id_formulario')->references('idFormulario')->on('formularios');
            $table->foreignId('id_usuario')->references('idUsuario')->on('usuarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resultados');
    }
};