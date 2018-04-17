<div class="form-group">

	{!! Form::label('id_Clien', 'ID Cliente') !!}
	{!! Form::select('id_Clien', $clien, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('Diseño_Punzo', 'Diseño') !!}
	{!! Form::text('Diseño_Punzo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('color_Punzo', 'Color') !!}
	{!! Form::text('color_Punzo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('OEM_Punzo', 'OEM') !!}
	{!! Form::text('OEM_Punzo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('MP_peso_Punzo', 'MP Peso') !!}
	{!! Form::text('MP_peso_Punzo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('MP_anchoU_Punzo', 'MP Ancho util') !!}
	{!! Form::text('MP_anchoU_Punzo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('MP_apari_Punzo', 'MP Apariencia') !!}
	{!! Form::text('MP_apari_Punzo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('UM_peso_Punzo', 'UM Peso') !!}
	{!! Form::text('UM_peso_Punzo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('UM_anchoU_Punzo', 'UM Ancho Util') !!}
	{!! Form::text('UM_anchoU_Punzo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('UM_apari_Punzo', 'UM Apariencia') !!}
	{!! Form::text('UM_apari_Punzo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('LSE_peso_Punzo', 'LSE Peso') !!}
	{!! Form::text('LSE_peso_Punzo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('LSE_anchoU_Punzo', 'LSE Ancho Util') !!}
	{!! Form::text('LSE_anchoU_Punzo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('LSE_apari_Punzo', 'LSE Apariencia') !!}
	{!! Form::text('LSE_apari_Punzo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('LIE_peso_Punzo', 'LIE Peso') !!}
	{!! Form::text('LIE_peso_Punzo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('LIE_anchoU_Punzo', 'LIE Ancho Util') !!}
	{!! Form::text('LIE_anchoU_Punzo', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('LIE_apari_Punzo', 'LIE Apariencia') !!}
	{!! Form::text('LIE_apari_Punzo', null, ['class' => 'form-control'] ) !!}
	
</div>



<div class="form-group">

	{!! Form::submit('GUARDAR', ['class' => 'btn btn-primary'] ) !!}
	
</div>