<div class="form-group">

	{!! Form::label('id_Back', 'ID Backing') !!}
	{!! Form::text('id_Back', $back, ['class' => 'form-control'] ) !!}
	
</div>

<!--<div class="form-group">

	{!! Form::label('fechaE_DGB', 'Fecha de Entrada') !!}
	{!! Form::text('fechaE_DGB', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('horaE_DGB', 'Hora de entrada') !!}
	{!! Form::text('horaE_DGB', null, ['class' => 'form-control'] ) !!}
	
</div>-->

<div class="form-group">

	{!! Form::label('Npieza_DGB', 'Numero de pieza') !!}
	{!! Form::text('Npieza_DGB', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('color_DGB', 'Color') !!}
	{!! Form::text('color_DGB', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('loteProd_DGB', 'Lote de produccion') !!}
	{!! Form::text('loteProd_DGB', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('equipo_DGB', 'Equipo') !!}
	{!! Form::text('equipo_DGB', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('batch_DGB', 'Batch') !!}
	{!! Form::text('batch_DGB', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('loteUrdido_DGB', 'Lote de urdido') !!}
	{!! Form::text('loteUrdido_DGB', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('folioBond_DGB', 'Folio Bondeo') !!}
	{!! Form::text('folioBond_DGB', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('codProdTermin_DGB', 'Codigo de producto terminado') !!}
	{!! Form::text('codProdTermin_DGB', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('nombreOpera_DGB', 'Nombre Operador') !!}
	{!! Form::text('nombreOpera_DGB', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('comentarios_DGB', 'Comentarios') !!}
	{!! Form::text('comentarios_DGB', null, ['class' => 'form-control'] ) !!}
	
</div>





<div class="form-group">

	{!! Form::submit('GUARDAR', ['class' => 'btn btn-primary'] ) !!}
	
</div>