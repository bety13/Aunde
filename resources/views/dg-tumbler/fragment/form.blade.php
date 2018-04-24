<div class="form-group">

	{!! Form::label('id_Tum', 'Diseño tumbler') !!}
	{!! Form::select('id_Tum', $Tum, ['' => 'Seleccione un diseño..!', ], ['class' => 'form-control']) !!}
	
</div>

<div class="form-group">

	{!! Form::label('color_DGT', 'Confirme color de Diseño *') !!}
	{!! Form::text('color_DGT', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('id_Procesos', 'Tipo de Proceso') !!}
	{!! Form::select('id_Procesos', $proceso, ['' => 'Seleccione un proceso..!', ], ['class' => 'form-control']) !!}
	
</div>

<div class="form-group">

	{!! Form::label('Npieza_DGT', 'Numero de pieza') !!}
	{!! Form::text('Npieza_DGT', null, ['class' => 'form-control'] ) !!}
	
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