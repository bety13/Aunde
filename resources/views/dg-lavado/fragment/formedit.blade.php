<div class="form-group">

	{!! Form::label('id_Lav', 'ID Lavado') !!}
	{!! Form::text('id_Lav', $lavado, ['class' => 'form-control'] ) !!}
	
</div>

<!--<div class="form-group">

	{!! Form::label('fechaE_DGL', 'Fecha de Entrada') !!}
	{!! Form::text('fechaE_DGL', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('horaE_DGL', 'Hora de entrada') !!}
	{!! Form::text('horaE_DGL', null, ['class' => 'form-control'] ) !!}
	
</div>-->

<div class="form-group">

	{!! Form::label('Npieza_DGL', 'Numero de pieza') !!}
	{!! Form::text('Npieza_DGL', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('color_DGL', 'Color') !!}
	{!! Form::text('color_DGL', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('loteProd_DGL', 'Lote de produccion') !!}
	{!! Form::text('loteProd_DGL', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('equipo_DGL', 'Equipo') !!}
	{!! Form::text('equipo_DGL', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('batch_DGL', 'Batch') !!}
	{!! Form::text('batch_DGL', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('loteUrdido_DGL', 'Lote de urdido') !!}
	{!! Form::text('loteUrdido_DGL', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('folioBond_DGL', 'Folio Bondeo') !!}
	{!! Form::text('folioBond_DGL', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('codProdTermin_DGL', 'Codigo de producto terminado') !!}
	{!! Form::text('codProdTermin_DGL', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('nombreOpera_DGL', 'Nombre Operador') !!}
	{!! Form::text('nombreOpera_DGL', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('comentarios_DGL', 'Comentarios') !!}
	{!! Form::text('comentarios_DGL', null, ['class' => 'form-control'] ) !!}
	
</div>





<div class="form-group">

	{!! Form::submit('GUARDAR', ['class' => 'btn btn-primary'] ) !!}
	
</div>
