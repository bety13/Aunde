<?php 

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use App\telaslavado;
use App\Http\Requests\telaslavadoRequest;
use DB;
use App\clientes;

class TelaslavadoController extends Controller
{
    
    public function index()
    {
  /*  	$lavado = telaslavado::orderBy('id_Lav','DESC')->paginate();
*/
        $lavado = DB::table('telaslavados')
            ->join('clientes', 'telaslavados.id_Clien', '=', 'clientes.id_Clien')
            ->select('telaslavados.*', 'clientes.nombreCliente')
            ->get();

    	return view('telas-lavado.index',compact('lavado'));
    }

    ///

    public function destroy($id_Lav)
    {
    	$lavad = telaslavado::find($id_Lav);
    	$lavad->delete();

    	return back();
    }

    ///

    public function create()
    {   
        $clien = clientes::pluck('nombreCliente', 'id_Clien');
        return view('telas-lavado.create', compact('clien'));
    }

    ///

    public function store(telaslavadoRequest $request)
    {
        $lavad = new telaslavado;

        $lavad->Diseño_Lav = $request->Diseño_Lav;
        $lavad->color_Lav = $request->color_Lav;
        $lavad->OEM_Lav = $request->OEM_Lav;
        $lavad->MP_peso_Lav = $request->MP_peso_Lav;
        $lavad->MP_anchoU_Lav = $request->MP_anchoU_Lav;
        $lavad->MP_apari_Lav = $request->MP_apari_Lav;
        $lavad->UM_peso_Lav = $request->UM_peso_Lav;
        $lavad->UM_anchoU_Lav = $request->UM_anchoU_Lav;
        $lavad->UM_apari_Lav = $request->UM_apari_Lav;
        $lavad->LSE_peso_Lav = $request->LSE_peso_Lav;
        $lavad->LSE_anchoU_Lav = $request->LSE_anchoU_Lav;
        $lavad->LSE_apari_Lav = $request->LSE_apari_Lav;
        $lavad->LIE_peso_Lav = $request->LIE_peso_Lav;
        $lavad->LIE_anchoU_Lav = $request->LIE_anchoU_Lav;
        $lavad->LIE_apari_Lav = $request->LIE_apari_Lav;
        $lavad->id_Clien = $request->id_Clien;

        $lavad->save();

        return redirect()->route('telaslavados.index');
    }

    ///

    public function edit($id_Lav)
    {
        $lavad = telaslavado::find($id_Lav);
        $clien = clientes::find( 'id_Clien');
        return view('telas-lavado.edit', compact('lavad', 'clien'));
    }

    ///

    public function update(telaslavadoRequest $request, $id_Lav)
    {
        $lavad = telaslavado::find($id_Lav);

        $lavad->Diseño_Lav = $request->Diseño_Lav;
        $lavad->color_Lav = $request->color_Lav;
        $lavad->OEM_Lav = $request->OEM_Lav;
        $lavad->MP_peso_Lav = $request->MP_peso_Lav;
        $lavad->MP_anchoU_Lav = $request->MP_anchoU_Lav;
        $lavad->MP_apari_Lav = $request->MP_apari_Lav;
        $lavad->UM_peso_Lav = $request->UM_peso_Lav;
        $lavad->UM_anchoU_Lav = $request->UM_anchoU_Lav;
        $lavad->UM_apari_Lav = $request->UM_apari_Lav;
        $lavad->LSE_peso_Lav = $request->LSE_peso_Lav;
        $lavad->LSE_anchoU_Lav = $request->LSE_anchoU_Lav;
        $lavad->LSE_apari_Lav = $request->LSE_apari_Lav;
        $lavad->LIE_peso_Lav = $request->LIE_peso_Lav;
        $lavad->LIE_anchoU_Lav = $request->LIE_anchoU_Lav;
        $lavad->LIE_apari_Lav = $request->LIE_apari_Lav;
        $lavad->id_Clien = $request->id_Clien;

        $lavad->save();

        return redirect()->route('telaslavados.index');
    }
}
