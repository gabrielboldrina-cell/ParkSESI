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
        Schema::create('carro_colaborador', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('colaborador_id');
            $table->foreign('colaborador_id')->references('id')->on('colaborador')->onDelete('cascade');
            $table->unsignedBigInteger('veiculo_id');
            $table->foreign('veiculo_id')->references('id')->on('veiculos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    { 
        Schema::table('carro_colaborador', function (Blueprint $table) {
            $table->dropForeign(['colaborador_id']);
            $table->dropColumn('colaborador_id');
            $table->dropForeign(['veiculos_id']);
            $table->dropColumn('veiculos_id');
        });
        
        Schema::dropIfExists('carro_colaborador');
    }
};
