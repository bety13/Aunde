<div class="form-group">

	{!! Form::label('id_Bondeo', 'Diseño Bondeo') !!}
	{!! Form::select('id_Bondeo', $bondeo, ['' => 'Seleccione un diseño..!', ], ['class' => 'form-control']) !!}
	
</div>

<div class="form-group">

	{!! Form::label('color_DGBO', 'Confirme color de Diseño *') !!}
	{!! Form::text('color_DGBO', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('id_Procesos', 'Tipo de Proceso') !!}
	{!! Form::select('id_Procesos', $proceso, ['' => 'Seleccione un proceso..!', ], ['class' => 'form-control']) !!}
	
</div>

<div class="form-group">

	{!! Form::label('Npieza_DGBO', 'Numero de pieza') !!}
	{!! Form::text('Npieza_DGBO', null, ['class' => 'form-control'] ) !!}
	
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