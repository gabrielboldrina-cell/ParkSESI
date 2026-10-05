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
        Schema::table('colaborador', function (Blueprint $table) {
           $table->time('saida_almoco')->after('situacao');
            $table->time('volta_almoco')->after('saida_almoco');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('colaborador', function (Blueprint $table) {
            $table->dropColumn('saida_almoco');
            $table->dropColumn('volta_almoco');
        });
    }
};
