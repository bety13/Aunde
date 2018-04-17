<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\telastejido;
use App\Http\Requests\telastejidoRequest;
use DB;

use App\clientes;

class TelastejidoController extends Controller
{
    public function index()
    {
        
/*
    	$tejido = telastejido::orderBy('id_Tej','ASC')->paginate();
  */
    $tejido = DB::table('telastejidos')
    ->join('clientes', 'telastejidos.id_Clien', '=', 'clientes.id_Clien')
   ->select('telastejidos.*', 'clientes.nombreCliente')
    ->get();


     	return view('telas-tejido.index',compact('tejido'));
    }

    ///

    public function destroy($id_Tej)
    {
    	$tejid = telastejido::find($id_Tej);
    	$tejid->delete();

    	return back()->with('info', 'La tela de area Tejido fue eliminada');
    }

    ///

    public function create()
    {
        $clien = clientes::pluck('nombreCliente', 'id_Clien');
        return view('telas-tejido.create', compact('clien'));
    }

    ///

    public function store(telastejidoRequest $request)
    {
         $tejid = new telastejido;

        $tejid->Diseño_Tej = $request->Diseño_Tej;
        $tejid->color_Tej = $request->color_Tej;
        $tejid->OEM_Tej = $request->OEM_Tej;
        $tejid->MP_peso_Tej = $request->MP_peso_Tej;
        $tejid->MP_anchoU_Tej = $request->MP_anchoU_Tej;
        $tejid->MP_apari_Tej = $request->MP_apari_Tej;
        $tejid->UM_peso_Tej = $request->UM_peso_Tej;
        $tejid->UM_anchoU_Tej = $request->UM_anchoU_Tej;
        $tejid->UM_apari_Tej = $request->UM_apari_Tej;
        $tejid->LSE_peso_Tej = $request->LSE_peso_Tej;
        $tejid->LSE_anchoU_Tej = $request->LSE_anchoU_Tej;
        $tejid->LSE_apari_Tej = $request->LSE_apari_Tej;
        $tejid->LIE_peso_Tej = $request->LIE_peso_Tej;
        $tejid->LIE_anchoU_Tej = $request->LIE_anchoU_Tej;
        $tejid->LIE_apari_Tej = $request->LIE_apari_Tej;
        $tejid->id_Clien = $request->id_Clien;

        $tejid->save();

        return redirect()->route('telastejidos.index')
                         ->with( 'la tela de Area Tejido fue guardada');
    }

    ///

    public function edit($id_Tej)
    {
        $tejid = telastejido::find($id_Tej);
        $clien = clientes::find( 'id_Clien');

        return view('telas-tejido.edit', compact('tejid','clien'));
    }

    ///

    public function update(telastejidoRequest $request, $id_Tej)
    {
        $tejid = telastejido::find($id_Tej);

        $tejid->Diseño_Tej = $request->Diseño_Tej;
        $tejid->color_Tej = $request->color_Tej;
        $tejid->OEM_Tej = $request->OEM_Tej;
        $tejid->MP_peso_Tej = $request->MP_peso_Tej;
        $tejid->MP_anchoU_Tej = $request->MP_anchoU_Tej;
        $tejid->MP_apari_Tej = $request->MP_apari_Tej;
        $tejid->UM_peso_Tej = $request->UM_peso_Tej;
        $tejid->UM_anchoU_Tej = $request->UM_anchoU_Tej;
        $tejid->UM_apari_Tej = $request->UM_apari_Tej;
        $tejid->LSE_peso_Tej = $request->LSE_peso_Tej;
        $tejid->LSE_anchoU_Tej = $request->LSE_anchoU_Tej;
        $tejid->LSE_apari_Tej = $request->LSE_apari_Tej;
        $tejid->LIE_peso_Tej = $request->LIE_peso_Tej;
        $tejid->LIE_anchoU_Tej = $request->LIE_anchoU_Tej;
        $tejid->LIE_apari_Tej = $request->LIE_apari_Tej;
        $tejid->id_Clien = $request->id_Clien;

        $tejid->save();

        return redirect()->route('telastejidos.index');
    }
}
 