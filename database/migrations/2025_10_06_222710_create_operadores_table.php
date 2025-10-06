<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('OPERADORES', function (Blueprint $table) {
            $table->unsignedBigInteger('ID_OPERADOR')->primary();
            $table->string('RAZON_SOCIAL', 600)->nullable();
            $table->unsignedBigInteger('NRO_REGISTRO')->nullable();
            $table->unsignedBigInteger('NIT')->nullable();
            $table->string('NIT_OBJETO', 200)->nullable();
            $table->string('MODALIDAD', 100)->nullable();
            $table->string('SERVICIO', 150)->nullable();
            $table->string('DEPARTAMENTO', 300)->nullable();
            $table->string('DOM_LEGAL', 300)->nullable();
            $table->string('UBICACION_FILE', 150)->nullable();
            $table->string('GAVETA', 100)->nullable();
            $table->string('TSOPORTE', 200)->nullable();
            $table->string('DOC_LEGALES', 300)->nullable();
            $table->string('R_LEGAL', 300)->nullable();
            $table->unsignedBigInteger('CI_RLEGAL')->nullable();
            $table->tinyInteger('TIPO')->nullable();
            $table->string('RES_DENOM', 500)->nullable();
            $table->string('NRO_RES', 200)->nullable();
            $table->date('F_RES')->nullable();
            $table->string('OBSERVACIONES', 500)->nullable();
            $table->string('NRO_CFUNEMP', 100)->nullable();
            $table->string('NRO_RFUNEMP', 100)->nullable();
            $table->date('F_EFUNEMP')->nullable();
            $table->date('VIGENCIA_FUND')->nullable();
            $table->string('DOC_LEFUN', 100)->nullable();
            $table->string('TESTIMONIO', 200)->nullable();
            $table->unsignedBigInteger('CI_PERNAT')->nullable();

            $table->string('DOC_LECRPVA', 100)->nullable();
            $table->unsignedBigInteger('ID_AFILIACION')->nullable();
            $table->unsignedBigInteger('ID_AFILIACION2')->nullable();
            $table->unsignedBigInteger('ID_AFILIACION3')->nullable();
            $table->unsignedBigInteger('ID_LOCALIDAD')->nullable();
            $table->string('ORDEN_ALFA', 5)->nullable();
            $table->unsignedBigInteger('ID_USUARIO')->nullable();
            $table->string('MAT_COMERCIO', 100)->nullable();
            $table->tinyInteger('ESTADO')->default(1);
            $table->date('F_REGISTRO')->nullable();
            $table->unsignedBigInteger('USR_UPD')->nullable();
            $table->dateTime('F_UPD')->nullable();
            $table->string('STATIC_PATH', 1000)->nullable();

            // ⚠️ Quitamos las foreign keys temporales
            // para evitar errores si las tablas aún no existen
        });
    }

    public function down(): void {
        Schema::dropIfExists('OPERADORES');
    }
};
