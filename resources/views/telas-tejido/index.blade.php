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
	<h2>"Control y Administracion de Telas TEJIDO"</h2>
</div>
	<center><div class="lin" style="width: 300px;"></div></center>


<div id="menu" style="float: left">
	<ul>
		<a class="aa" href="{{ url('/telastejidos') }}"><li><img src="option.png" style="width: 17px">&nbsp;&nbsp;Tejido</li></a>
		<a class="aa" href="{{ url('/telaslavados') }}"><li><img src="option.png" style="width: 17px">&nbsp;&nbsp;Lavado</li></a>
		<a class="aa" href="{{ url('/telastumblers') }}"><li><img src="option.png" style="width: 17px">&nbsp;&nbsp;Tumbler</li></a>
		<a class="aa" href="{{ url('/telasrepelentes') }}"><li><img src="option.png" style="width: 17px">&nbsp;&nbsp;Repelente</li></a>
	</ul>
						
</div>

<div id="no" class="datoss" style="background-color: #e6e6e6; float:left; width: 63% ">
			<center>
			<h4>Listado de todas las Telas de area Tejido y registro de nuevas telas al sistema.</h4><br>
			
			<a href=" {{ route('telastejidos.create') }}" type="submit" class="btn btn-default" 
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
	   	<a class="aa" href="{{ url('/telasbackings') }}"><li>Backing&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="option.png" style="width: 17px"></li></a>
		<a class="aa" href="{{ url('/telastermofijados') }}"><li>Termofijado&nbsp;&nbsp;<img src="option.png" style="width: 17px"></li></a>
		<a class="aa" href="{{ url('/telaspunzonados') }}"><li>Punzonado&nbsp;&nbsp;&nbsp;&nbsp;<img src="option.png" style="width: 17px"></li></a>
		<a class="aa" href="{{ url('/telasbondeos') }}"><li>Bondeo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="option.png" style="width: 17px"></li></a>
	</ul>
						
</div>

<h2 id="no">Listado de Telas Tejido</h2>

<!-- B  U  S  C  A  D  O  R              C  L  I  E  N  T  E  S      -->

<div id="no" class="datoss" style="background-color: #e6e6e6">
			<center>
			<h4>Ingresa algun dato de la tela, posteriormente se realizará la busqueda adecuada.</h4><br>
			<input type="text" class="form-control pull-right" style="width:20%" id="search" placeholder="Buscar tela...">
			<img src="buscar.png" style="width: 27px">
			</center>
</div>

<!-- E   N    D         B   U   S   C   A   D   O   R       -->
		
		@include('clientes.fragment.info')
		<div id="over" class="datoss" style="overflow: scroll; visibility: visible;">
		<a href="javascript:imprSelec('muestra')">Imprimir Tabla</a>

		<div class="lin"></div>
		<div class="lin2"></div><br>
<div id="muestra">

		<table id="mytable" class="table table-striped" border="1">
			<thead>
				<thead>
					<tr>
						<th rowspan="2">Cliente</th>
					    <th rowspan="2">Diseño</th>
					    <th rowspan="2">Color</th>
					    <th rowspan="2">OEM</th>
					    <th colspan="3">Metodo de prueba</th>
					    <th colspan="3">Unidad de Medida</th>	
					    <th colspan="3">Limite Superior</th>	
					    <th colspan="3">Limite Inferior</th>
					    
					    <th id="no" colspan="2"
					    	rowspan="2">&nbsp;</th>
					</tr>
					<tr>
						    
					    <th>Peso</th>
					    <th>Ancho util</th>
					    <th>Apariencia</th>
					    <th>Peso</th>
					    <th>Ancho util</th>
					    <th>Apariencia</th>
					    <th>Peso</th>
					    <th>Ancho util</th>
					    <th>Apariencia</th>
					    <th>Peso</th>
					    <th>Ancho util</th>
					    <th>Apariencia</th>
					</tr>
				</thead>
			</thead>
			<tbody>
				 @foreach($tejido as $tejid)
				 <tr>
				 	<td> {{ $tejid->nombreCliente }} </td>
				 	<td> {{ $tejid->Diseño_Tej }} </td>
				 	<td> {{ $tejid->color_Tej }} </td>
				 	<td> {{ $tejid->OEM_Tej }} </td>
				 	<td> {{ $tejid->MP_peso_Tej }} </td>
				 	<td> {{ $tejid->MP_anchoU_Tej }} </td>
				 	<td> {{ $tejid->MP_apari_Tej }} </td>
				 	<td> {{ $tejid->UM_peso_Tej }} </td>
				 	<td> {{ $tejid->UM_anchoU_Tej }} </td>
				 	<td> {{ $tejid->UM_apari_Tej }} </td>
				 	<td> {{ $tejid->LSE_peso_Tej }} </td>
				 	<td> {{ $tejid->LSE_anchoU_Tej }} </td>
				 	<td> {{ $tejid->LSE_apari_Tej }} </td>
				 	<td> {{ $tejid->LIE_peso_Tej }} </td>
				 	<td> {{ $tejid->LIE_anchoU_Tej }} </td>
				 	<td> {{ $tejid->LIE_apari_Tej }} </td>
				 	
</div> 	
	<div id="cada">
				 	<td id="no">
				 		

				 		<a  type="submit" class="btn btn-succes" href=" {{ route('telastejidos.edit', $tejid->id_Tej) }} "
											style="background: #009900; 
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
				 		<form action=" {{ route('telastejidos.destroy', $tejid->id_Tej) }} " method="POST" >
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
										<img src="eliminar.png" style="width: 17px">
									Borrar</button>
				 		</form>
				 	</td>
				 	
				 </tr>
				 @endforeach
			</tbody>
			</div>
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

<script type="text/javascript">
function imprSelec(muestra)
{
	var ficha=document.getElementById(muestra);
	var ventimp=window.open(' ','popimpr');
	ventimp.document.write(ficha.innerHTML);
	ventimp.document.close();
	ventimp.print();
	ventimp.close();


}
</script>
	

@endsection

