<?php
	class ControladorFormularios
	{
		static public function ctrSeleccionarRegistros($item, $valor)
		{
			$tabla="registros";
			$respuesta=ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);
			return $respuesta;
		}
		public function ctrIngreso()
		{
			if (isset($_POST["ingresoES"]))
			{
				$tabla="registros";
				$item="CENTRO";
				$valor=$_POST["ingresoES"];
				$respuesta=ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);	
				$TOKEN=$respuesta["TOKEN"];
				$compararToken=md5($_POST["ingresoES"]+$_POST["ingresoEQ"]+$_POST["ingresoContraseña"]);
				
				if ($TOKEN==$compararToken)
				#if ($respuesta["CENTRO"]==$_POST["ingresoES"]&&$respuesta["EQUIPO"]==$_POST["ingresoEQ"]&&$respuesta["PASSWORD"]==$_POST["ingresoContraseña"])
				{
					$_SESSION["validarIngreso"]="ok";	
					$ID=$respuesta["ID"];
					$TOKEN=$respuesta["TOKEN"];
					echo '<script>
					if (window.history.replaceState)
					{
						window.history.replaceState(null, null, window.location.href);
					}
				
					window.location=("index.php?pagina=inicio&token='.$TOKEN.'");
					</script>';
					
					#echo '<pre>'; print_r($compararToken); echo '</pre>';
					#echo '<pre>'; print_r($TOKEN); echo '</pre>';
				}
				else
				{
					echo '<script>
					if (window.history.replaceState)
					{
						window.history.replaceState(null, null, window.location.href);
					}
					</script>';
					echo '<div class="alert alert-danger">Error al ingresar</div>';
				}
			}
		}
	}


