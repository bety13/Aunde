<div class="form-group">

	{!! Form::label('pOrilla_PLav', 'Peso Orilla') !!}
	{!! Form::text('pOrilla_PLav', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('pCentro_PLav', 'Peso Centro') !!}
	{!! Form::text('pCentro_PLav', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('ppOrilla_PLav', 'Peso Orilla') !!}
	{!! Form::text('ppOrilla_PLav', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('promedio_PLav', 'Peso Promedio') !!}
	{!! Form::text('promedio_PLav', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('anchoU_PLav', 'Ancho Util') !!}
	{!! Form::text('anchoU_PLav', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('apariencia_PLav', 'Apariencia') !!}
	{!! Form::text('apariencia_PLav', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('disposicion_PLav', 'Disposicion') !!}
	<!--{!! Form::text('disposicion_PLav', null, ['class' => 'form-control'] ) !!}-->
	{!! Form::select('disposicion_PLav', ['' => 'Seleccionar', 'Liberado' => 'Liberado', 'Rechazado' => 'Rechazado', 'Segunda calidad' => 'Segunda Calidad'] , ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('fechaE_PLav', 'Fecha de entrega') !!}
	{!! Form::text('fechaE_PLav', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('horaE_PLav', 'Hora de entrega') !!}
	{!! Form::text('horaE_PLav', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('analista_PLav', 'Nombre del Analista') !!}
	{!! Form::text('analista_PLav', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('comentario_PLav', 'Comengtarios') !!}
	{!! Form::text('comentario_PLav', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('id_Ramas', 'ID Ramas') !!}
	{!! Form::text('id_Ramas', null, ['class' => 'form-control'] ) !!}
	
</div>



<div class="form-group">

	{!! Form::submit('GUARDAR', ['class' => 'btn btn-primary'] ) !!}
	
</div>