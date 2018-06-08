<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TipoVivienda;

class TipoViviendaController extends Controller
{
    //
    public function add()
    {
        return view('vivienda.tipo-add');
    }

    public function agregarDesdePost(Request $request)
    {
        $tipo = new TipoVivienda();
        $tipo->nombre = $request->input('nombre');
        $tipo->save();
    }
}
