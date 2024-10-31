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
        Schema::create('pesquisas', function (Blueprint $table) {
            $table->id('idPesquisa');
            $table->string('tipo', 50);
            $table->string('descricao', 50);
            $table->string('periodo', 50);
            $table->date('dataInicio')->default(now());
            $table->date('dataFim');
            $table->timestamps();
        });

        Schema::create('pesquisa_curso',function (Blueprint $table){
            $table->id();
            $table->foreignId('pesquisa_id')->references('idPesquisa')->on('pesquisas');
            $table->foreignId('curso_id')->references('idCurso')->on('cursos');
            $table->timestamps();
        });

        Schema::create('pesquisa_usuario',function(Blueprint $table){
            $table->id();
            $table->foreignId('usuario_id')->references('idUsuario')->on('usuarios');
            $table->foreignId('pesquisa_id')->references('idPesquisa')->on('pesquisas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesquisas');
    }
};
