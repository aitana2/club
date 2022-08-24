<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courts;

class CourtssController extends Controller
{
    /**
     * List of courts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pistas = pistas::All();
        return $pistas;
    }

    /**
     * New court.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pista = new pistas();
        $pista->deporte = $request->deporte;
        $pista->reserva = $request->reserva;

        $pista->save();
        return response()->json($pista);
    }
    /**
     * Show court.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($deporte)
    {
        $pista = pistas::find($deporte);
        return response() -> json($pista);

    }
    /**
     * Editar pista
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pista = pistas::findOrFail($request->id);
        $pista->deporte = $request->deporte;
        $pista->reserva = $request->reserva;
       

        $pista->save();

        return $pista;
    }

    /**
     * Delete court
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $pista = pistas::destroy($request->id);
        return response()->json($pista);
    }

}
