<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Elecciones;

class EleccionesController extends Controller
{
    public function index()
    {
        $elecciones = Elecciones::all();

        if($elecciones->isEmpty()){
            return response()->json(['error' => 'No se encontraron procesos electorales.'], 404);
        }

        return response()->json($elecciones);
    }

    public function store(Request $request)
    {
        $elecciones = new Elecciones([
            'COD_ADMIN' => $request->COD_ADMIN,
            'COD_FRENTE' => $request->COD_FRENTE,
            'COD_TEU' => $request->COD_TEU,
            'COD_COMITE' => $request->COD_COMITE,
            'MOTIVO_ELECCION' => $request->MOTIVO_ELECCION,
            'FECHA_INI_CONVOCATORIA' => $request->FECHA_INI_CONVOCATORIA,
            'FECHA_FIN_CONVOCATORIA' => $request->FECHA_FIN_CONVOCATORIA,
            'FECHA_ELECCION' => $request->FECHA_ELECCION,
            'ELECCION_ACTIVA' => true
        ]);

        $elecciones->save();


        return response()->json(['message' => 'Proceso electoral creado correctamente.']);
    }

    public function show($id)
    {
        $elecciones = Elecciones::find($id);

        if(!$elecciones){
            return response()->json(['error' => 'El proceso electoral no se encontró.', 404]);
        }

        return response()->json($elecciones);
    }

    public function update(Request $request, $id)
    {
        $elecciones = Elecciones::find($id);

        if(!$elecciones){
            return response()->json(['error' => 'El proceso electoral no se encontró.'], 404);
        }


        $elecciones->update([
        'MOTIVO_ELECCION' => $request->MOTIVO_ELECCION,
        'FECHA_INI_CONVOCATORIA' => $request->FECHA_INI_CONVOCATORIA,
        'FECHA_FIN_CONVOCATORIA' => $request->FECHA_FIN_CONVOCATORIA,
        'FECHA_ELECCION' => $request->FECHA_ELECCION,
        ]);

        return response()->json(['message' => 'Proceso electoral actualizado correctamente.']);
    }

    // Otros métodos del controlador para actualizar, eliminar, mostrar un registro específico, etc.
}
