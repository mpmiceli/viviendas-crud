<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Vivienda;

class ViviendaController extends Controller
{
    //
    public function mostrarFormAdd()
    {
        return view('vivienda.vivienda-add');
    }

    public function agregarDesdePost(Request $request)
    {
        $vivienda = new Vivienda();
        $vivienda->cant_ambientes = $request->input('cant_ambientes');
        $vivienda->cant_banos  = $request->input('cant_banos');
        $vivienda->patio = ($request->input('patio') == 1) ? true : false;
        $vivienda->garage = ($request->input('garage') == 1) ? true : false;
        $vivienda->existe = true;
        $vivienda->tipo_id = $request->input('tipo_id');
        $vivienda->save();

        return redirect()->route('vivienda-lista');
    }

    public function lista()
    {
        $viviendas = Vivienda::where('existe', 1)->get();

        return view(
            'vivienda.lista',
            ['viviendas' => $viviendas]
        );
    }

}
