<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Elecciones extends Model
{
    protected $table = 'elecciones2'; // Nombre de la tabla
    protected $primaryKey = 'COD_ELECCION'; // Clave primaria
    public $timestamps = true; // Habilitar timestamps (created_at y updated_at)

    protected $fillable = [
        'COD_ELECCION',
        'COD_ADMIN',
        'COD_FRENTE',
        'COD_TEU',
        'COD_COMITE',
        'MOTIVO_ELECCION',
        'FECHA_ELECCION',
        'ELECCION_ACTIVA',
        'FECHA_INI_CONVOCATORIA',
        'FECHA_FIN_CONVOCATORIA'
    ];
}
