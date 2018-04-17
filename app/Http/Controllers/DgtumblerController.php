<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dgtumbler;
use App\Http\Requests\dgtumblerRequest;
use DB;
use App\telastumbler;

class DgtumblerController extends Controller
{
    public function index()
    {
    	/*$dgtumb = dgtumbler::orderBy('id_DGT','DESC')->paginate();*/

        $dgtumb = DB::table('dgtumblers')
            ->join('telastumblers', 'dgtumblers.id_Tum', '=', 'telastumblers.id_Tum')
            ->select('dgtumblers.*', 'telastumblers.Diseño_Tum')
            ->get();
    	return view('dg-tumbler.index',compact('dgtumb'));
    }

    ///

    public function destroy($id_DGT)
    {
    	$dgt = dgtumbler::find($id_DGT);
    	$dgt->delete();

    	return back();
    }

    ///

    public function create()
    {
        $Tum = telastumbler::pluck('Diseño_Tum', 'id_Tum');
        return view('dg-tumbler.create', compact('Tum'));
    }

    ///

    public function store(dgtumblerRequest $request)
    {
         $dgt = new dgtumbler;

        $dgt->fechaE_DGT = $request->fechaE_DGT;
        $dgt->horaE_DGT = $request->horaE_DGT;
        $dgt->Npieza_DGT = $request->Npieza_DGT;
        $dgt->color_DGT = $request->color_DGT;
        $dgt->loteProd_DGT = $request->loteProd_DGT;
        $dgt->equipo_DGT = $request->equipo_DGT;
        $dgt->batch_DGT = $request->batch_DGT;
        $dgt->loteUrdido_DGT = $request->loteUrdido_DGT;
        $dgt->folioBond_DGT = $request->folioBond_DGT;
        $dgt->codProdTermin_DGT = $request->codProdTermin_DGT;
        $dgt->nombreOpera_DGT = $request->nombreOpera_DGT;
        $dgt->comentarios_DGT = $request->comentarios_DGT;
        $dgt->id_Tum = $request->id_Tum;

        $dgt->save();

        return redirect()->route('dgtumblers.index');
    }

    ///

    public function edit($id_DGT)
    {
        $dgt = dgtumbler::find($id_DGT);
        $Tum = telastumbler::find( 'id_Tum');
        return view('dg-tumbler.edit', compact('dgt', 'Tum'));
    }

    ///

    public function update(dgtumblerRequest $request, $id_DGT)
    {
        $dgt = dgtumbler::find($id_DGT);

        $dgt->fechaE_DGT = $request->fechaE_DGT;
        $dgt->horaE_DGT = $request->horaE_DGT;
        $dgt->Npieza_DGT = $request->Npieza_DGT;
        $dgt->color_DGT = $request->color_DGT;
        $dgt->loteProd_DGT = $request->loteProd_DGT;
        $dgt->equipo_DGT = $request->equipo_DGT;
        $dgt->batch_DGT = $request->batch_DGT;
        $dgt->loteUrdido_DGT = $request->loteUrdido_DGT;
        $dgt->folioBond_DGT = $request->folioBond_DGT;
        $dgt->codProdTermin_DGT = $request->codProdTermin_DGT;
        $dgt->nombreOpera_DGT = $request->nombreOpera_DGT;
        $dgt->comentarios_DGT = $request->comentarios_DGT;
        $dgt->id_Tum = $request->id_Tum;

        $dgt->save();

        return redirect()->route('dgtumblers.index');
    }
}
