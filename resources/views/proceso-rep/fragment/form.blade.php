<div class="form-group">

	{!! Form::label('pOrilla_PRep', 'Peso Orilla') !!}
	{!! Form::text('pOrilla_PRep', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('pCentro_PRep', 'Peso Centro') !!}
	{!! Form::text('pCentro_PRep', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('ppOrilla_PRep', 'Peso Orilla') !!}
	{!! Form::text('ppOrilla_PRep', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('pPromedio_PRep', 'Peso Promedio') !!}
	{!! Form::text('pPromedio_PRep', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('anchoU_PRep', 'Ancho Util') !!}
	{!! Form::text('anchoU_PRep', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('elongacionW_PRep', 'Elongacion W') !!}
	{!! Form::text('elongacionW_PRep', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('elongacionF_PRep', 'Elongacion F') !!}
	{!! Form::text('elongacionF_PRep', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('repelente_PRep', 'Repelente') !!}
	{!! Form::text('repelente_PRep', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('velcro_PRep', 'Velcro') !!}
	{!! Form::text('velcro_PRep', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('croking_PRep', 'Croking Seco') !!}
	{!! Form::text('croking_PRep', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('distanciaW_PRep', 'Distancia W') !!}
	{!! Form::text('distanciaW_PRep', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('tiempoW_PRep', 'Tiempo W') !!}
	{!! Form::text('tiempoW_PRep', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('velocidadW_PRep', 'Velocidad W') !!}
	{!! Form::text('velocidadW_PRep', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('distanciaF_PRep', 'Distancia F') !!}
	{!! Form::text('distanciaF_PRep', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('tiempoF_PRep', 'Tiempo F ') !!}
	{!! Form::text('tiempoF_PRep', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('velocidadF_PRep', 'Velocidad F ') !!}
	{!! Form::text('velocidadF_PRep', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('apariencia_PRep', 'Apariencia ') !!}
	{!! Form::text('apariencia_PRep', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('tono_PRep', 'Tono ') !!}
	{!! Form::text('tono_PRep', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('disposicion_PRep', 'Disposicion ') !!}
	<!--{!! Form::text('disposicion_PRep', null, ['class' => 'form-control'] ) !!}-->
	{!! Form::select('disposicion_PRep', ['Liberado' => 'Liberado', 'Rechazado' => 'Rechazado', 'Segunda calidad' => 'Segunda Calidad'], $procesorep->disposicion_PRep, ['class' => 'form-control']  ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('fechaE_PRep', 'Fecha de entrega ') !!}
	{!! Form::text('fechaE_PRep', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('horaE_PRep', 'Hora de entrega ') !!}
	{!! Form::text('horaE_PRep', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('analista_PRep', 'analista ') !!}
	{!! Form::text('analista_PRep', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('comentario_PRep', 'Comentario ') !!}
	{!! Form::text('comentario_PRep', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('id_Ramas', 'ID ') !!}
	{!! Form::text('id_Ramas', null, ['class' => 'form-control'] ) !!}
	
</div>


<div class="form-group">

	{!! Form::submit('GUARDAR', ['class' => 'btn btn-primary'] ) !!}
	
</div>