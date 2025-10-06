<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    protected $table = 'PROPIETARIOS';
    protected $primaryKey = 'ID_PROPIETARIO';
    public $timestamps = false;

    protected $fillable = [
        'NOMBRES', 'APELLIDOS', 'NRO_LICENCIA', 'ESTADO', 'CI', 'TELEFONO'
    ];

    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class, 'ID_PROPIETARIO', 'ID_PROPIETARIO');
    }
}
