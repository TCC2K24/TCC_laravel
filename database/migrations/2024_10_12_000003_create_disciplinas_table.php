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
        Schema::create('disciplinas', function (Blueprint $table) {
            $table->id('idDisciplina');
            $table->string('nomeDisciplina',50);
            $table->timestamps();
        });

        Schema::create('usuario_disciplina',function(Blueprint $table){
            $table->id();
            $table->foreignId('usuario_id')->references('idUsuario')->on('usuarios');
            $table->foreignId('disciplina_id')->references('idDisciplina')->on('disciplinas');
            $table->timestamps();
        });

        Schema::create('curso_disciplina',function(Blueprint $table){
            $table->id();
            $table->foreignId('curso_id')->references('idCurso')->on('cursos');
            $table->foreignId('disciplina_id')->references('idDisciplina')->on('disciplinas');
            $table->timestamps();
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disciplinas');
    }
};
