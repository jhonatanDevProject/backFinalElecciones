<?php

namespace App\Http\Controllers\original;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Elecciones;
use Illuminate\Support\Facades\DB;

class EleccionController2 extends Controller
{
    public function index()
{
    $elecciones = Elecciones::all();

    return response()->json($elecciones);
}

}
