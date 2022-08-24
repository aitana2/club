<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;


class BookController extends Controller
{
    /**
     * Lista of bookings.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservas = reservas::All();
        return $reservas;
    }

    /**
     * New book.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reserva = new reservas();
        $reserva->socioid = $request->socioid;
        $reserva->pistaid = $request->pistaid;
        $reserva->fecha = $request->fecha;
        $reserva->hora_inicio = $request->hora_inicio;
        $reserva->hora_fin = $request->hora_fin;

        $reserva->save();
        return response()->json($reserva);
    }
    /**
     * Mostrar reservas por id.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reserva = reservas::find($id);
        return response() -> json($reserva);

    }

    /**
     * Eliminar reserva
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $reserva = reservas::destroy($request->id);
        return response()->json($reserva);
    }
}
