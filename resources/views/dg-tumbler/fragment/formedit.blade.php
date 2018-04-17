<div class="form-group">

	{!! Form::label('id_Tum', 'ID tumbler') !!}
	{!! Form::text('id_Tum', $Tum, ['class' => 'form-control'] ) !!}
	
</div>

<!--<div class="form-group">

	{!! Form::label('fechaE_DGT', 'Fecha de Entrada') !!}
	{!! Form::text('fechaE_DGT', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('horaE_DGT', 'Hora de entrada') !!}
	{!! Form::text('horaE_DGT', null, ['class' => 'form-control'] ) !!}
	
</div>-->

<div class="form-group">

	{!! Form::label('Npieza_DGT', 'Numero de pieza') !!}
	{!! Form::text('Npieza_DGT', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('color_DGT', 'Color') !!}
	{!! Form::text('color_DGT', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('loteProd_DGT', 'Lote de produccion') !!}
	{!! Form::text('loteProd_DGT', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('equipo_DGT', 'Equipo') !!}
	{!! Form::text('equipo_DGT', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('batch_DGT', 'Batch') !!}
	{!! Form::text('batch_DGT', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('loteUrdido_DGT', 'Lote de urdido') !!}
	{!! Form::text('loteUrdido_DGT', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('folioBond_DGT', 'Folio Bondeo') !!}
	{!! Form::text('folioBond_DGT', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('codProdTermin_DGT', 'Codigo de producto terminado') !!}
	{!! Form::text('codProdTermin_DGT', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('nombreOpera_DGT', 'Nombre Operador') !!}
	{!! Form::text('nombreOpera_DGT', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('comentarios_DGT', 'Comentarios') !!}
	{!! Form::text('comentarios_DGT', null, ['class' => 'form-control'] ) !!}
	
</div>





<div class="form-group">

	{!! Form::submit('GUARDAR', ['class' => 'btn btn-primary'] ) !!}
	
</div>