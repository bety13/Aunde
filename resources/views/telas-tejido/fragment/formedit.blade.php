<div class="form-group">

	{!! Form::label('id_Clien', 'Numero que pertence al Cliente') !!}
	{!! Form::text('id_Clien', $clien, ['class' => 'form-control', 'disabled' =>'disabled'] ) !!}

</div>

<div class="form-group">  

	{!! Form::label('Diseño_Tej', 'Diseño') !!}
	{!! Form::text('Diseño_Tej', null , ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('color_Tej', 'Color') !!}
	{!! Form::text('color_Tej', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('OEM_Tej', 'OEM') !!}
	{!! Form::text('OEM_Tej', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('MP_peso_Tej', 'MP Peso') !!}
	{!! Form::text('MP_peso_Tej', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('MP_anchoU_Tej', 'MP Ancho util') !!}
	{!! Form::text('MP_anchoU_Tej', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('MP_apari_Tej', 'MP Apariencia') !!}
	{!! Form::text('MP_apari_Tej', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('UM_peso_Tej', 'UM Peso') !!}
	{!! Form::text('UM_peso_Tej', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('UM_anchoU_Tej', 'UM Ancho Util') !!}
	{!! Form::text('UM_anchoU_Tej', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('UM_apari_Tej', 'UM Apariencia') !!}
	{!! Form::text('UM_apari_Tej', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('LSE_peso_Tej', 'LSE Peso') !!}
	{!! Form::text('LSE_peso_Tej', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('LSE_anchoU_Tej', 'LSE Ancho Util') !!}
	{!! Form::text('LSE_anchoU_Tej', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('LSE_apari_Tej', 'LSE Apariencia') !!}
	{!! Form::text('LSE_apari_Tej', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('LIE_peso_Tej', 'LIE Peso') !!}
	{!! Form::text('LIE_peso_Tej', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('LIE_anchoU_Tej', 'LIE Ancho Util') !!}
	{!! Form::text('LIE_anchoU_Tej', null, ['class' => 'form-control'] ) !!}
	
</div>

<div class="form-group">

	{!! Form::label('LIE_apari_Tej', 'LIE Apariencia') !!}
	{!! Form::text('LIE_apari_Tej', null, ['class' => 'form-control'] ) !!}
	
</div>



<div class="form-group">

	{!! Form::submit('GUARDAR', ['class' => 'btn btn-primary'] ) !!}
	
</div>