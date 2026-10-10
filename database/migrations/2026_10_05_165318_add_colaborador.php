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
        Schema::table('carro_movimentacoes', function (Blueprint $table) {
           $table->time('saida_para_almoco')->after('saida');
            $table->time('volta_do_almoco')->after('saida__para_almoco');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('carro_movimentacoes', function (Blueprint $table) {
            $table->dropColumn('saida_para_almoco');
            $table->dropColumn('volta_do_almoco');
        });
    }
};
