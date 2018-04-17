<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dgbacking;
use App\Http\Requests\dgbackingRequest;
use DB;
use App\telasbacking;

class DgbackingController extends Controller
{
    public function index()
    {
    	/*$dgbacki = dgbacking::orderBy('id_DGB','DESC')->paginate();*/

        $dgbacki = DB::table('dgbackings')
            ->join('telasbackings', 'dgbackings.id_Back', '=', 'telasbackings.id_Back')
            ->select('dgbackings.*', 'telasbackings.Diseño_Back')
            ->get();
    	return view('dg-backing.index',compact('dgbacki'));
    }

    ///

    public function destroy($id_DGB)
    {
    	$dgback = dgbacking::find($id_DGB);
    	$dgback->delete();

    	return back();
    }

    ///

    public function create()
    {
       $back = telasbacking::pluck('Diseño_Back', 'id_Back');
        return view('dg-backing.create', compact('back'));
    }

    ///

    public function store(dgbackingRequest $request)
    {
         $dgback = new dgbacking;

        $dgback->fechaE_DGB = $request->fechaE_DGB;
        $dgback->horaE_DGB = $request->horaE_DGB;
        $dgback->Npieza_DGB = $request->Npieza_DGB;
        $dgback->color_DGB = $request->color_DGB;
        $dgback->loteProd_DGB = $request->loteProd_DGB;
        $dgback->equipo_DGB = $request->equipo_DGB;
        $dgback->batch_DGB = $request->batch_DGB;
        $dgback->loteUrdido_DGB = $request->loteUrdido_DGB;
        $dgback->folioBond_DGB = $request->folioBond_DGB;
        $dgback->codProdTermin_DGB = $request->codProdTermin_DGB;
        $dgback->nombreOpera_DGB = $request->nombreOpera_DGB;
        $dgback->comentarios_DGB = $request->comentarios_DGB;
        $dgback->id_Back = $request->id_Back;

        $dgback->save();

        return redirect()->route('dgbackings.index');
    }

    ///

    public function edit($id_DGB)
    {
        $dgback = dgbacking::find($id_DGB);
         $back = telasbacking::find( 'id_Back');
        return view('dg-backing.edit', compact('dgback', 'back'));
    }

    ///

    public function update(dgbackingRequest $request, $id_DGB)
    {
        $dgback = dgbacking::find($id_DGB);

        $dgback->fechaE_DGB = $request->fechaE_DGB;
        $dgback->horaE_DGB = $request->horaE_DGB;
        $dgback->Npieza_DGB = $request->Npieza_DGB;
        $dgback->color_DGB = $request->color_DGB;
        $dgback->loteProd_DGB = $request->loteProd_DGB;
        $dgback->equipo_DGB = $request->equipo_DGB;
        $dgback->batch_DGB = $request->batch_DGB;
        $dgback->loteUrdido_DGB = $request->loteUrdido_DGB;
        $dgback->folioBond_DGB = $request->folioBond_DGB;
        $dgback->codProdTermin_DGB = $request->codProdTermin_DGB;
        $dgback->nombreOpera_DGB = $request->nombreOpera_DGB;
        $dgback->comentarios_DGB = $request->comentarios_DGB;
        $dgback->id_Back = $request->id_Back;

        $dgback->save();

        return redirect()->route('dgbackings.index');
    }
}
