<div class="form-group">

	{!! Form::label('id_Tej', 'Diseño Tejido') !!}
	{!! Form::select('id_Tej', $tejido, ['class' => 'form-control'] ) !!} 
	
</div>

<!--<div class="form-group">

	{!! Form::label('fechaE_DG', 'Fecha de Entrada') !!}
	{!! Form::text('fechaE_DG', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('horaE_DG', 'Hora de entrada') !!}
	{!! Form::text('horaE_DG', null, ['class' => 'form-control'] ) !!}
	
</div>-->

<div class="form-group">

	{!! Form::label('Npieza_DG', 'Numero de pieza') !!}
	{!! Form::text('Npieza_DG', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('color_DG', 'Color') !!}
	{!! Form::text('color_DG', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('loteProd_DG', 'Lote de produccion') !!}
	{!! Form::text('loteProd_DG', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('equipo_DG', 'Equipo') !!}
	{!! Form::text('equipo_DG', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('batch_DG', 'Batch') !!}
	{!! Form::text('batch_DG', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('loteUrdido_DG', 'Lote de urdido') !!}
	{!! Form::text('loteUrdido_DG', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('folioBond_DG', 'Folio Bondeo') !!}
	{!! Form::text('folioBond_DG', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('codProdTermin_DG', 'Codigo de producto terminado') !!}
	{!! Form::text('codProdTermin_DG', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('nombreOpera_DG', 'Nombre Operador') !!}
	{!! Form::text('nombreOpera_DG', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('comentarios_DG', 'Comentarios') !!}
	{!! Form::text('comentarios_DG', null, ['class' => 'form-control'] ) !!}
	
</div>







<div class="form-group">

	{!! Form::submit('GUARDAR', ['class' => 'btn btn-primary'] ) !!}
	
</div>