<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\telaspunzonado;
use App\Http\Requests\telaspunzonadoRequest; 
use DB;
use App\clientes;

class TelaspunzonadoController extends Controller
{
    public function index()
    {
    	/*$punzo = telaspunzonado::orderBy('id_Punzo','DESC')->paginate();
        */

        $punzo = DB::table('telaspunzonados')
            ->join('clientes', 'telaspunzonados.id_Clien', '=', 'clientes.id_Clien')
            ->select('telaspunzonados.*', 'clientes.nombreCliente')
            ->get();

    	return view('telas-punzo.index',compact('punzo'));
    }

    ///

    public function destroy($id_Punzo)
    {
    	$pun = telaspunzonado::find($id_Punzo);
    	$pun->delete();

    	return back();
    }

    ///

    public function create()
    {
        $clien = clientes::pluck('nombreCliente', 'id_Clien');
        return view('telas-punzo.create', compact('clien'));
    }

    ///

    public function store(telaspunzonadoRequest $request)
    {
         $pun = new telaspunzonado;

        $pun->Diseño_Punzo = $request->Diseño_Punzo;
        $pun->color_Punzo = $request->color_Punzo;
        $pun->OEM_Punzo = $request->OEM_Punzo;
        $pun->MP_peso_Punzo = $request->MP_peso_Punzo;
        $pun->MP_anchoU_Punzo = $request->MP_anchoU_Punzo;
        $pun->MP_apari_Punzo = $request->MP_apari_Punzo;
        $pun->UM_peso_Punzo = $request->UM_peso_Punzo;
        $pun->UM_anchoU_Punzo = $request->UM_anchoU_Punzo;
        $pun->UM_apari_Punzo = $request->UM_apari_Punzo;
        $pun->LSE_peso_Punzo = $request->LSE_peso_Punzo;
        $pun->LSE_anchoU_Punzo = $request->LSE_anchoU_Punzo;
        $pun->LSE_apari_Punzo = $request->LSE_apari_Punzo;
        $pun->LIE_peso_Punzo = $request->LIE_peso_Punzo;
        $pun->LIE_anchoU_Punzo = $request->LIE_anchoU_Punzo;
        $pun->LIE_apari_Punzo = $request->LIE_apari_Punzo;
        $pun->id_Clien = $request->id_Clien;

        $pun->save();

        return redirect()->route('telaspunzonados.index');
    }

    ///

    public function edit($id_Punzo)
    {
        $pun = telaspunzonado::find($id_Punzo);
        $clien = clientes::find( 'id_Clien');
        return view('telas-punzo.edit', compact('pun', 'clien'));
    }

    ///

    public function update(telaspunzonadoRequest $request, $id_Punzo)
    {
        $pun = telaspunzonado::find($id_Punzo);

        $pun->Diseño_Punzo = $request->Diseño_Punzo;
        $pun->color_Punzo = $request->color_Punzo;
        $pun->OEM_Punzo = $request->OEM_Punzo;
        $pun->MP_peso_Punzo = $request->MP_peso_Punzo;
        $pun->MP_anchoU_Punzo = $request->MP_anchoU_Punzo;
        $pun->MP_apari_Punzo = $request->MP_apari_Punzo;
        $pun->UM_peso_Punzo = $request->UM_peso_Punzo;
        $pun->UM_anchoU_Punzo = $request->UM_anchoU_Punzo;
        $pun->UM_apari_Punzo = $request->UM_apari_Punzo;
        $pun->LSE_peso_Punzo = $request->LSE_peso_Punzo;
        $pun->LSE_anchoU_Punzo = $request->LSE_anchoU_Punzo;
        $pun->LSE_apari_Punzo = $request->LSE_apari_Punzo;
        $pun->LIE_peso_Punzo = $request->LIE_peso_Punzo;
        $pun->LIE_anchoU_Punzo = $request->LIE_anchoU_Punzo;
        $pun->LIE_apari_Punzo = $request->LIE_apari_Punzo;
        $pun->id_Clien = $request->id_Clien;

        $pun->save();

        return redirect()->route('telaspunzonados.index');
    }
}
