<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = 'MARCAS';
    protected $primaryKey = 'ID_MARCA';
    public $timestamps = false;

    protected $fillable = ['MARCA', 'ESTADO', 'ORDEN'];
}
