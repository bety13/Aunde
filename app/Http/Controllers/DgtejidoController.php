<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dgtejido;
use App\Http\Requests\dgtejidoRequest;
use DB;
use App\telastejido;
use Carbon\Carbon;
use App\procesos;

class DgtejidoController extends Controller
{
    public function index()
    {
    /*	$dgtejidos = dgtejido::orderBy('id_DG','DESC')->paginate();
    */

        $dgtejidos = DB::table('dgtejidos')
            ->join('telastejidos', 'telastejidos.id_Tej', '=', 'dgtejidos.id_Tej')
            ->join('Procesos', 'Procesos.id_Procesos', '=', 'dgtejidos.id_Procesos')
            ->select('dgtejidos.*', 'telastejidos.Diseño_Tej', 'Procesos.Proceso')
            ->get();

       
    	return view('dg-tejido.index',compact('dgtejidos'));
    }

    ///

    public function destroy($id_DG)
    {
    	$dg = dgtejido::find($id_DG);
    	$dg->delete();

    	return back();
    }

    ///

    public function create()
    {
        $tejido = telastejido::select( 
                DB::raw("CONCAT(Diseño_Tej,'    ----    ',color_Tej) AS DisTej") ,'id_Tej')
               ->pluck('DisTej', 'id_Tej');

        $proceso = procesos::pluck('Proceso', 'id_Procesos');

        return view('dg-tejido.create', compact('tejido','proceso'));

    }

    ///

    public function store(dgtejidoRequest $request)
    {
         $dg = new dgtejido;

        $dg->created_at = $request->created_at;
        //$dg->updated_at = $request->updated_at;
        $dg->Npieza_DG = $request->Npieza_DG;
        $dg->color_DG = $request->color_DG;
        $dg->loteProd_DG = $request->loteProd_DG;
        $dg->equipo_DG = $request->equipo_DG;
        $dg->batch_DG = $request->batch_DG;
        $dg->loteUrdido_DG = $request->loteUrdido_DG;
        $dg->folioBond_DG = $request->folioBond_DG;
        $dg->codProdTermin_DG = $request->codProdTermin_DG;
        $dg->nombreOpera_DG = $request->nombreOpera_DG;
        $dg->comentarios_DG = $request->comentarios_DG;
        $dg->id_Tej = $request->id_Tej;
        $dg->id_Procesos = $request->id_Procesos;

        $dg->save();

        return redirect()->route('dgtejidos.index');
    }

    ///

    public function edit($id_DG)
    {
        $dg = dgtejido::find($id_DG);
        $tejido = telastejido::find('id_Tej');
        // $tejido = DB::table('telastejidos')->orderBy('Diseño_Tej', 'asc')->lists('Diseño_Tej','id_Tej');
        return view('dg-tejido.edit', compact('dg', 'tejido'));
    }

    ///

    public function update(dgtejidoRequest $request, $id_DG)
    {
        $dg = dgtejido::find($id_DG);

        $dg->fechaE_DG = $request->fechaE_DG;
        $dg->horaE_DG = $request->horaE_DG;
        $dg->Npieza_DG = $request->Npieza_DG;
        $dg->color_DG = $request->color_DG;
        $dg->loteProd_DG = $request->loteProd_DG;
        $dg->equipo_DG = $request->equipo_DG;
        $dg->batch_DG = $request->batch_DG;
        $dg->loteUrdido_DG = $request->loteUrdido_DG;
        $dg->folioBond_DG = $request->folioBond_DG;
        $dg->codProdTermin_DG = $request->codProdTermin_DG;
        $dg->nombreOpera_DG = $request->nombreOpera_DG;
        $dg->comentarios_DG = $request->comentarios_DG;
        $dg->id_Tej = $request->id_Tej;
        $dg->id_Procesos = $request->id_Procesos;

        $dg->save();

        return redirect()->route('dgtejidos.index');
    }
}
