<?php

// database/migrations/2025_10_06_010100_create_clases_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('CLASES', function (Blueprint $table) {
            $table->unsignedBigInteger('ID_CLASE')->primary();
            $table->string('CLASE', 50);
        });
    }
    public function down(): void { Schema::dropIfExists('CLASES'); }
};
