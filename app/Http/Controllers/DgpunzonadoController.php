<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dgpunzonado;
use App\Http\Requests\dgpunzonadoRequest;
use DB;
use App\telaspunzonado;

class DgpunzonadoController extends Controller
{
    public function index()
    {
    	/*$dgpunzo = dgpunzonado::orderBy('id_DGP','DESC')->paginate();*/

        $dgpunzo = DB::table('dgpunzonados')
            ->join('telaspunzonados', 'dgpunzonados.id_Punzo', '=', 'telaspunzonados.id_Punzo')
            ->select('dgpunzonados.*', 'telaspunzonados.Diseño_Punzo')
            ->get();
    	return view('dg-punzo.index',compact('dgpunzo'));
    }

    ///

    public function destroy($id_DGP)
    {
    	$dgpun = dgpunzonado::find($id_DGP);
    	$dgpun->delete();

    	return back();
    }

    ///

    public function create()
    {
        $punzo = telaspunzonado::pluck('Diseño_Punzo', 'id_Punzo');
        return view('dg-punzo.create', compact('punzo'));
    }

    ///

    public function store(dgpunzonadoRequest $request)
    {
         $dgpun = new dgpunzonado;

        $dgpun->fechaE_DGP = $request->fechaE_DGP;
        $dgpun->horaE_DGP = $request->horaE_DGP;
        $dgpun->Npieza_DGP = $request->Npieza_DGP;
        $dgpun->color_DGP = $request->color_DGP;
        $dgpun->loteProd_DGP = $request->loteProd_DGP;
        $dgpun->equipo_DGP = $request->equipo_DGP;
        $dgpun->batch_DGP = $request->batch_DGP;
        $dgpun->loteUrdido_DGP = $request->loteUrdido_DGP;
        $dgpun->folioBond_DGP = $request->folioBond_DGP;
        $dgpun->codProdTermin_DGP = $request->codProdTermin_DGP;
        $dgpun->nombreOpera_DGP = $request->nombreOpera_DGP;
        $dgpun->comentarios_DGP = $request->comentarios_DGP;
        $dgpun->id_Punzo = $request->id_Punzo;

        $dgpun->save();

        return redirect()->route('dgpunzonados.index');
    }

    ///

    public function edit($id_DGP)
    {
        $dgpun = dgpunzonado::find($id_DGP);
        $punzo = telaspunzonado::find( 'id_Punzo');
        return view('dg-punzo.edit', compact('dgpun', 'punzo'));
    }

    ///

    public function update(dgpunzonadoRequest $request, $id_DGP)
    {
        $dgpun = dgpunzonado::find($id_DGP);

        $dgpun->fechaE_DGP = $request->fechaE_DGP;
        $dgpun->horaE_DGP = $request->horaE_DGP;
        $dgpun->Npieza_DGP = $request->Npieza_DGP;
        $dgpun->color_DGP = $request->color_DGP;
        $dgpun->loteProd_DGP = $request->loteProd_DGP;
        $dgpun->equipo_DGP = $request->equipo_DGP;
        $dgpun->batch_DGP = $request->batch_DGP;
        $dgpun->loteUrdido_DGP = $request->loteUrdido_DGP;
        $dgpun->folioBond_DGP = $request->folioBond_DGP;
        $dgpun->codProdTermin_DGP = $request->codProdTermin_DGP;
        $dgpun->nombreOpera_DGP = $request->nombreOpera_DGP;
        $dgpun->comentarios_DGP = $request->comentarios_DGP;
        $dgpun->id_Punzo = $request->id_Punzo;

        $dgpun->save();

        return redirect()->route('dgpunzonados.index');
    }
}
