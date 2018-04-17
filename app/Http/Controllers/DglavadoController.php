<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dglavado;
use App\Http\Requests\dglavadoRequest;
use DB;
use App\telaslavado;


class DglavadoController extends Controller
{
    public function index()
    {
    /*	$dglavados = dglavado::orderBy('id_DGL','DESC')->paginate();
    */

        $dglavados = DB::table('dglavados')
            ->join('telaslavados', 'dglavados.id_Lav', '=', 'dglavados.id_Lav')
            ->select('dglavados.*', 'telaslavados.Diseño_Lav')
            ->get();

    	return view('dg-lavado.index',compact('dglavados'));
    }

    ///

    public function destroy($id_DGL)
    {
    	$dgl = dglavado::find($id_DGL);
    	$dgl->delete();

    	return back();
    }

    ///

    public function create()
    {
        $lavado = telaslavado::pluck('Diseño_Lav', 'id_Lav');
        return view('dg-lavado.create', compact('lavado'));
    }

    ///

    public function store(dglavadoRequest $request)
    {
         $dgl = new dglavado;

        $dgl->fechaE_DGL = $request->fechaE_DGL;
        $dgl->horaE_DGL = $request->horaE_DGL;
        $dgl->Npieza_DGL = $request->Npieza_DGL;
        $dgl->color_DGL = $request->color_DGL;
        $dgl->loteProd_DGL = $request->loteProd_DGL;
        $dgl->equipo_DGL = $request->equipo_DGL;
        $dgl->batch_DGL = $request->batch_DGL;
        $dgl->loteUrdido_DGL = $request->loteUrdido_DGL;
        $dgl->folioBond_DGL = $request->folioBond_DGL;
        $dgl->codProdTermin_DGL = $request->codProdTermin_DGL;
        $dgl->nombreOpera_DGL = $request->nombreOpera_DGL;
        $dgl->comentarios_DGL = $request->comentarios_DGL;
        $dgl->id_Lav = $request->id_Lav;

        $dgl->save();

        return redirect()->route('dglavados.index')
                         ;
    }

    ///

    public function edit($id_DGL)
    {
        $dgl = dglavado::find($id_DGL);
        $lavado = telaslavado::find( 'id_Lav');
        return view('dg-lavado.edit', compact('dgl', 'lavado'));
    }

    ///

    public function update(dglavadoRequest $request, $id_DGL)
    {
        $dgl = dglavado::find($id_DGL);

        $dgl->fechaE_DGL = $request->fechaE_DGL;
        $dgl->horaE_DGL = $request->horaE_DGL;
        $dgl->Npieza_DGL = $request->Npieza_DGL;
        $dgl->color_DGL = $request->color_DGL;
        $dgl->loteProd_DGL = $request->loteProd_DGL;
        $dgl->equipo_DGL = $request->equipo_DGL;
        $dgl->batch_DGL = $request->batch_DGL;
        $dgl->loteUrdido_DGL = $request->loteUrdido_DGL;
        $dgl->folioBond_DGL = $request->folioBond_DGL;
        $dgl->codProdTermin_DGL = $request->codProdTermin_DGL;
        $dgl->nombreOpera_DGL = $request->nombreOpera_DGL;
        $dgl->comentarios_DGL = $request->comentarios_DGL;
        $dgl->id_Lav = $request->id_Lav;

        $dgl->save();

        return redirect()->route('dglavados.index');
    }
}
