<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clientes;
use App\Http\Requests\clientesRequest;
use Laracasts\Flash\Flash;

class ClientesController extends Controller
{
    public function index()
    {
    	$cliente = clientes::orderBy('id_Clien','DESC')->paginate();
    	return view('clientes.index',compact('cliente'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(clientesRequest $request)
    {
         $client = new clientes;

        $client->NumeroCliente = $request->NumeroCliente;
        $client->nombreCliente = $request->nombreCliente;
        $client->direccionC = $request->direccionC;

        $client->save();

        Flash::success("Se ha registrado". $client->nombreCliente . "de forma exitosa");
        return redirect()->route('clientes.index');
                         //->with('info', 'El cliente fue guardado');
    }

    public function edit($id_Clien)
    {
        $client = clientes::find($id_Clien);
        return view('clientes.edit', compact('client'));
    }

    public function update(clientesRequest $request, $id_Clien)
    {
        $client = clientes::find($id_Clien);

        $client->NumeroCliente = $request->NumeroCliente;
        $client->nombreCliente = $request->nombreCliente;
        $client->direccionC = $request->direccionC;

        $client->save();

        return redirect()->route('clientes.index');
    }

    public function show($id_Clien)
    {
    	$client = clientes::find($id_Clien);
    	return view('clientes.show', compact('client'));
    }

    public function destroy($id_Clien)
    {
    	$client = clientes::find($id_Clien);
    	$client->delete();

    	return back();
    }
}
