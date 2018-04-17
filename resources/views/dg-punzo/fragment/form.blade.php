<div class="form-group">

	{!! Form::label('id_Punzo', 'ID Punzonado') !!}
	{!! Form::select('id_Punzo', $punzo, ['class' => 'form-control'] ) !!}
	
</div>

<!--<div class="form-group">

	{!! Form::label('fechaE_DGP', 'Fecha de Entrada') !!}
	{!! Form::text('fechaE_DGP', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('horaE_DGP', 'Hora de entrada') !!}
	{!! Form::text('horaE_DGP', null, ['class' => 'form-control'] ) !!}
	
</div>-->

<div class="form-group">

	{!! Form::label('Npieza_DGP', 'Numero de pieza') !!}
	{!! Form::text('Npieza_DGP', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('color_DGP', 'Color') !!}
	{!! Form::text('color_DGP', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('loteProd_DGP', 'Lote de produccion') !!}
	{!! Form::text('loteProd_DGP', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('equipo_DGP', 'Equipo') !!}
	{!! Form::text('equipo_DGP', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('batch_DGP', 'Batch') !!}
	{!! Form::text('batch_DGP', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('loteUrdido_DGP', 'Lote de urdido') !!}
	{!! Form::text('loteUrdido_DGP', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('folioBond_DGP', 'Folio Bondeo') !!}
	{!! Form::text('folioBond_DGP', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('codProdTermin_DGP', 'Codigo de producto terminado') !!}
	{!! Form::text('codProdTermin_DGP', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('nombreOpera_DGP', 'Nombre Operador') !!}
	{!! Form::text('nombreOpera_DGP', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('comentarios_DGP', 'Comentarios') !!}
	{!! Form::text('comentarios_DGP', null, ['class' => 'form-control'] ) !!}
	
</div>





<div class="form-group">

	{!! Form::submit('GUARDAR', ['class' => 'btn btn-primary'] ) !!}
	
</div>