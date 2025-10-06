<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsuarioLegacy extends Model
{
    protected $table = 'USUARIOS';
    protected $primaryKey = 'ID_USUARIO';
    public $timestamps = false;

    protected $fillable = [
        'NOMBRES', 'APELLIDOS', 'CARGO', 'TELEFONO', 'LOGIN', 'CLAVE',
        'FOTO', 'DIRECCION', 'CORREO', 'ESTADO', 'ID_AREA'
    ];
}
