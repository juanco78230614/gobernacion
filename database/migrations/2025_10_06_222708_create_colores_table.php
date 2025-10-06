<?php

// database/migrations/2025_10_06_010300_create_colores_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('COLORES', function (Blueprint $table) {
            $table->unsignedBigInteger('ID_COLOR')->primary();
            $table->string('COLOR', 100);
        });
    }
    public function down(): void { Schema::dropIfExists('COLORES'); }
};

