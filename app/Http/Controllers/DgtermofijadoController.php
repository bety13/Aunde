<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dgtermofijado;
use App\Http\Requests\dgtermofijadoRequest;
use DB;
use App\telastermofijado;

class DgtermofijadoController extends Controller
{
    public function index()
    {
    	/*$dgtermos = dgtermofijado::orderBy('id_DGTE','DESC')->paginate();*/

        $dgtermos = DB::table('dgtermofijados')
            ->join('telastermofijados', 'dgtermofijados.id_Termo', '=', 'telastermofijados.id_Termo')
            ->select('dgtermofijados.*', 'telastermofijados.Diseño_Termo')
            ->get();
    	return view('dg-termo.index',compact('dgtermos'));
    }

    ///

    public function destroy($id_DGTE)
    {
    	$dgtermo = dgtermofijado::find($id_DGTE);
    	$dgtermo->delete();

    	return back();
    }

    ///

    public function create()
    {
        $termo = telastermofijado::pluck('Diseño_Termo', 'id_Termo');
        return view('dg-termo.create', compact('termo'));
    }

    ///

    public function store(dgtermofijadoRequest $request)
    {
         $dgtermo = new dgtermofijado;

        $dgtermo->fechaE_DGTE = $request->fechaE_DGTE;
        $dgtermo->horaE_DGTE = $request->horaE_DGTE;
        $dgtermo->Npieza_DGTE = $request->Npieza_DGTE;
        $dgtermo->color_DGTE = $request->color_DGTE;
        $dgtermo->loteProd_DGTE = $request->loteProd_DGTE;
        $dgtermo->equipo_DGTE = $request->equipo_DGTE;
        $dgtermo->batch_DGTE = $request->batch_DGTE;
        $dgtermo->loteUrdido_DGTE = $request->loteUrdido_DGTE;
        $dgtermo->folioBond_DGTE = $request->folioBond_DGTE;
        $dgtermo->codProdTermin_DGTE = $request->codProdTermin_DGTE;
        $dgtermo->nombreOpera_DGTE = $request->nombreOpera_DGTE;
        $dgtermo->comentarios_DGTE = $request->comentarios_DGTE;
        $dgtermo->id_Termo = $request->id_Termo;

        $dgtermo->save();

        return redirect()->route('dgtermofijados.index');
    }

    ///

    public function edit($id_DGTE)
    {
        $dgtermo = dgtermofijado::find($id_DGTE);
       $termo = telastermofijado::find( 'id_Termo');
        return view('dg-termo.edit', compact('dgtermo', 'termo'));
    }

    ///

    public function update(dgtermofijadoRequest $request, $id_DGTE)
    {
        $dgtermo = dgtermofijado::find($id_DGTE);

        $dgtermo->fechaE_DGTE = $request->fechaE_DGTE;
        $dgtermo->horaE_DGTE = $request->horaE_DGTE;
        $dgtermo->Npieza_DGTE = $request->Npieza_DGTE;
        $dgtermo->color_DGTE = $request->color_DGTE;
        $dgtermo->loteProd_DGTE = $request->loteProd_DGTE;
        $dgtermo->equipo_DGTE = $request->equipo_DGTE;
        $dgtermo->batch_DGTE = $request->batch_DGTE;
        $dgtermo->loteUrdido_DGTE = $request->loteUrdido_DGTE;
        $dgtermo->folioBond_DGTE = $request->folioBond_DGTE;
        $dgtermo->codProdTermin_DGTE = $request->codProdTermin_DGTE;
        $dgtermo->nombreOpera_DGTE = $request->nombreOpera_DGTE;
        $dgtermo->comentarios_DGTE = $request->comentarios_DGTE;
        $dgtermo->id_Termo = $request->id_Termo;

        $dgtermo->save();

        return redirect()->route('dgtermofijados.index');
    }
}
