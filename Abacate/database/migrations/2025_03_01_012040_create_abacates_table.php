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
        Schema::create('abacates', function (Blueprint $table) {
            $table->id();
            $table->string('TipoAbacate');
            $table->dateTime('DtVld');
            $table->string('Distribuidora');
            $table->integer('Quantidade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abacates');
    }
};
