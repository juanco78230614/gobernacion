<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = 'VEHICULOS';
    protected $primaryKey = 'ID_VEHICULO';
    public $timestamps = false;

    protected $fillable = [
        'PLACA', 'MOTOR', 'CHASIS', 'MODELO', 'CAPACIDAD', 'REGISTRO',
        'CATEGORIA', 'NRO_SOAT', 'ESTADO', 'COMBUSTIBLE', 'ID_CLASE',
        'ID_MARCA', 'ID_COLOR', 'ID_PROPIETARIO', 'NEUMATICOS'
    ];

    public function propietario()
    {
        return $this->belongsTo(Propietario::class, 'ID_PROPIETARIO', 'ID_PROPIETARIO');
    }

    public function clase()
    {
        return $this->belongsTo(Clase::class, 'ID_CLASE', 'ID_CLASE');
    }

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'ID_MARCA', 'ID_MARCA');
    }

    public function color()
    {
        return $this->belongsTo(Color::class, 'ID_COLOR', 'ID_COLOR');
    }
}
