@extends('dg-repelente.fragment.interna')
@section('content')

<div class="section-heading">
	<h2 style="color: #0c2341;font-size: 25px;font-weight: 600;text-align: center;margin-bottom: 10px;" >
	EDITAR DATOS GENERALES REPELENTE</h2>
	</div>

	<center>
	<div style="background-color: #0c2341; height: 2.5px; width: 300px" ></div>
        <div style="background-color: #102e56; height: 2.5px; width: 300px" ></div>
	</center><br>
		<h2 style="color: #0c2341;font-size: 25px;font-weight: 600;text-align: center;margin-bottom: 10px;" >
			
			"Control y Administracion de Telas"
		</h2>
	<div class="datoss" style="background-color: #e6e6e6">
			<center><br>
			<h4 style="font-size: 19px;">Edita los datos generales verificando que todos sus datos sean correctos, posteriormente seran actualizados en el Sistema.</h4><br></center>
	</div>

		@include('clientes.fragment.error')

		{!! Form::model($dgrep, ['route' => ['dgrepelentes.update', $dgrep->id_DGR], 'method' => 'PUT']) !!}

			@include('dg-repelente.fragment.formedit')

		{!! Form::close() !!}
	</div>
	<div class="col-sm-4">
		
	</div>

@endsection