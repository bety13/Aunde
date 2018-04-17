<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dgbondeo;
use App\Http\Requests\dgbondeoRequest;
use DB;
use App\telasbondeo;

class DgbondeoController extends Controller
{
    public function index()
    {
    	/*$dgbondeos = dgbondeo::orderBy('id_DGBO','DESC')->paginate();*/

         $dgbondeos = DB::table('dgbondeos')
            ->join('telasbondeos', 'dgbondeos.id_Bondeo', '=', 'telasbondeos.id_Bondeo')
            ->select('dgbondeos.*', 'telasbondeos.Diseño_Bondeo')
            ->get();
    	return view('dg-bondeo.index',compact('dgbondeos'));
    }

    ///

    public function destroy($id_DGBO)
    {
    	$dgbonde = dgbondeo::find($id_DGBO);
    	$dgbonde->delete();

    	return back();
    }

    ///

    public function create()
    {
        $bondeo = telasbondeo::pluck('Diseño_Bondeo', 'id_Bondeo');
        return view('dg-bondeo.create', compact('bondeo'));
    }

    ///

    public function store(dgbondeoRequest $request)
    {
         $dgbonde = new dgbondeo;

        $dgbonde->fechaE_DGBO = $request->fechaE_DGBO;
        $dgbonde->horaE_DGBO = $request->horaE_DGBO;
        $dgbonde->Npieza_DGBO = $request->Npieza_DGBO;
        $dgbonde->color_DGBO = $request->color_DGBO;
        $dgbonde->loteProd_DGBO = $request->loteProd_DGBO;
        $dgbonde->equipo_DGBO = $request->equipo_DGBO;
        $dgbonde->batch_DGBO = $request->batch_DGBO;
        $dgbonde->loteUrdido_DGBO = $request->loteUrdido_DGBO;
        $dgbonde->folioBond_DGBO = $request->folioBond_DGBO;
        $dgbonde->codProdTermin_DGBO = $request->codProdTermin_DGBO;
        $dgbonde->nombreOpera_DGBO = $request->nombreOpera_DGBO;
        $dgbonde->comentarios_DGBO = $request->comentarios_DGBO;
        $dgbonde->id_Bondeo = $request->id_Bondeo;

        $dgbonde->save();

        return redirect()->route('dgbondeos.index');
    }

    ///

    public function edit($id_DGBO)
    {
        $dgbonde = dgbondeo::find($id_DGBO);
        $bondeo = telasbondeo::find( 'id_Bondeo');
        return view('dg-bondeo.edit', compact('dgbonde', 'bondeo'));
    }

    ///

    public function update(dgbondeoRequest $request, $id_DGBO)
    {
        $dgbonde = dgbondeo::find($id_DGBO);

        $dgbonde->fechaE_DGBO = $request->fechaE_DGBO;
        $dgbonde->horaE_DGBO = $request->horaE_DGBO;
        $dgbonde->Npieza_DGBO = $request->Npieza_DGBO;
        $dgbonde->color_DGBO = $request->color_DGBO;
        $dgbonde->loteProd_DGBO = $request->loteProd_DGBO;
        $dgbonde->equipo_DGBO = $request->equipo_DGBO;
        $dgbonde->batch_DGBO = $request->batch_DGBO;
        $dgbonde->loteUrdido_DGBO = $request->loteUrdido_DGBO;
        $dgbonde->folioBond_DGBO = $request->folioBond_DGBO;
        $dgbonde->codProdTermin_DGBO = $request->codProdTermin_DGBO;
        $dgbonde->nombreOpera_DGBO = $request->nombreOpera_DGBO;
        $dgbonde->comentarios_DGBO = $request->comentarios_DGBO;
        $dgbonde->id_Bondeo = $request->id_Bondeo;

        $dgbonde->save();

        return redirect()->route('dgbondeos.index');
    }
}
