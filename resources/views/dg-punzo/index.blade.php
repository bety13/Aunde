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

<div class="section-heading">
	<h2> <b> "DATOS GENERALES PUNZONADO" <br> </b> <br> Control y Administracion de Datos </h2>
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

<div class="datoss" style="background-color: #e6e6e6; float:left; width: 63% ">
			<center>
			<h4>Listado de todos los Datos Generales Punzonado y registro de nuevas datos al sistema.</h4><br>
			
			<a href=" {{ route('dgpunzonados.create') }}" type="submit" class="btn btn-default" 
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

<h2>Listado de Datos Generales Punzonado</h2>

		@include('clientes.fragment.info')
		<div class="datoss" style="overflow: scroll; visibility: visible;">

		<div class="lin"></div>
		<div class="lin2"></div><br>
		<table class="table table-hover table-striped">
			<thead>
				<thead>
					<tr>
						<th >Diseño Punzonado</th>
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
					    
					    <th >&nbsp;</th>
					</tr>
				</thead>
			</thead>
			<tbody>
				 @foreach($dgpunzo as $pu)
				 <tr>
				 	<td> {{ $pu->Diseño_Punzo }} </td>
				 	<td style="font-size: 12px;"> {{ $pu->updated_at }} </td>
				 	<!--<td> {{ $pu->horaE_DGP }} </td>-->
				 	<td> {{ $pu->Npieza_DGP }} </td>
				 	<td> {{ $pu->color_DGP }} </td>
				 	<td> {{ $pu->loteProd_DGP }} </td>
				 	<td> {{ $pu->equipo_DGP }} </td>
				 	<td> {{ $pu->batch_DGP }} </td>
				 	<td> {{ $pu->loteUrdido_DGP }} </td>
				 	<td> {{ $pu->folioBond_DGP }} </td>
				 	<td> {{ $pu->codProdTermin_DGP }} </td>
				 	<td> {{ $pu->nombreOpera_DGP }} </td>
				 	<td> {{ $pu->comentarios_DGP }} </td>
				 	
				 	
				 	
				 	<td>
				 		<a type="submit" class="btn btn-succes" href=" {{ route('dgpunzonados.edit', $pu->id_DGP) }} " style="background: #009900; 
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
				 	<td>
				 		<form action=" {{ route('dgpunzonados.destroy', $pu->id_DGP) }} " method="POST" >
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
	

@endsection