<div class="form-group">

	{!! Form::label('id_Termo', 'ID Termofijado') !!}
	{!! Form::select('id_Termo', $termo, ['' => 'Seleccione un diseño..!', ], ['class' => 'form-control']) !!}
	
</div>

<div class="form-group">

	{!! Form::label('color_DGTE', 'Confirme color de Diseño *') !!}
	{!! Form::text('color_DGTE', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('id_Procesos', 'Tipo de Proceso') !!}
	{!! Form::select('id_Procesos', $proceso, ['' => 'Seleccione un proceso..!', ], ['class' => 'form-control']) !!}
	
</div>

<div class="form-group">

	{!! Form::label('Npieza_DGTE', 'Numero de pieza') !!}
	{!! Form::text('Npieza_DGTE', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('loteProd_DGTE', 'Lote de produccion') !!}
	{!! Form::text('loteProd_DGTE', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('equipo_DGTE', 'Equipo') !!}
	{!! Form::text('equipo_DGTE', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('batch_DGTE', 'Batch') !!}
	{!! Form::text('batch_DGTE', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('loteUrdido_DGTE', 'Lote de urdido') !!}
	{!! Form::text('loteUrdido_DGTE', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('folioBond_DGTE', 'Folio Bondeo') !!}
	{!! Form::text('folioBond_DGTE', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('codProdTermin_DGTE', 'Codigo de producto terminado') !!}
	{!! Form::text('codProdTermin_DGTE', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('nombreOpera_DGTE', 'Nombre Operador') !!}
	{!! Form::text('nombreOpera_DGTE', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('comentarios_DGTE', 'Comentarios') !!}
	{!! Form::text('comentarios_DGTE', null, ['class' => 'form-control'] ) !!}
	
</div>





<div class="form-group">

	{!! Form::submit('GUARDAR', ['class' => 'btn btn-primary'] ) !!}
	
</div>