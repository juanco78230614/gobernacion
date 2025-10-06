<?php

// database/migrations/2025_10_06_010400_create_propietarios_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('PROPIETARIOS', function (Blueprint $table) {
            $table->unsignedBigInteger('ID_PROPIETARIO')->primary();
            $table->string('NOMBRES', 200)->nullable();
            $table->string('APELLIDOS', 200)->nullable();
            $table->unsignedBigInteger('NRO_LICENCIA')->nullable();
            $table->tinyInteger('ESTADO')->default(1);
            $table->unsignedBigInteger('CI')->nullable();
            $table->string('TELEFONO', 20)->nullable();
        });
    }
    public function down(): void { Schema::dropIfExists('PROPIETARIOS'); }
};
