<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Operador extends Model
{
    protected $table = 'OPERADORES';
    protected $primaryKey = 'ID_OPERADOR';
    public $timestamps = false;

    protected $fillable = [
        'RAZON_SOCIAL', 'NRO_REGISTRO', 'NIT', 'NIT_OBJETO', 'MODALIDAD',
        'SERVICIO', 'DEPARTAMENTO', 'DOM_LEGAL', 'UBICACION_FILE', 'GAVETA',
        'TSOPORTE', 'DOC_LEGALES', 'R_LEGAL', 'CI_RLEGAL', 'TIPO',
        'RES_DENOM', 'NRO_RES', 'F_RES', 'OBSERVACIONES', 'NRO_CFUNEMP',
        'NRO_RFUNEMP', 'F_EFUNEMP', 'VIGENCIA_FUND', 'DOC_LEFUN', 'TESTIMONIO',
        'CI_PERNAT', 'DOC_LECRPVA', 'ID_AFILIACION', 'ID_AFILIACION2',
        'ID_AFILIACION3', 'ID_LOCALIDAD', 'ORDEN_ALFA', 'ID_USUARIO',
        'MAT_COMERCIO', 'ESTADO', 'F_REGISTRO', 'USR_UPD', 'F_UPD', 'STATIC_PATH'
    ];

    public function afiliacion()
    {
        return $this->belongsTo(Afiliacion::class, 'ID_AFILIACION', 'ID_AFILIACION');
    }

    public function usuario()
    {
        return $this->belongsTo(UsuarioLegacy::class, 'ID_USUARIO', 'ID_USUARIO');
    }
}
