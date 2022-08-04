<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\deporte;

class deporteController extends Controller
{
    /**
     * Lista de deportes.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deportes = deporte::All();
        return $deportes;
    }

    /**
     * Nuevo deporte.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $deporte = new deporte();
        $deporte->nombre = $request->nombre;

        $deporte->save();
        return response()->json($deporte);
    }
    

    /**
     * Eliminar deporte
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $deporte = deporte::destroy($request->id);
        return response()->json($deporte);
    }

}

