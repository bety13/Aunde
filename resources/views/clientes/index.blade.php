
@extends('layouts.main')
@section('content')
<!--{!! Html::style('assets/css/pdf.css') !!}-->

<style type="text/css">
	th {
		color:#fff; background-color:#263359; font-size: 14px; padding:7px;
	}
	td {
		background-color:#a5b1d9;
		 border: 2px solid #E7EFE0;
	}
</style>


<div id="no" class="section-heading">
	<h2>"Control y Administracion de Clientes"</h2>
</div>
	<center><div class="lin" style="width: 300px;"></div></center>
	




<div id="no" class="datoss" style="background-color: #e6e6e6">
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

<!-- B  U  S  C  A  D  O  R              C  L  I  E  N  T  E  S      -->

<div id="no" class="datoss" style="background-color: #e6e6e6">
			<center>
			<h4>Ingresa algun dato del cliente, posteriormente se realizará la busqueda adecuada.</h4><br>
			<input type="text" class="form-control pull-right" style="width:20%" id="search" placeholder="Buscar cliente...">
			<img src="buscar.png" style="width: 27px">
			</center>
</div>

<!-- E   N    D         B   U   S   C   A   D   O   R       -->


	<div class="col-sm-8">
		
	
		<center><div class="lin" style="width: 300px;"></div></center><br>
		@include('clientes.fragment.info')

		<table id="mytable" class="table table-striped" border="1" style="margin-left: auto;
  margin-right: auto;">
			<thead>
				<tr>
					<th width="20px">N.</th>
					<th>Numero de cliente</th>
					<th>Nombre del cliente</th>
					<th>Direccion</th>
					<th id="no" colspan="3">&nbsp;</th>
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
				 		<a id="no" href=" {{ route('clientes.edit', $clien->id_Clien) }} " type="submit" class="btn btn-succes" style="background: #009900; 
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



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
 // Write on keyup event of keyword input element
 $(document).ready(function(){
 $("#search").keyup(function(){
 _this = this;
 // Show only matching TR, hide rest of them
 $.each($("#mytable tbody tr"), function() {
 if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
 $(this).hide();
 else
 $(this).show();
 });
 });
});
</script>
	</div>

@endsection

@yield('here')