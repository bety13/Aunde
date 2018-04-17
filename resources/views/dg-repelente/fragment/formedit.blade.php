<div class="form-group">

	{!! Form::label('id_Rep', 'ID Repelente') !!}
	{!! Form::text('id_Rep', $repelente, ['class' => 'form-control'] ) !!}
	
</div>

<!--<div class="form-group">

	{!! Form::label('fechaE_DGR', 'Fecha de Entrada') !!}
	{!! Form::text('fechaE_DGR', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('horaE_DGR', 'Hora de entrada') !!}
	{!! Form::text('horaE_DGR', null, ['class' => 'form-control'] ) !!}
	
</div>-->

<div class="form-group">

	{!! Form::label('Npieza_DGR', 'Numero de pieza') !!}
	{!! Form::text('Npieza_DGR', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('color_DGR', 'Color') !!}
	{!! Form::text('color_DGR', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('loteProd_DGR', 'Lote de produccion') !!}
	{!! Form::text('loteProd_DGR', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('equipo_DGR', 'Equipo') !!}
	{!! Form::text('equipo_DGT', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('batch_DGR', 'Batch') !!}
	{!! Form::text('batch_DGR', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('loteUrdido_DGR', 'Lote de urdido') !!}
	{!! Form::text('loteUrdido_DGR', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('folioBond_DGR', 'Folio Bondeo') !!}
	{!! Form::text('folioBond_DGR', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('codProdTermin_DGR', 'Codigo de producto terminado') !!}
	{!! Form::text('codProdTermin_DGR', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('nombreOpera_DGR', 'Nombre Operador') !!}
	{!! Form::text('nombreOpera_DGR', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('comentarios_DGR', 'Comentarios') !!}
	{!! Form::text('comentarios_DGR', null, ['class' => 'form-control'] ) !!}
	
</div>





<div class="form-group">

	{!! Form::submit('GUARDAR', ['class' => 'btn btn-primary'] ) !!}
	
</div>