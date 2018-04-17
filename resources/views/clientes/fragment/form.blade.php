<div style=" background-color:#cccccc  ;
  position: relative;
  width: 97%;
  padding: 15px;
  margin: 20px;
  float: left;">


		<div class="lin" style="height: 1px; background-color: white"></div>
		<div class="lin2" style="height: 1px; background-color: #e6e6e6"></div><br>
		<center><div style="background-color:; width: 50% ">
								
			<label style="font-size: 15px;" for="NumeroCliente">Numero de Cliente :</label>
			{!! Form::text('NumeroCliente', null, ['class' => 'form-control'] ) !!}


			<br>

			<label style="font-size: 15px;" for="nombreCliente">Nombre :</label>
	    	{!! Form::text('nombreCliente', null, ['class' => 'form-control'] ) !!}
			<br>

			<label style="font-size: 15px;" for="direccionC">Direccion de Cliente :</label>
			{!! Form::text('direccionC', null, ['class' => 'form-control'] ) !!}
			<br>
		</div></center>
		<div class="lin" style="height: 1px; background-color: white"></div>
		<div class="lin2" style="height: 1px; background-color: #e6e6e6"></div><br>



<!--     B    u     T      T      O      N    -->
		<div class="form-group">
			<button  onclick="return alert('EL CLIENTE SE AGREGO CORRECTAMENTE')"

			type="submit" class="btn btn-default" 
			style="float: right; background: #0c2341; 
			  border: 0;
			  width: 250px;
			  padding: 10px;
			  height: 40px;
			  border-radius: 3px;
			  color: white;
			  cursor: pointer;
			  transition: background 0.3s ease-in-out;" 

			class="enviar">
				<i class="fa fa-plus"></i>Registrar cliente
			</button>
		</div>

</div>

