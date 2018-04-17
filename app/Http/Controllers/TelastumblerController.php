<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\telastumbler;
use App\Http\Requests\telastumblerRequest;
use DB;
use App\clientes;

class TelastumblerController extends Controller
{
    public function index()
    {
   /* 	$tumbler = telastumbler::orderBy('id_Tum','DESC')->paginate();
   */
        $tumbler = DB::table('telastumblers')
            ->join('clientes', 'telastumblers.id_Clien', '=', 'clientes.id_Clien')
            ->select('telastumblers.*', 'clientes.nombreCliente')
            ->get();

    	return view('telas-tumbler.index',compact('tumbler'));
    }

    ///

    public function destroy($id_Tum)
    {
    	$tumble = telastumbler::find($id_Tum);
    	$tumble->delete();

    	return back();
    }

    ///

    public function create()
    {
        $clien = clientes::pluck('nombreCliente', 'id_Clien');
        return view('telas-tumbler.create', compact('clien'));
    }

    ///

    public function store(telastumblerRequest $request)
    {
        $tumble = new telastumbler;

        $tumble->Diseño_Tum = $request->Diseño_Tum;
        $tumble->color_Tum = $request->color_Tum;
        $tumble->OEM_Tum = $request->OEM_Tum;
        $tumble->MP_peso_Tum = $request->MP_peso_Tum;
        $tumble->MP_anchoU_Tum = $request->MP_anchoU_Tum;
        $tumble->MP_elongacionFW_Tum = $request->MP_elongacionFW_Tum;
        $tumble->MP_apari_Tum = $request->MP_apari_Tum;
        $tumble->MP_tono_Tum = $request->MP_tono_Tum;
        $tumble->UM_peso_Tum = $request->UM_peso_Tum;
        $tumble->UM_anchoU_Tum = $request->UM_anchoU_Tum;
        $tumble->UM_elongacionFW_Tum = $request->UM_elongacionFW_Tum;
        $tumble->UM_apari_Tum = $request->UM_apari_Tum;
        $tumble->UM_tono_Tum = $request->UM_tono_Tum;
        $tumble->LSE_peso_Tum = $request->LSE_peso_Tum;
        $tumble->LSE_anchoU_Tum = $request->LSE_anchoU_Tum;
        $tumble->LSE_elongacionW_Tum = $request->LSE_elongacionW_Tum;
        $tumble->LSE_elongacionF_Tum = $request->LSE_elongacionF_Tum;
        $tumble->LSE_apari_Tum = $request->LSE_apari_Tum;
        $tumble->LSE_tono_Tum = $request->LSE_tono_Tum;
        $tumble->LIE_peso_Tum = $request->LIE_peso_Tum;
        $tumble->LIE_anchoU_Tum = $request->LIE_anchoU_Tum;
        $tumble->LIE_elongacionW_Tum = $request->LIE_elongacionW_Tum;
        $tumble->LIE_elongacionF_Tum = $request->LIE_elongacionF_Tum;
        $tumble->LIE_apari_Tum = $request->LIE_apari_Tum;
        $tumble->LIE_tono_Tum = $request->LIE_tono_Tum;
        $tumble->id_Clien = $request->id_Clien;

        $tumble->save();

        return redirect()->route('telastumblers.index');
    }

    ///

    public function edit($id_Tum)
    {
        $tumble = telastumbler::find($id_Tum);
        $clien = clientes::find( 'id_Clien');
        return view('telas-tumbler.edit', compact('tumble', 'clien'));
    }

    ///

    public function update(telastumblerRequest $request, $id_Tum)
    {
        $tumble = telastumbler::find($id_Tum);

        $tumble->Diseño_Tum = $request->Diseño_Tum;
        $tumble->color_Tum = $request->color_Tum;
        $tumble->OEM_Tum = $request->OEM_Tum;
        $tumble->MP_peso_Tum = $request->MP_peso_Tum;
        $tumble->MP_anchoU_Tum = $request->MP_anchoU_Tum;
        $tumble->MP_elongacionFW_Tum = $request->MP_elongacionFW_Tum;
        $tumble->MP_apari_Tum = $request->MP_apari_Tum;
        $tumble->MP_tono_Tum = $request->MP_tono_Tum;
        $tumble->UM_peso_Tum = $request->UM_peso_Tum;
        $tumble->UM_anchoU_Tum = $request->UM_anchoU_Tum;
        $tumble->UM_elongacionFW_Tum = $request->UM_elongacionFW_Tum;
        $tumble->UM_apari_Tum = $request->UM_apari_Tum;
        $tumble->UM_tono_Tum = $request->UM_tono_Tum;
        $tumble->LSE_peso_Tum = $request->LSE_peso_Tum;
        $tumble->LSE_anchoU_Tum = $request->LSE_anchoU_Tum;
        $tumble->LSE_elongacionW_Tum = $request->LSE_elongacionW_Tum;
        $tumble->LSE_elongacionF_Tum = $request->LSE_elongacionF_Tum;
        $tumble->LSE_apari_Tum = $request->LSE_apari_Tum;
        $tumble->LSE_tono_Tum = $request->LSE_tono_Tum;
        $tumble->LIE_peso_Tum = $request->LIE_peso_Tum;
        $tumble->LIE_anchoU_Tum = $request->LIE_anchoU_Tum;
        $tumble->LIE_elongacionW_Tum = $request->LIE_elongacionW_Tum;
        $tumble->LIE_elongacionF_Tum = $request->LIE_elongacionF_Tum;
        $tumble->LIE_apari_Tum = $request->LIE_apari_Tum;
        $tumble->LIE_tono_Tum = $request->LIE_tono_Tum;
        $tumble->id_Clien = $request->id_Clien;

        $tumble->save();

        return redirect()->route('telastumblers.index');
    }
}

