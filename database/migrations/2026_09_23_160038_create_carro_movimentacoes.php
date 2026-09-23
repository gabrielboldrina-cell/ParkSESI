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
        Schema::create('carro_movimentacoes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('colaborador_id');
            $table->foreign('colaborador_id')->references('id')->on('colaborador')->onDelete('cascade');
            $table->unsignedBigInteger('veiculo_id');
            $table->foreign('veiculo_id')->references('id')->on('veiculos')->onDelete('cascade');
            $table->unsignedBigInteger('carro_colaborador_id');
            $table->foreign('carro_colaborador_id')->references('id')->on('carro_colaborador')->onDelete('cascade');
            $table->string('entrada');
            $table->string('saída');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       Schema::table('carro_movimentacoes', function (Blueprint $table) {
            $table->dropForeign(['colaborador_id']);
            $table->dropColumn('colaborador_id');
            $table->dropForeign(['veiculos_id']);
            $table->dropColumn('veiculos_id');
            $table->dropForeign(['carro_colaborador_id']);
            $table->dropColumn('carro_colaborador_id');
        });

        Schema::dropIfExists('carro_movimentacoes');
    }
};
