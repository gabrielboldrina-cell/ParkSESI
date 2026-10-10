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
            $table->unsignedBigInteger('carro_colaborador_id');
            $table->foreign('carro_colaborador_id')->references('id')->on('carro_colaborador')->onDelete('cascade');
            $table->timestamp('entrada');
            $table->timestamp('saida')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
       Schema::table('carro_movimentacoes', function (Blueprint $table) {
            $table->dropForeign(['carro_colaborador_id']);
            $table->dropColumn('carro_colaborador_id');
        });

        Schema::dropIfExists('carro_movimentacoes');
    }
};
