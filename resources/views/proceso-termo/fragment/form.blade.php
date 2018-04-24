<div class="form-group">

	{!! Form::label('pOrilla_PTermo', 'Peso Orilla') !!}
	{!! Form::text('pOrilla_PTermo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('pCentro_PTermo', 'Peso Centro') !!}
	{!! Form::text('pCentro_PTermo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('ppOrilla_PTermo', 'Peso Orilla') !!}
	{!! Form::text('ppOrilla_PTermo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('pPromedio_PTermo', 'Peso Promedio') !!}
	{!! Form::text('pPromedio_PTermo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('anchoU_PTermo', 'Ancho Util') !!}
	{!! Form::text('anchoU_PTermo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('elongacionW_PTermo', 'Elongacion W') !!}
	{!! Form::text('elongacionW_PTermo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('elongacionF_PTermo', 'Elongacion F') !!}
	{!! Form::text('elongacionF_PTermo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('espesor_PTermo', 'Espesor') !!}
	{!! Form::text('espesor_PTermo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('lecColorDL_PTermo', 'Lectura de Color DL') !!}
	{!! Form::text('lecColorDL_PTermo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('lecColorDA_PTermo', 'Lectura de Color DA') !!}
	{!! Form::text('lecColorDA_PTermo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('lecColorDB_PTermo', 'Lectura de Color DB') !!}
	{!! Form::text('lecColorDB_PTermo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('distanciaW_PTermo', 'Distancia W') !!}
	{!! Form::text('distanciaW_PTermo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('tiempoW_PTermo', 'Tiempo W') !!}
	{!! Form::text('tiempoW_PTermo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('velocidadW_PTermo', 'Velocidad W') !!}
	{!! Form::text('velocidadW_PTermo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('distanciaF_PTermo', 'Distancia F') !!}
	{!! Form::text('distanciaF_PTermo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('tiempoF_PTermo', 'Tiempo F ') !!}
	{!! Form::text('tiempoF_PTermo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('velocidadF_PTermo', 'Velocidad F ') !!}
	{!! Form::text('velocidadF_PTermo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('apariencia_PTermo', 'Apariencia ') !!}
	{!! Form::text('apariencia_PTermo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('tono_PTermo', 'Tono ') !!}
	{!! Form::text('tono_PTermo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('disposicion_Ptermo', 'Disposicion ') !!}
	<!--{!! Form::text('disposicion_Ptermo', null, ['class' => 'form-control'] ) !!}-->
	{!! Form::select('disposicion_Ptermo', ['Liberado' => 'Liberado', 'Rechazado' => 'Rechazado', 'Segunda calidad' => 'Segunda Calidad'], $procesoter->disposicion_Ptermo, ['class' => 'form-control']  ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('fechaE_PTermo', 'Fecha de entrega ') !!}
	{!! Form::text('fechaE_PTermo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('horaE_PTermo', 'Hora de entrega ') !!}
	{!! Form::text('horaE_PTermo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('analista_PTermo', 'analista ') !!}
	{!! Form::text('analista_PTermo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('comentario_PTermo', 'Comentario ') !!}
	{!! Form::text('comentario_PTermo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('id_Ramas', 'ID ') !!}
	{!! Form::text('id_Ramas', null, ['class' => 'form-control'] ) !!}
	
</div>


<div class="form-group">

	{!! Form::submit('GUARDAR', ['class' => 'btn btn-primary'] ) !!}
	
</div>