<?php
	if (!isset($_SESSION["validarIngreso"]))
	{
		echo '<script>window.location="index.php?pagina=ingreso";</script>';
		return;
	}
	else
	{
		if ($_SESSION["validarIngreso"]!="ok")
		{
			echo '<script>window.location="index.php?pagina=ingreso";</script>';
			return;
		}
	}
	#echo '<pre>'; print_r($ID); echo '</pre>';
	#$usuarios=ControladorFormularios::ctrSeleccionarRegistros(null, null);
	if (isset($_GET["token"]))
	{
			$item="TOKEN";
			$valor=$_GET["token"];		
		
			$usuario=ControladorFormularios::ctrSeleccionarRegistros($item, $valor);
			#echo '<pre>'; print_r($usuario); echo '</pre>';
			$actualizar=$usuario["TOKEN"];
			$tempBar=($usuario["TEMPERATURA"]*100)/1023;
			$presBar=($usuario["PRESION"]*100)/1023;
			
			
			echo '<script>
			
			if (window.history.replaceState)
					{
						window.history.replaceState(null, null, window.location.href);
					}
			
			setInterval(function(){window.location=("index.php?pagina=inicio&token='.$actualizar.'");},3000);			
			</script>';
	}
?>
<body>
<div class="container">
	
	<p class="text-primary text-center">TEMPERATURA C</p></p>
	<h3> <span class="badge badge-primary"><?php echo $usuario["TEMPERATURA"];?></span></h3>
		<div class="progress">
			<div class="progress-bar progress-bar-striped progress-bar-animated" style="width:<?php echo $tempBar;?>%"></div>
		</div>
</div>
<div class="container py-5">
	<p class="text-primary text-center">PRESION Bar</p></p>
	<h3> <span class="badge badge-primary"><?php echo $usuario["PRESION"];?></span></h3>
		<div class="progress">
			<div class="progress-bar progress-bar-striped progress-bar-animated" style="width:<?php echo $presBar;?>%"></div>
		</div>
</div>
</body>
