<div class="form-group">

	{!! Form::label('pOrilla_PBack', 'Peso Orilla') !!}
	{!! Form::text('pOrilla_PBack', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('pCentro_PBack', 'Peso Centro') !!}
	{!! Form::text('pCentro_PBack', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('ppOrilla_PBack', 'Peso Orilla') !!}
	{!! Form::text('ppOrilla_PBack', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('pPromedio_PBack', 'Peso Promedio') !!}
	{!! Form::text('pPromedio_PBack', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('anchoU_PBack', 'Ancho Util') !!}
	{!! Form::text('anchoU_PBack', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('elongacionW_PBack', 'Elongacion W') !!}
	{!! Form::text('elongacionW_PBack', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('elongacionF_PBack', 'Elongacion F') !!}
	{!! Form::text('elongacionF_PBack', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('repelente_PBack', 'Repelente') !!}
	{!! Form::text('repelente_PBack', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('velcro_PBack', 'Velcro') !!}
	{!! Form::text('velcro_PBack', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('croking_PBack', 'Croking Seco') !!}
	{!! Form::text('croking_PBack', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('distanciaW_PBack', 'Distancia W') !!}
	{!! Form::text('distanciaW_PBack', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('tiempoW_PBack', 'Tiempo W') !!}
	{!! Form::text('tiempoW_PBack', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('velocidadW_PBack', 'Velocidad W') !!}
	{!! Form::text('velocidadW_PBack', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('distanciaF_PBack', 'Distancia F') !!}
	{!! Form::text('distanciaF_PBack', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('tiempoF_PBack', 'Tiempo F ') !!}
	{!! Form::text('tiempoF_PBack', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('velocidadF_PBack', 'Velocidad F ') !!}
	{!! Form::text('velocidadF_PBack', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('apariencia_PBack', 'Apariencia ') !!}
	{!! Form::text('apariencia_PBack', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('tono_PBack', 'Tono ') !!}
	{!! Form::text('tono_PBack', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('disposicion_PBack', 'Disposicion ') !!}
	<!--{!! Form::text('disposicion_PBack', null, ['class' => 'form-control'] ) !!}-->
	{!! Form::select('disposicion_PBack', ['' => 'Seleccionar', 'Liberado' => 'Liberado', 'Rechazado' => 'Rechazado', 'Segunda calidad' => 'Segunda Calidad'] , ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('fechaE_PBack', 'Fecha de entrega ') !!}
	{!! Form::text('fechaE_PBack', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('horaE_PBack', 'Hora de entrega ') !!}
	{!! Form::text('horaE_PBack', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('analista_PBack', 'analista ') !!}
	{!! Form::text('analista_PBack', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('comentario_PBack', 'Comentario ') !!}
	{!! Form::text('comentario_PBack', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('id_Ramas', 'ID ') !!}
	{!! Form::text('id_Ramas', null, ['class' => 'form-control'] ) !!}
	
</div>


<div class="form-group">

	{!! Form::submit('GUARDAR', ['class' => 'btn btn-primary'] ) !!}
	
</div>