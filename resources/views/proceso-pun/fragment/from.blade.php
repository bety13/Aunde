<div class="form-group">

	{!! Form::label('pOrilla_PPunzo', 'Peso Orilla') !!}
	{!! Form::text('pOrilla_PPunzo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('pCentro_PPunzo', 'Peso Centro') !!}
	{!! Form::text('pCentro_PPunzo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('ppOrilla_PPunzo', 'Peso Orilla') !!}
	{!! Form::text('ppOrilla_PPunzo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('pPromedio_PPunzo', 'Peso Promedio') !!}
	{!! Form::text('pPromedio_PPunzo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('anchoU_PPunzo', 'Ancho Util') !!}
	{!! Form::text('anchoU_PPunzo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('apariencia_PPunzo', 'Apariencia') !!}
	{!! Form::text('apariencia_PPunzo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('disposicion_PPunzo', 'Disposicion') !!}
	<!--{!! Form::text('disposicion_PPunzo', null, ['class' => 'form-control'] ) !!}-->
	{!! Form::select('disposicion_PPunzo', ['Liberado' => 'Liberado', 'Rechazado' => 'Rechazado', 'Segunda calidad' => 'Segunda Calidad'], $procesopun->disposicion_PPunzo, ['class' => 'form-control']  ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('fechaE_PPunzo', 'Fecha de entrega') !!}
	{!! Form::text('fechaE_PPunzo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('horaE_PPunzo', 'Hora de entrega') !!}
	{!! Form::text('horaE_PPunzo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('analista_PPunzo', 'Nombre del Analista') !!}
	{!! Form::text('analista_PPunzo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('comentario_PPunzo', 'Comengtarios') !!}
	{!! Form::text('comentario_PPunzo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('id_Ramas', 'ID Ramas') !!}
	{!! Form::text('id_Ramas', null, ['class' => 'form-control'] ) !!}
	
</div>



<div class="form-group">

	{!! Form::submit('GUARDAR', ['class' => 'btn btn-primary'] ) !!}
	
</div>