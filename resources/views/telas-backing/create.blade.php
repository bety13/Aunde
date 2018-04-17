@extends('telas-backing.fragment.interna')
@section('content')

<div class="section-heading">
	<h2 style="color: #0c2341;font-size: 25px;font-weight: 600;text-align: center;margin-bottom: 10px;" >
	NUEVA TELA ACABADO BACKING</h2>
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
			<h4 style="font-size: 19px;">Registra una Tela nueva al sistema verificando que todos sus datos sean correctos.</h4><br></center>
	</div>

		@include('clientes.fragment.error')

		{!! Form::open(['route' => 'telasbackings.store']) !!}

			@include('telas-backing.fragment.form')

		{!! Form::close() !!}


@endsection