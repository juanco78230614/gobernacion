<?php

// database/migrations/2025_10_06_010700_create_usuarios_legacy_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('USUARIOS', function (Blueprint $table) {
            $table->unsignedBigInteger('ID_USUARIO')->primary();
            $table->string('NOMBRES', 200)->nullable();
            $table->string('APELLIDOS', 200)->nullable();
            $table->string('CARGO', 250)->nullable();
            $table->string('TELEFONO', 50)->nullable();
            $table->string('LOGIN', 100)->unique();
            $table->string('CLAVE', 300)->nullable();
            $table->string('FOTO', 50)->nullable();
            $table->string('DIRECCION', 100)->nullable();
            $table->string('CORREO', 100)->nullable();
            $table->tinyInteger('ESTADO')->default(1);
            $table->unsignedBigInteger('ID_AREA')->nullable(); // crearemos AREAS luego si hace falta
        });
    }
    public function down(): void { Schema::dropIfExists('USUARIOS'); }
};
