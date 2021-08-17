<?php
	session_start();
?>
<!DOCTYPE html>
<html lang ="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Ingenieria y Tecnologia Medica</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<script src="https://kit.fontawesome.com/4fa90f9a36.js" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container-fluid">
			<img src="views/imagenes/ITM.jpeg" class="mx-auto d-block" style="width:100%">
			<!--<h1 class="text-center py-3"><span class="badge badge-primary">AUTOCLAVE CONTROLLER</span></h1>-->
		</div>
		<div class="container-fluid bg-light">
			<div class="container">
				<ul class="nav nav-justified py-2 nav-pills">
		<?php	if (isset($_GET["pagina"])): ?>		
					<?php if($_GET["pagina"]=="ingreso"): ?>
								<li class="nav-item">
								<a class="nav-link active" href="index.php?pagina=ingreso">Ingreso</a>
								</li>
					<?php else: ?>
								<li class="nav-item">
								<a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
								</li>
					<?php endif ?>
					<?php if($_GET["pagina"]=="inicio"): ?>
								<li class="nav-item">
								<a class="nav-link active" href="index.php?pagina=inicio">Monitoreo</a>
								</li>
					<?php else: ?>
								<li class="nav-item">
								<a class="nav-link" href="index.php?pagina=inicio">Monitoreo</a>
								</li>
					<?php endif ?>
					<?php if($_GET["pagina"]=="salir"): ?>
								<li class="nav-item">
								<a class="nav-link active" href="index.php?pagina=salir">Salir</a>
								</li>
					<?php else: ?>
								<li class="nav-item">
								<a class="nav-link" href="index.php?pagina=salir">Salir</a>
								</li>
					<?php endif ?>
		<?php else: ?>		
					<li class="nav-item">
					<a class="nav-link active" href="index.php?pagina=ingreso">Ingreso</a>
					</li>
				
					<li class="nav-item">
					<a class="nav-link" href="index.php?pagina=inicio">Monitoreo</a>
					</li>
				
					<li class="nav-item">
					<a class="nav-link" href="index.php?pagina=salir">Salir</a>
					</li>
		<?php endif ?>
				</ul>
			</div>
		</div>
		<div class="container-fluid">
			<div class="container py-5">
			<?php
				if(isset($_GET["pagina"]))
				{
					if($_GET["pagina"]=="ingreso"||
					   $_GET["pagina"]=="inicio"||
					   $_GET["pagina"]=="salir")
					   {
						   include "paginas/".$_GET["pagina"].".php";
					   }
					   else
					   {
						   include "paginas/error404.php";
					   }
				}
				else
				{
					include "paginas/ingreso.php";
				}
			?>	
			</div>
		</div>
	</body>
</html>
