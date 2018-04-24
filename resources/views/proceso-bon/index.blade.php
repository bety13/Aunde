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
	<h2> <b> "PROCESOS DE ÁREA BONDEO" <br> </b> <br> Control y Administracion de Datos </h2>
</div>
	<center><div class="lin" style="width: 300px;"></div></center>


<div id="menu" style="float: left">
	<ul>
		<a class="aa" href="{{ url('/procesotejidos') }}"><li><img src="option.png" style="width: 17px">&nbsp;&nbsp;Pro Tejido</li></a>
		<a class="aa" href="{{ url('/procesolavados') }}"><li><img src="option.png" style="width: 17px">&nbsp;&nbsp;Pro Lavado</li></a>
		<a class="aa" href="{{ url('/procesotumblers') }}"><li><img src="option.png" style="width: 17px">&nbsp;&nbsp;Pro Tumbler</li></a>
		<a class="aa" href="{{ url('/procesorepelentes') }}"><li><img src="option.png" style="width: 17px">&nbsp;&nbsp;Pro Repelente</li></a>
	</ul>
						
</div>

<div id="no" class="datoss" style="background-color: #e6e6e6; float:left; width: 63% ">
			<center>
			<h4>Listado de todos los Procesos Bondeo y registro de nuevos Procesos al sistema.</h4><br>
			
			<a href=" {{ route('procesobondeos.create') }}" type="submit" class="btn btn-default" 
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
	   	<a class="aa" href="{{ url('/procesobackings') }}"><li>Pro Backing&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="option.png" style="width: 17px"></li></a>
		<a class="aa" href="{{ url('/procesotermofijados') }}"><li>Pro Termofijado&nbsp;&nbsp;<img src="option.png" style="width: 17px"></li></a>
		<a class="aa" href="{{ url('/procesopunzonados') }}"><li>Pro Punzonado&nbsp;&nbsp;&nbsp;&nbsp;<img src="option.png" style="width: 17px"></li></a>
		<a class="aa" href="{{ url('/procesobondeos') }}"><li>Pro Bondeo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="option.png" style="width: 17px"></li></a>
	</ul>
						
</div>

<h2 id="no">Listado de Procesos Area Bondeo</h2> 

<!-- B  U  S  C  A  D  O  R              C  L  I  E  N  T  E  S      -->

<div id="no" class="datoss" style="background-color: #e6e6e6">
			<center>
			<h4>Ingresa algun dato de la evaluacion del proceso, posteriormente se realizará la busqueda adecuada.</h4><br>
			<input type="text" class="form-control pull-right" style="width:20%" id="search" placeholder="Buscar...">
			<img src="buscar.png" style="width: 27px">
			</center>

			<form>
				<input type="button" name="imprimir" value="Imprimir" onclick="window.print();">
			</form>
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

					    <th >ID Proceso</th>
					    <th >Peso 1</th>
					    <th >Peso 2</th>
					    <th >Peso 3</th>
					    <th >Peso Promedio</th>
					    <th >Espesor 1</th>	
					    <th>Espesor 2</th>
					    <th>Espesor 3</th>
					    <th>Espesor Promedio</th>
					    <th>Ancho Util</th>
					    <th>Adhesion WTU</th>
					    <th>Adhesion FTU</th>
					    <th>Adhesion WUS</th>
					    <th>Adhesion FUS</th>
					    <th>Elongacion W</th>
					    <th>Elongacion F</th>
					    <th>Distancia W </th>
					    <th>Tiempo W</th>
					    <th>Velocidad W</th>
						<th >Distancia F</th>
					    <th >Tiempo F </th>
					    <th >Velocidad F </th>
					    <th >Apariencia</th>	
					    <th >Tono</th>	
					    <th >Recuperacion W </th>
					    <th>Recuperacion F</th>
					    <th>Lectura de Color DL</th>
					    <th>Lectura de Color DA</th>
					    <th>Lectura de Color DB</th>
						<th >Disposicion</th>
					    <th >Fecha de Entrega</th>
					    <th >Hora de Entrega</th>
					    <th >Nombre del Analista</th>	
					    <th >Comentarios</th>	
					    <th id="no" >&nbsp;</th>
					</tr>
				</thead>
			</thead>
			<tbody>
				 @foreach($procesobond as $probon)
				 <tr>

				 	<td> {{ $probon->id_Procesos }} </td>
				 	<td> {{ $probon->peso1_PBondeo }} </td>
				 	<td> {{ $probon->peso2_PBondeo }} </td>
				 	<td> {{ $probon->peso3_PBondeo }} </td>
				 	<td> {{ $probon->pesoProm_PBondeo }} </td>
				 	<td> {{ $probon->espesor1_PBondeo }} </td>
				 	<td> {{ $probon->espesor2_PBondeo }} </td>
				 	<td> {{ $probon->espesor3_PBondeo }} </td>
				 	<td> {{ $probon->espesorProm_PBondeo }} </td>
				 	<td> {{ $probon->anchoUtil_PBondeo }} </td>
				 	<td> {{ $probon->adhesionWTU_PBondeo }} </td>
				 	<td> {{ $probon->adhesionFTU_PBondeo }} </td>
				 	<td> {{ $probon->adhesionWUS_PBondeo }} </td>
				 	<td> {{ $probon->adhesionFUS_PBondeo }} </td>
				 	<td> {{ $probon->elongacionW_PBondeo }} </td>
				 	<td> {{ $probon->elongacionF_PBondeo }} </td>
				 	<td> {{ $probon->distanciaW_PBondeo }} </td>
				 	<td> {{ $probon->tiempoW_PBondeo }} </td>
				 	<td> {{ $probon->velocidadW_PBondeo }} </td>
				 	<td> {{ $probon->distanciaF_PBondeo }} </td>
				 	<td> {{ $probon->tiempoF_PBondeo }} </td>
				 	<td> {{ $probon->velocidadF_PBondeo }} </td>
				 	<td> {{ $probon->apariencia_PBondeo }} </td>
				 	<td> {{ $probon->tono_PBondeo }} </td>
				 	<td> {{ $probon->recuperacionW_PBondeo }} </td>
				 	<td> {{ $probon->recuperacionF_PBondeo }} </td>
				 	<td> {{ $probon->lecColorDL_PBondeo }} </td>
				 	<td> {{ $probon->lecColorDA_PBondeo }} </td>
				 	<td> {{ $probon->lecColorDB_PBondeo }} </td>
				 	<td> {{ $probon->disposicion_PBondeo }} </td>
				 	<td> {{ $probon->fechaE_PBondeo }} </td>
				 	<td> {{ $probon->horaE_PBondeo }} </td>
				 	<td> {{ $probon->analista_PBondeo }} </td>
				 	<td> {{ $probon->comentario_PBondeo }} </td>

				 	
				 	
				 	<td id="no" >
				 		<a type="submit" class="btn btn-succes" href=" {{ route('procesobondeos.edit', $probon->id_PBondeo) }} " style="background: #009900; 
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
				 	<td id="no" >
				 		<form action=" {{ route('procesobondeos.destroy', $probon->id_PBondeo) }} " method="POST" >
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
		{!! $procesobond->render() !!}
	</div>


<!--    F   O  R  M         O  F          C  R  E  A  T  E      -->

<div id="registrar" class="datoss" style="background-color: #e6e6e6; float:left;"> 

		
<div style="background-color: white; width: 100%; height: 5px;"></div><br>
<h2>Registro de resultados de prueba de material de producción</h2>
<div class="lin"></div>
<div class="lin2"></div><br>

		<!--   T  A  B  L  E      O  F    D  A  T  E  S     T  E  L  A  S     -->

		<div class="datoss" style="overflow: scroll; visibility: visible;">

			<center>
			<table class="table table-striped" border="1" >
				<thead>
					<thead>
						<tr>
							<th colspan="19">CARACTERISTICAS DEL MATERIAL</th>
						</tr>
						<tr>
							<th rowspan="2">Prueba :</th>
							<th rowspan="2" >Peso</th>
							<th rowspan="2">Espesor</th>
							<th rowspan="2">Ancho Util</th>
							<th colspan="2">ELONGACION</th>
							<th colspan="6">Flamabilidad</th>
							<th rowspan="2">Aparencia</th>
							<th rowspan="2">Tono</th>
							<th colspan="3">Lectura de Color</th>
						</tr>
						<tr>
							
						    <th>Warp</th>	
						    <th>Fill</th>
						    <th>Distancia W</th>	
						    <th>Tiempo W</th>
						    <th>Velocidad W</th>	
						    <th>Distancia F</th>
						    <th>Tiempo F</th>	
						    <th>Velocidad F</th>
						    <th>DL</th>
						    <th>DA</th>
						    <th>DB</th>
						</tr>
						<tr>    
						    <th>Standard:</th>
						    <td colspan=""></td>
						    <td></td>
						    <td></td>
						    <td colspan="2"></td>
						    <td colspan="6"></td>
						    <td></td>
						    <td></td>
						    <td colspan="3"></td>
						</tr>
						<tr>    
						    <th>Unidad de medida:</th>
						    <td colspan=""></td>
						    <td></td>
						    <td></td>
						    <td colspan="2"></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td colspan="3"></td>
						</tr>
						<tr>    
						    <th>LSE:</th>
						    <td colspan=""></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						</tr>
						<tr>    
						    <th>LIE:</th>
						    <td colspan=""></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						</tr>
					</thead>
				</thead>
			</table>
			</center>
		</div>

		<!-- E  N  D      D  A  T  E  S     -->

{!! Form::open(['route' => 'procesobondeos.store']) !!}

<div style="background-color: ; width: 80%; margin-right:auto; margin-left: auto">
<div style="width: 35%; background-color: ; float: left;">

<label style="font-size: 16px; color: black; ">ID :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
{!! Form::text('id_Ramas', null, ['class' => 'form-control'] ) !!}<br><br>

<div style="background-color: white; height: 3px; width: 95%"></div><br>

<label style="font-size: 16px; color: black">Peso 1 :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="peso1_PBondeo" class="cantidad" placeholder="0"><br><br>

<label style="font-size: 16px; color: black">Peso 2 :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="peso2_PBondeo" class="cantidad" placeholder="0"><br><br>

<label style="font-size: 16px; color: black">Peso 3 :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="peso3_PBondeo" class="cantidad" placeholder="0"><br>
<br/>

<label style="font-size: 14.5px; color: black">Peso Promedio :</label>&nbsp;&nbsp;&nbsp;&nbsp;
<label name="pPromedio_PTermo" id="total_monto_fiscal" style="font-size: 16px; color: black"></label><br>

<label style="font-size: 14.5px; color: black; ">Confirmar Peso Promedio :</label>&nbsp;&nbsp;
<input type="text" name="pesoProm_PBondeo" style="width: 83px;"><br><br>

<div style="background-color: white; height: 3px; width: 95%"></div><br>

<label style="font-size: 16px; color: black">Espesor 1 :</label>&nbsp;&nbsp; &nbsp;
<input type="text" name="espesor1_PBondeo" class="espesor" placeholder="0"><br><br>

<label style="font-size: 16px; color: black">Espesor 2 :</label>&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="espesor2_PBondeo" class="espesor" placeholder="0"><br><br>

<label style="font-size: 16px; color: black">Espesor 3 :</label>&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="espesor3_PBondeo" class="espesor" placeholder="0"><br>
<br/>

<label style="font-size: 14.5px; color: black">Espesor Promedio :</label>&nbsp;&nbsp;&nbsp;&nbsp;
<label name="pPromedio_PTermo" id="espesor" style="font-size: 16px; color: black"></label><br>

<label style="font-size: 14px; color: black; ">Confirmar Espesor Promedio :</label>&nbsp;&nbsp;
<input type="text" name="espesorProm_PBondeo" style="width: 83px;"><br><br>

<div style="background-color: white; height: 3px; width: 95%"></div><br>

<label style="font-size: 16px; color: black; ">Ancho Util :</label>&nbsp;&nbsp;&nbsp;
	{!! Form::text('anchoUtil_PBondeo', null, ['class' => 'form-control'] ) !!}<br><br>

<label style="font-size: 15px; color: black; ">Croking seco :</label>
	{!! Form::text('adhesionWTU_PBondeo', null, ['class' => 'form-control'] ) !!}<br><br>

<div style="background-color: white; height: 3px; width: 95%"></div><br>

<label style="font-size: 14px; color: black; ">Adhesion FTU :</label>&nbsp;
	{!! Form::text('adhesionFTU_PBondeo', null, ['class' => 'form-control'] ) !!}<br><br>

<label style="font-size: 14px; color: black; ">Adhesion WUS :</label>
	{!! Form::text('adhesionWUS_PBondeo', null, ['class' => 'form-control'] ) !!}<br><br>

<label style="font-size: 14px; color: black; ">Adhesion FUS :</label>&nbsp;
	{!! Form::text('adhesionFUS_PBondeo', null, ['class' => 'form-control'] ) !!}<br><br>

<div style="background-color: white; height: 3px; width: 95%"></div><br>

<label style="font-size: 14.5px; color: black; ">Elongacion W :</label>
	{!! Form::text('elongacionW_PBondeo', null, ['class' => 'form-control'] ) !!}<br><br>

<label style="font-size: 14.5px; color: black; ">Elongacion F :</label>&nbsp;
	{!! Form::text('elongacionF_PBondeo', null, ['class' => 'form-control'] ) !!}<br><br>

<div style="background-color: white; height: 3px; width: 95%"></div><br>
	
</div>
<div style="width: 40%; background-color: ; float: right;">



<label style="font-size: 16px; color: black; ">Distancia W :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="distanciaW_PBondeo" class="flamaw" placeholder="0"><br><br>

<label style="font-size: 16px; color: black; ">Tiempo W :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="tiempoW_PBondeo" class="flamaw" placeholder="0"><br><br>

<label style="font-size: 16px; color: black">Velocidad W :</label>&nbsp;&nbsp;&nbsp;&nbsp;
<label name="velocidadW_PTermo" id="Velocidadw" style="font-size: 16px; color: black"></label><br>

<label style="font-size: 16px; color: black; ">Velocidad W :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="velocidadW_PBondeo" style="width: 83px;"><br><br>

<div style="background-color: white; height: 3px; width: 95%"></div><br>

<label style="font-size: 16px; color: black; ">Distancia F :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="distanciaF_PBondeo" class="flamaf" placeholder="0"><br><br>

<label style="font-size: 16px; color: black; ">Tiempo F :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="tiempoF_PBondeo" class="flamaf" placeholder="0"><br><br>

<label style="font-size: 16px; color: black">Velocidad F :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label name="" id="Velocidadf" style="font-size: 16px; color: black"></label><br>

<label style="font-size: 16px; color: black; ">Velocidad F :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="velocidadF_PBondeo" style="width: 83px;"><br><br>

<div style="background-color: white; height: 3px; width: 95%"></div><br>

<label style="font-size: 16px; color: black; ">Apariencia :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	{!! Form::text('apariencia_PBondeo', null, ['class' => 'form-control'] ) !!}<br><br>

<label style="font-size: 16px; color: black; ">Tono :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	{!! Form::text('tono_PBondeo', null, ['class' => 'form-control'] ) !!}<br><br>

<div style="background-color: white; height: 3px; width: 95%"></div><br>

<label style="font-size: 14.5px; color: black; ">Recuperacion W :</label>&nbsp;&nbsp;&nbsp;
	{!! Form::text('recuperacionW_PBondeo', null, ['class' => 'form-control'] ) !!}<br><br>

<label style="font-size: 14.5px; color: black; ">Recuperacion F :</label>&nbsp;&nbsp;&nbsp;&nbsp;
	{!! Form::text('recuperacionF_PBondeo', null, ['class' => 'form-control'] ) !!}<br><br>

<div style="background-color: white; height: 3px; width: 95%"></div><br>

<label style="font-size: 14.5px; color: black; ">L. de Color DL :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	{!! Form::text('lecColorDL_PBondeo', null, ['class' => 'form-control'] ) !!}<br><br>

<label style="font-size: 14.5px; color: black; ">L. de Color DA :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
{!! Form::text('lecColorDA_PBondeo', null, ['class' => 'form-control'] ) !!}<br><br>

<label style="font-size: 14.5px; color: black; ">L. de Color DB :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	{!! Form::text('lecColorDB_PBondeo', null, ['class' => 'form-control'] ) !!}<br><br>

<div style="background-color: white; height: 3px; width: 95%"></div><br>

<label style="font-size: 16px; color: black; ">Disposición :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<!--{!! Form::text('disposicion_PBondeo', null, ['class' => 'form-control'] ) !!}-->
	{!! Form::select('disposicion_PBondeo', ['' => 'Seleccionar', 'Liberado' => 'Liberado', 'Rechazado' => 'Rechazado', 'Segunda calidad' => 'Segunda Calidad'] , ['class' => 'form-control'] ) !!}<br><br>

<label style="font-size: 15px; color: black; ">Fecha de Entrega :</label>
	{!! Form::text('fechaE_PBondeo', null, ['class' => 'form-control'] ) !!}<br><br>

<label style="font-size: 15px; color: black; ">Hora de Entrega :</label>&nbsp;&nbsp;
	{!! Form::text('horaE_PBondeo', null, ['class' => 'form-control'] ) !!}<br><br>

<label style="font-size: 16px; color: black; ">Analista :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	{!! Form::text('analista_PBondeo', null, ['class' => 'form-control'] ) !!}<br><br>

<label style="font-size: 16px; color: black; ">Comentarios :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	{!! Form::text('comentario_PBondeo', null, ['class' => 'form-control'] ) !!}<br><br>

<div style="background-color: white; height: 3px; width: 95%"></div><br><br>



<!--     B    u     T      T      O      N    -->
		<div class="form-group">
			<button  
			type="submit" class="btn btn-default" 
			style="float: right; background: #0c2341; 
			  border: 0;
			  width: 250px;
			  padding: 10px;
			  height: 40px;
			  border-radius: 3px;
			  color: white;
			  cursor: pointer;
			  transition: background 0.3s ease-in-out;" 

			class="enviar">
				<i class="fa fa-plus"></i>Registrar resultados
				 <img src="register.png" style="width: 20px">
			</button>
		</div>
		</div>
	
</div>



{!! Form::close() !!}
<!--    E  N  D         F  O  R  M      C  R  E  A  T  E      -->


<!--    S  C  R  I  P  T            J Q  U  E  R  Y   -->
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
	 var total=0;
$(document).ready(function() {
    $('input.cantidad').blur(function() { calcular_total() });
    calcular_total();
});
function calcular_total() {
    total=0;
    $('input.cantidad').each(function() {
        var v=parseFloat($(this).val());
        if (isNaN(v)) {
            v=0;
            $(this).val(0);
        }
        total+=v/3;
    });
    $('label#total_monto_fiscal').html(total);
}

/*        ESPESOR         */
	var velo=0;
	$(document).ready(function() {
    $('input.espesor').blur(function() { calcular_espesor() });
    calcular_w();
});
function calcular_espesor() {
    velo=0;
    $('input.espesor').each(function() {
        var v=parseFloat($(this).val());
        if (isNaN(v)) {
            v=0;
            $(this).val(0);
        }
        velo+=v/3;
    });
    $('label#espesor').html(velo);
}
/*         ESPESOR           */


/*              W          */
	var velo=0;
	$(document).ready(function() {
    $('input.flamaw').blur(function() { calcular_w() });
    calcular_w();
});
function calcular_w() {
    velo=0;
    $('input.flamaw').each(function() {
        var v=parseFloat($(this).val());
        if (isNaN(v)) {
            v=0;
            $(this).val(0);
        }
        velo+=v/2;
    });
    $('label#Velocidadw').html(velo);
}
/*              W            */


/*              F          */
	var velof=0;
	$(document).ready(function() {
    $('input.flamaf').blur(function() { calcular_f() });
    calcular_f();
});
function calcular_f() {
    velof=0;
    $('input.flamaf').each(function() {
        var v=parseFloat($(this).val());
        if (isNaN(v)) {
            v=0;
            $(this).val(0);
        }
        velof+=v/2;
    });
    $('label#Velocidadf').html(velof);
}
/*              F            */

</script>

<style>
.Rotate-90
{
  -webkit-transform: rotate(-90deg);
  -moz-transform: rotate(-90deg);
  -ms-transform: rotate(-90deg);
  -o-transform: rotate(-90deg);
  transform: rotate(-90deg);
 
  -webkit-transform-origin: 50% 50%;
  -moz-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  -o-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
 
  
}
</style>

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

<!--  E  N  D           S  C  R  I  P  T            J Q  U  E  R  Y   -->
	
	

@endsection