Hi {{$name}},
<p>
	"SU REGISTRO FUE COMPLETADO EXITOSAMENTE"

	Por favor de clic en el siguiente link, Si el linck no aparece como liga favor de copiar y pegar en otra ventana para finalizar su proceso.
</p>

{{ route('confirmation', $token) }}