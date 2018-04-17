<div class="form-group">

	{!! Form::label('pOrilla_PTej', 'Peso Orilla') !!}
	{!! Form::text('pOrilla_PTej', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('pCentro_PTej', 'Peso Centro') !!}
	{!! Form::text('pCentro_PTej', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('ppOrilla_PTej', 'Peso Orilla') !!}
	{!! Form::text('ppOrilla_PTej', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('promedio_PTej', 'Peso Promedio') !!}
	{!! Form::text('promedio_PTej', null, ['class' => 'form-control'] ) !!}
	
</div>


<div class="form-group">

	{!! Form::label('anchoU_PTej', 'Ancho Util') !!}
	{!! Form::text('anchoU_PTej', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('apariencia_PTej', 'Apariencia') !!}
	{!! Form::text('apariencia_PTej', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('disposicion_PTej', 'Disposicion') !!}
	<!--{!! Form::text('disposicion_PTej', null, ['class' => 'form-control'] ) !!}-->
	{!! Form::select('disposicion_PTej', ['' => 'Seleccionar', 'Liberado' => 'Liberado', 'Rechazado' => 'Rechazado', 'Segunda calidad' => 'Segunda Calidad'] , ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('fechaE_PTej', 'Fecha de entrega') !!}
	{!! Form::text('fechaE_PTej', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('horaE_PTej', 'Hora de entrega') !!}
	{!! Form::text('horaE_PTej', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('analista_PTej', 'Nombre del Analista') !!}
	{!! Form::text('analista_PTej', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('comentario_PTej', 'Comengtarios') !!}
	{!! Form::text('comentario_PTej', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('id_Procesos', 'ID Procesos') !!}
	{!! Form::text('id_Procesos', null, ['class' => 'form-control'] ) !!}
	
</div>



<div class="form-group">

	{!! Form::submit('GUARDAR', ['class' => 'btn btn-primary'] ) !!}
	
</div>