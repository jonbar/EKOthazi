<html>

<head>
<title>Ekothazi</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" href="../../css/productos.css">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<header>
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div background-color="green" class="navbar-header">
						<img src="../../img/logo largo.png" style="height: 150px;">
					</div>
					<div class="container-fluid">

						<ul class="nav navbar-nav navbar-right">
							<li>
								<button type="button" class="btn btn-link" data-toggle="modal"
									data-target="#myModal">
									<span class="glyphicon glyphicon-log-in"></span> Iniciar sesion
								</button>
							</li>
						</ul>
						<ul class="nav navbar-nav navbar-right" style="margin-top: 75px;">
							<li><a href="../inicio/inicio.php">INICIO</a></li>
							<li class="dropdown"><a class="dropdown-toggle"
								data-toggle="dropdown" href="#">QUIENES SOMOS <span
									class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Donde encontrarnos</a></li>
									<li><a href="#">Nuestros proyectos</a></li>
									<li><a href="#">Politica de empresa</a></li>
									<li><a href="#">Equipo humano</a></li>
								</ul></li>
							<li><a href="#">NOTICIAS</a></li>
							<li class="active"><a href="#">PRODUCTOS</a></li>
						</ul>
					</div>
					<div class="modal fade" id="myModal" role="dialog">
						<div class="modal-dialog">

							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Inicio de sesion</h4>
								</div>
								<div class="modal-body">
									<form>
										<div class="form-group">
											<label for="email">Direccion de correo electronico:</label> <input
												type="email" class="form-control" id="email">
										</div>
										<div class="form-group">
											<label for="pwd">Contrase�a:</label> <input type="password"
												class="form-control" id="pwd">
										</div>
										<div class="checkbox">
											<label><input type="checkbox"> Recordarme en esta pagina</label>
										</div>
										<button type="submit" class="btn btn-default">Enviar</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<div class="container">
	<div class="imagenMantenimiento">
		<img src="../../img/maintenanceicon.png" alt="" />

		<h1 class="h1Mantenimiento">Oops!</h1>
		<p class="textoMantenimiento">La p�gina no est� disponible por
			mantenimiento.</p>
		<p class="textoMantenimiento">Volvemos en breve!</p>
	</div>
	</div>
</body>
</html>