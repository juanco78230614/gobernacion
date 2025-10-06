<?php

// database/migrations/2025_10_06_010600_create_afiliaciones_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('AFILIACIONES', function (Blueprint $table) {
            $table->unsignedBigInteger('ID_AFILIACION')->primary();
            $table->string('AFILIACION', 300)->nullable();
            $table->tinyInteger('ESTADO')->default(1);
            $table->tinyInteger('NIVEL')->nullable();
            $table->unsignedBigInteger('PADRE')->nullable();
            $table->tinyInteger('GRUPO')->nullable();

            $table->foreign('PADRE')->references('ID_AFILIACION')->on('AFILIACIONES');
        });
    }
    public function down(): void { Schema::dropIfExists('AFILIACIONES'); }
};
