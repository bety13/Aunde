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
	div#menu {
		width: 200px;
		margin-top: 50px;
	}
	div#menu ul {
		list-style: none;

	}
	div#menu ul li {
		margin-top: 6px;
		font-family: tahoma;
		font-size: 13px;
		background-color: #0c2341;
		width: 160px;
		padding-top: 6px;
		padding-bottom: 8px;
		border-radius: 0px 20px 20px 0px;
		padding-left: 15px;
		box-shadow: 5px 0px 10px #939393;
		-webkit-transition:padding-left 0.6s;
		color: white;
	}
	div#menu ul li {
		padding-left: 40px;
	}

	/*____________________________________*/
	div#menuu {
		width: 200px;
		margin-top: 50px;
	}
	div#menuu ul {
		list-style: none;

	}
	div#menuu ul li {
		margin-top: 6px;
		font-family: tahoma;
		font-size: 13px;
		background-color: #0c2341;
		width: 160px;
		padding-top: 6px;
		padding-bottom: 8px;
		border-radius: 20px 0px 0px 20px;
		padding-left: 15px;
		box-shadow: 5px 0px 10px #939393;
		-webkit-transition:padding-left 0.6s;
		color: white;
	}
	div#menuu ul li {
		padding-left: 40px;
	}


</style>

<div id="no" class="section-heading">
	<h2> <b> "DATOS GENERALES TUMBLER" <br> </b> <br> Control y Administracion de Datos </h2>
</div>
	<center><div class="lin" style="width: 300px;"></div></center>


<div id="menu" style="float: left">
	<ul>
		<a class="aa" href="{{ url('/dgtejidos') }}"><li><img src="option.png" style="width: 17px">&nbsp;&nbsp;DG Tejido</li></a>
		<a class="aa" href="{{ url('/dglavados') }}"><li><img src="option.png" style="width: 17px">&nbsp;&nbsp;DG Lavado</li></a>
		<a class="aa" href="{{ url('/dgtumblers') }}"><li><img src="option.png" style="width: 17px">&nbsp;&nbsp;DG Tumbler</li></a>
		<a class="aa" href="{{ url('/dgrepelentes') }}"><li><img src="option.png" style="width: 17px">&nbsp;&nbsp;DG Repelente</li></a>
	</ul>
						
</div>

<div id="no" class="datoss" style="background-color: #e6e6e6; float:left; width: 63% ">
			<center>
			<h4>Listado de todos los Datos Generales Tumbler y registro de nuevas datos al sistema.</h4><br>
			
			<a href=" {{ route('dgtumblers.create') }}" type="submit" class="btn btn-default" 
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
			  <img src="add.png" style="width: 30px">
			  &nbsp;&nbsp;&nbsp;&nbsp;Nuevo</a></center>
</div>

<div id="menuu" style="float: left">
	<ul>	
	   	<a class="aa" href="{{ url('/dgbackings') }}"><li>DG Backing&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="option.png" style="width: 17px"></li></a>
		<a class="aa" href="{{ url('/dgtermofijados') }}"><li>DG Termofijado&nbsp;&nbsp;<img src="option.png" style="width: 17px"></li></a>
		<a class="aa" href="{{ url('/dgpunzonados') }}"><li>DG Punzonado&nbsp;&nbsp;&nbsp;&nbsp;<img src="option.png" style="width: 17px"></li></a>
		<a class="aa" href="{{ url('/dgbondeos') }}"><li>DG Bondeo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="option.png" style="width: 17px"></li></a>
	</ul>
						
</div>
&nbsp;&nbsp;&nbsp;
<h2 id="no">Listado de Datos Generales Tumbler</h2>

<!-- B  U  S  C  A  D  O  R              C  L  I  E  N  T  E  S      -->

<div id="no" class="datoss" style="background-color: #e6e6e6">
			<center>
			<h4>Ingresa algun dato, posteriormente se realizará la busqueda adecuada.</h4><br>
			<input type="text" class="form-control pull-right" style="width:20%" id="search" placeholder="Buscar...">
			<img src="buscar.png" style="width: 27px">
			</center>
</div>

<!-- E   N    D         B   U   S   C   A   D   O   R       -->

		@include('clientes.fragment.info')
		<div class="datoss" style="overflow: scroll; visibility: visible;">

		<div class="lin"></div>
		<div class="lin2"></div><br>
		<table id="mytable" class="table table-hover table-striped">
		
			<thead>
				<thead>
					<tr>
						<th >Diseño Tumbler</th>
						<th>Proceso Asignado</th>
					    <th >Fecha y Hora de Entrada</th>
					    <!--<th >Hora de Entrada</th>-->
					    <th >Numero de pieza</th>
					    <th >Color</th>
					    <th >Lote de Produccion</th>	
					    <th >Equipo</th>	
					    <th >Batch</th>
						<th >Lote de Urdido</th>
					    <th >Folio Bondeo</th>
					    <th >Codigo de producto terinado </th>
					    <th >Nombre de Operador</th>	
					    <th >Comentarios</th>
					    <th colspan="2" id="no">&nbsp;</th>
					</tr>
				</thead>
			</thead>
			<tbody>
				 @foreach($dgtumb as $tumb)
				 <tr>
				 	<td> {{ $tumb->Diseño_Tum }} </td>
				 	<td>{{ $tumb->Proceso }}</td>
				 	<td style="font-size: 12px;"> {{ $tumb->updated_at }} </td>
				 	<!--<td> {{ $tumb->horaE_DGT }} </td>-->
				 	<td> {{ $tumb->Npieza_DGT }} </td>
				 	<td> {{ $tumb->color_DGT }} </td>
				 	<td> {{ $tumb->loteProd_DGT }} </td>
				 	<td> {{ $tumb->equipo_DGT }} </td>
				 	<td> {{ $tumb->batch_DGT }} </td>
				 	<td> {{ $tumb->loteUrdido_DGT }} </td>
				 	<td> {{ $tumb->folioBond_DGT }} </td>
				 	<td> {{ $tumb->codProdTermin_DGT }} </td>
				 	<td> {{ $tumb->nombreOpera_DGT }} </td>
				 	<td> {{ $tumb->comentarios_DGT }} </td>
				 	
				 	
				 	
				 	<td id="no">
				 		<a type="submit" class="btn btn-succes" href=" {{ route('dgtumblers.edit', $tumb->id_DGT) }} " style="background: #009900; 
											  border: 0;
											  width: 100px;
											  padding: 10px;
											  height: 40px;
											  border-radius: 3px;
											  color: white;
											  cursor: pointer;
											  transition: background 0.3s ease-in-out;">
												<img src="pencil.png" style="width: 17px">
												Editar 
											</a>
				 	</td>
				 	<td id="no">
				 		<form action=" {{ route('dgtumblers.destroy', $tumb->id_DGT) }} " method="POST" >
				 			{{ csrf_field() }}
				 			<input type="hidden" name="_method" value="DELETE">
				 			<button onclick="return confirm('¿Seguro que deseas Eliminar?')" type="submit" class="btn btn-danger" style="background: #990000; 
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
				 	</td>
				 </tr>
				 @endforeach
			</tbody>
		</table>
	</div>

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

@endsection