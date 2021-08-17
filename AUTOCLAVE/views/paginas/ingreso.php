<div class="d-flex justify-content-center">
	<form class="p-5 bg-light" method="post">
		<div class="form-group">
			<label for="nombre">Establecimiento de Salud:</label>
				<div class="input-group">				
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-clinic-medical"></i></span>
					</div>
						<input type="text" class="form-control" id="nombre" placeholder=" " name="ingresoES">
				</div>
		</div>
		<div class="form-group">
			<label for="nombre_equipo">Equipo:</label>
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-desktop"></i></span>
					</div>
						<input type="text" class="form-control" id="nombre_equipo" placeholder=" " name="ingresoEQ">
				</div>
		</div>		
		<div class="form-group">
			<label for="pwd">Contraseña:</label>					
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-key"></i></span>
					</div>	
						<input type="password" class="form-control" id="pwd" placeholder=" " name="ingresoContraseña">
				</div>
		</div>				
		<?php
			$ingreso=new ControladorFormularios();
			$ingreso-> ctrIngreso();			
		?>		
			<button type="submit" class="btn btn-primary">Ingresar</button>
	</form>
</div>
