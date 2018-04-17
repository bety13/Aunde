<div class="form-group">

	{!! Form::label('id_Clien', 'ID Cliente') !!}
	{!! Form::select('id_Clien', $clien, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('Diseño_Lav', 'Diseño') !!}
	{!! Form::text('Diseño_Lav', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('color_Lav', 'Color') !!} 
	{!! Form::text('color_Lav', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('OEM_Lav', 'OEM') !!}
	{!! Form::text('OEM_Lav', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('MP_peso_Lav', 'MP Peso') !!}
	{!! Form::text('MP_peso_Lav', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('MP_anchoU_Lav', 'MP Ancho util') !!}
	{!! Form::text('MP_anchoU_Lav', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('MP_apari_Lav', 'MP Apariencia') !!}
	{!! Form::text('MP_apari_Lav', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('UM_peso_Lav', 'UM Peso') !!}
	{!! Form::text('UM_peso_Lav', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('UM_anchoU_Lav', 'UM Ancho Util') !!}
	{!! Form::text('UM_anchoU_Lav', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('UM_apari_Lav', 'UM Apariencia') !!}
	{!! Form::text('UM_apari_Lav', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('LSE_peso_Lav', 'LSE Peso') !!}
	{!! Form::text('LSE_peso_Lav', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('LSE_anchoU_Lav', 'LSE Ancho Util') !!}
	{!! Form::text('LSE_anchoU_Lav', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('LSE_apari_Lav', 'LSE Apariencia') !!}
	{!! Form::text('LSE_apari_Lav', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('LIE_peso_Lav', 'LIE Peso') !!}
	{!! Form::text('LIE_peso_Lav', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('LIE_anchoU_Lav', 'LIE Ancho Util') !!}
	{!! Form::text('LIE_anchoU_Lav', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('LIE_apari_Lav', 'LIE Apariencia') !!}
	{!! Form::text('LIE_apari_Lav', null, ['class' => 'form-control'] ) !!}
	
</div>



<div class="form-group">

	{!! Form::submit('GUARDAR', ['class' => 'btn btn-primary'] ) !!}
	
</div>