<div class="form-group">

	{!! Form::label('id_Bondeo', 'ID BONDEO') !!}
	{!! Form::text('id_Bondeo', $bondeo, ['class' => 'form-control'] ) !!}
	
</div>

<!--<div class="form-group">

	{!! Form::label('fechaE_DGBO', 'Fecha de Entrada') !!}
	{!! Form::text('fechaE_DGBO', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('horaE_DGBO', 'Hora de entrada') !!}
	{!! Form::text('horaE_DGBO', null, ['class' => 'form-control'] ) !!}
	
</div>-->

<div class="form-group">

	{!! Form::label('Npieza_DGBO', 'Numero de pieza') !!}
	{!! Form::text('Npieza_DGBO', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('color_DGBO', 'Color') !!}
	{!! Form::text('color_DGBO', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('loteProd_DGBO', 'Lote de produccion') !!}
	{!! Form::text('loteProd_DGBO', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('equipo_DGBO', 'Equipo') !!}
	{!! Form::text('equipo_DGBO', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('batch_DGBO', 'Batch') !!}
	{!! Form::text('batch_DGBO', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('loteUrdido_DGBO', 'Lote de urdido') !!}
	{!! Form::text('loteUrdido_DGBO', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('folioBond_DGBO', 'Folio Bondeo') !!}
	{!! Form::text('folioBond_DGBO', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('codProdTermin_DGBO', 'Codigo de producto terminado') !!}
	{!! Form::text('codProdTermin_DGBO', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('nombreOpera_DGBO', 'Nombre Operador') !!}
	{!! Form::text('nombreOpera_DGBO', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('comentarios_DGBO', 'Comentarios') !!}
	{!! Form::text('comentarios_DGBO', null, ['class' => 'form-control'] ) !!}
	
</div>





<div class="form-group">

	{!! Form::submit('GUARDAR', ['class' => 'btn btn-primary'] ) !!}
	
</div>