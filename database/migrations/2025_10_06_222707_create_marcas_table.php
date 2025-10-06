<?php

// database/migrations/2025_10_06_010200_create_marcas_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('MARCAS', function (Blueprint $table) {
            $table->unsignedBigInteger('ID_MARCA')->primary();
            $table->string('MARCA', 50);
            $table->tinyInteger('ESTADO')->default(1);
            $table->unsignedSmallInteger('ORDEN')->nullable();
        });
    }
    public function down(): void { Schema::dropIfExists('MARCAS'); }
};
