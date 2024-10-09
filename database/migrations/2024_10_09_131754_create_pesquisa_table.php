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
        Schema::create('pesquisa', function (Blueprint $table) {
            $table->id();
            $table->string('tipo', 50);
            $table->string('descricao', 50);
            $table->string('periodo', 50);
            $table->date('dataInicio')->default(now());
            $table->date('dataFim');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesquisa');
    }
};
