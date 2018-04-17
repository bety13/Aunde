
@extends('layouts.main')
@section('content')


<style type="text/css">
	th {
		color:#fff; background-color:#263359; font-size: 14px; padding:7px;
	}
	td {
		background-color:#a5b1d9;
		 border: 2px solid #E7EFE0;
	}
</style>


<div class="section-heading">
	<h2>"Control y Administracion de Clientes"</h2>
</div>
	<center><div class="lin" style="width: 300px;"></div></center>
	




<div class="datoss" style="background-color: #e6e6e6">
			<center>
			<h4>Listado de todos los clientes y registra nuevos clientes al sistema.</h4><br>
			
			<a href=" {{ route('clientes.create') }}" type="submit" class="btn btn-default" 
			style="background: #0c2341;
			  border: 0;
			  width: 200px;
			  padding: 5px;
			  height: 40px;
			  border-radius: 3px;
			  color: white;
			  cursor: pointer;
			  transition: background 0.3s ease-in-out;" 
			  class="enviar">
			  <img src="user.png" style="width: 30px">
			  &nbsp;&nbsp;&nbsp;&nbsp;Nuevo Cliente</a></center>
</div>



	<div class="col-sm-8">
		
	
		<center><div class="lin" style="width: 300px;"></div></center><br>
		@include('clientes.fragment.info')

		<table class="table table-striped" border="1" style="margin-left: auto;
  margin-right: auto;">
			<thead>
				<tr>
					<th width="20px">N.</th>
					<th>Numero de cliente</th>
					<th>Nombre del cliente</th>
					<th>Direccion</th>
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				 @foreach($cliente as $clien)
				 <tr>
				 	<td> {{ $clien->id_Clien }} </td>
				 	<td> {{ $clien->NumeroCliente }} </td>
				 	<td> {{ $clien->nombreCliente }} </td>
				 	<td> {{ $clien->direccionC }} </td>
				 	
				 	<td>
				 		<a href=" {{ route('clientes.edit', $clien->id_Clien) }} " type="submit" class="btn btn-succes" style="background: #009900; 
											  border: 0;
											  width: 100px;
											  padding: 10px;
											  height: 40px;
											  border-radius: 3px;
											  color: white;
											  cursor: pointer;
											  transition: background 0.3s ease-in-out;">
												<img src="pencil.png" style="width: 17px">Editar</a>
				 	</td>
				 	<!--<td>
				 		<form action=" {{ route('clientes.destroy', $clien->id_Clien) }} " method="POST" >
				 			{{ csrf_field() }}
				 			<input type="hidden" name="_method" value="DELETE">
				 			<button onclick="return confirm('¿Seguro que deseas Eliminar?')" type="submit" class="btn btn-danger" 
											style="background: #990000; 
											  border: 0;
											  width: 100px;
											  padding: 10px;
											  height: 40px;
											  border-radius: 3px;
											  color: white;
											  cursor: pointer;
											  transition: background 0.3s ease-in-out;">
												<img src="eliminar.png" style="width: 17px">Borrar</button>
				 		</form>
				 	</td>-->
				 </tr>
				 @endforeach
			</tbody>
		</table>
		{!! $cliente->render() !!}
	</div>

@endsection

@yield('here')