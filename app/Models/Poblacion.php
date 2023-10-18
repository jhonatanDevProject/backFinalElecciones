<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eleccion2 extends Model
{
    protected $table = 'ELECCION2';
    protected $primaryKey = 'COD_ELECCION';
    public $timestamps = false;

    protected $fillable = [
        'COD_ADMIN',
        'COD_FRENTE',
        'COD_TEU',
        'COD_COMITE',
        'MOTIVO_ELECCION',
        'FECHA_ELECCION',
        'ELECCION_ACTIVA',
    ];

    // Define las reglas de validación para los campos
    public static $rules = [
        'MOTIVO_ELECCION' => 'required|string',
        'FECHA_ELECCION' => 'required|date',
        'ELECCION_ACTIVA' => 'required|boolean',
    ];
}
