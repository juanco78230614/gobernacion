<?php

// database/migrations/2025_10_06_010500_create_vehiculos_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('VEHICULOS', function (Blueprint $table) {
            $table->unsignedBigInteger('ID_VEHICULO')->primary();
            $table->string('PLACA', 100)->nullable();
            $table->string('MOTOR', 100)->nullable();
            $table->string('CHASIS', 100)->nullable();
            $table->string('MODELO', 100)->nullable();
            $table->string('CAPACIDAD', 200)->nullable();
            $table->unsignedBigInteger('REGISTRO')->nullable();
            $table->string('CATEGORIA', 200)->nullable();
            $table->string('NRO_SOAT', 100)->nullable();
            $table->tinyInteger('ESTADO')->default(1);
            $table->string('COMBUSTIBLE', 200)->nullable();

            $table->unsignedBigInteger('ID_CLASE')->nullable();
            $table->unsignedBigInteger('ID_MARCA')->nullable();
            $table->unsignedBigInteger('ID_COLOR')->nullable();
            $table->unsignedBigInteger('ID_PROPIETARIO')->nullable();
            $table->string('NEUMATICOS', 70)->nullable();

            $table->foreign('ID_CLASE')->references('ID_CLASE')->on('CLASES');
            $table->foreign('ID_MARCA')->references('ID_MARCA')->on('MARCAS');
            $table->foreign('ID_COLOR')->references('ID_COLOR')->on('COLORES');
            $table->foreign('ID_PROPIETARIO')->references('ID_PROPIETARIO')->on('PROPIETARIOS');
        });
    }
    public function down(): void { Schema::dropIfExists('VEHICULOS'); }
};
