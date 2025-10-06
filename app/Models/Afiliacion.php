<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Afiliacion extends Model
{
    protected $table = 'AFILIACIONES';
    protected $primaryKey = 'ID_AFILIACION';
    public $timestamps = false;

    protected $fillable = ['AFILIACION', 'ESTADO', 'NIVEL', 'PADRE', 'GRUPO'];

    public function subAfiliaciones()
    {
        return $this->hasMany(Afiliacion::class, 'PADRE', 'ID_AFILIACION');
    }
}
