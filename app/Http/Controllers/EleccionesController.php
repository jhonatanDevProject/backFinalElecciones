<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Elecciones;

class EleccionesController extends Controller
{
    public function index()
    {
        // Obtiene todos los registros de la tabla eleccions
        $elecciones = Elecciones::all();

        // Devuelve los datos como respuesta JSON
        return response()->json(['data' => $elecciones]);
    }

    public function store(Request $request)
    {
        // Valida y guarda un nuevo registro
        $data = $request->validate([
            'COD_ADMIN' => 'nullable|string|max:30',
            'COD_FRENTE' => 'nullable|integer',
            'COD_TEU' => 'nullable|integer',
            'COD_COMITE' => 'nullable|integer',
            'MOTIVO_ELECCION' => 'required|string|max:50',
            'FECHA_ELECCION' => 'required|date',
            'FECHA_INI_CONVOCATORIA' => 'required|date',
            'FECHA_FIN_CONVOCATORIA' => 'required|date',
            'ELECCION_ACTIVA' => 'required|boolean',
        ]);

        $eleccion = Elecciones::create($data);

        // Devuelve los datos del nuevo registro como respuesta JSON
        return response()->json(['data' => $eleccion], 201);
    }

    // Otros métodos del controlador para actualizar, eliminar, mostrar un registro específico, etc.
}
