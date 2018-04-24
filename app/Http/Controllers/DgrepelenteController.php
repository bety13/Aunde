<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dgrepelente;
use App\Http\Requests\dgrepelenteRequest;
use DB;
use App\telasrepelente;
use App\procesos;

class DgrepelenteController extends Controller
{
    public function index()
    { 
    	/*$dgrepe = dgrepelente::orderBy('id_DGR','DESC')->paginate();*/

        $dgrepe = DB::table('dgrepelentes')
            ->join('telasrepelentes', 'telasrepelentes.id_Rep', '=', 'dgrepelentes.id_Rep')
            ->join('Procesos', 'Procesos.id_Procesos', '=', 'dgrepelentes.id_Procesos')
            ->select('dgrepelentes.*', 'telasrepelentes.Diseño_Rep', 'Procesos.Proceso')
            ->get();

    	return view('dg-repelente.index',compact('dgrepe'));
    }

    ///

    public function destroy($id_DGR)
    {
    	$dgrep = dgrepelente::find($id_DGR);
    	$dgrep->delete();

    	return back();
    }

    ///

    public function create()
    {
        //$repelente = telasrepelente::pluck('Diseño_Rep', 'id_Rep');
        $repelente = telasrepelente::select( 
                DB::raw("CONCAT(Diseño_Rep,' ---- ',color_Rep) AS DisRep") ,'id_Rep')
               ->pluck('DisRep', 'id_Rep');
      
        $proceso = procesos::pluck('Proceso', 'id_Procesos');

        return view('dg-repelente.create', compact('repelente','proceso'));
    }

    ///

    public function store(dgrepelenteRequest $request)
    {
         $dgrep = new dgrepelente;

        $dgrep->fechaE_DGR = $request->fechaE_DGR;
        $dgrep->horaE_DGR = $request->horaE_DGR;
        $dgrep->Npieza_DGR = $request->Npieza_DGR;
        $dgrep->color_DGR = $request->color_DGR;
        $dgrep->loteProd_DGR = $request->loteProd_DGR;
        $dgrep->equipo_DGR = $request->equipo_DGR;
        $dgrep->batch_DGR = $request->batch_DGR;
        $dgrep->loteUrdido_DGR = $request->loteUrdido_DGR;
        $dgrep->folioBond_DGR = $request->folioBond_DGR;
        $dgrep->codProdTermin_DGR = $request->codProdTermin_DGR;
        $dgrep->nombreOpera_DGR = $request->nombreOpera_DGR;
        $dgrep->comentarios_DGR = $request->comentarios_DGR;
        $dgrep->id_Rep = $request->id_Rep;
        $dgrep->id_Procesos = $request->id_Procesos;

        $dgrep->save();

        return redirect()->route('dgrepelentes.index');
    }

    ///

    public function edit($id_DGR)
    {
        $dgrep = dgrepelente::find($id_DGR);
        $repelente = telasrepelente::find( 'id_Rep');
        return view('dg-repelente.edit', compact('dgrep', 'repelente'));
    }

    ///

    public function update(dgrepelenteRequest $request, $id_DGR)
    {
        $dgrep = dgrepelente::find($id_DGR);

        $dgrep->fechaE_DGR = $request->fechaE_DGR;
        $dgrep->horaE_DGR = $request->horaE_DGR;
        $dgrep->Npieza_DGR = $request->Npieza_DGR;
        $dgrep->color_DGR = $request->color_DGR;
        $dgrep->loteProd_DGR = $request->loteProd_DGR;
        $dgrep->equipo_DGR = $request->equipo_DGR;
        $dgrep->batch_DGR = $request->batch_DGR;
        $dgrep->loteUrdido_DGR = $request->loteUrdido_DGR;
        $dgrep->folioBond_DGR = $request->folioBond_DGR;
        $dgrep->codProdTermin_DGR = $request->codProdTermin_DGR;
        $dgrep->nombreOpera_DGR = $request->nombreOpera_DGR;
        $dgrep->comentarios_DGR = $request->comentarios_DGR;
        $dgrep->id_Rep = $request->id_Rep;
        $dgrep->id_Procesos = $request->id_Procesos;

        $dgrep->save();

        return redirect()->route('dgrepelentes.index');
    }
}
