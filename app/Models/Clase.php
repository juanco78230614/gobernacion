<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    protected $table = 'CLASES';
    protected $primaryKey = 'ID_CLASE';
    public $timestamps = false;

    protected $fillable = ['CLASE'];
}
