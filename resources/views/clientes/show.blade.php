@extends('layouts.clientes')
@section('content')

	<div class="col-sm-8">
		<h2>
			{{ $client->nombreCliente }}
			<a href=" {{ route('clientes.edit', $client->id_Clien) }} " class="btn btn-primary pull-right">Editar</a>
		</h2>
		<p>
			{{ $client->direccionC }}
		</p>
		{!! $client->body !!}
	</div>
	<div class="col-sm-4">
		@include('clientes.fragment.aside')
	</div>

@endsection