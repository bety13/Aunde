<div class="form-group">

	{!! Form::label('pOrilla_PTum', 'Peso Orilla') !!}
	{!! Form::text('pOrilla_PTum', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('pCentro_PTum', 'Peso Centro') !!}
	{!! Form::text('pCentro_PTum', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('ppOrilla_PTum', 'Peso Orilla') !!}
	{!! Form::text('ppOrilla_PTum', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('pPromedio_PTum', 'Peso Promedio') !!}
	{!! Form::text('pPromedio_PTum', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('anchoU_PTum', 'Ancho Util') !!}
	{!! Form::text('anchoU_PTum', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('eloncacionW_PTum', 'Elongacion W') !!}
	{!! Form::text('eloncacionW_PTum', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('eloncacionF_PTum', 'Elongacion F') !!}
	{!! Form::text('eloncacionF_PTum', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('apariencia_PTum', 'Apariencia') !!}
	{!! Form::text('apariencia_PTum', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('tono_PTum', 'Tono') !!}
	{!! Form::text('tono_PTum', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('disposicion_Ptum', 'Disposicion') !!}
	<!--{!! Form::text('disposicion_Ptum', null, ['class' => 'form-control'] ) !!}-->
	{!! Form::select('disposicion_Ptum', ['Liberado' => 'Liberado', 'Rechazado' => 'Rechazado', 'Segunda calidad' => 'Segunda Calidad'], $procesotum->disposicion_Ptum, ['class' => 'form-control']  ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('fechaE_PTum', 'Fecha de Entrega') !!}
	{!! Form::text('fechaE_PTum', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('horaE_PTum', 'Hora de entrada') !!}
	{!! Form::text('horaE_PTum', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('analista_PTum', 'Nombre del Analista') !!}
	{!! Form::text('analista_PTum', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('comentario_PTum', 'Comentarios') !!}
	{!! Form::text('comentario_PTum', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('id_Ramas', 'ID ') !!}
	{!! Form::text('id_Ramas', null, ['class' => 'form-control'] ) !!}
	
</div>



<div class="form-group">

	{!! Form::submit('GUARDAR', ['class' => 'btn btn-primary'] ) !!}
	
</div>