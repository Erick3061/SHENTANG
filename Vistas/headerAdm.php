<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link type="text/css" rel="stylesheet" href="CSS/materialize.min.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="CSS/jquery.dataTables.min.css"  media="screen,projection"/>
	<link rel="stylesheet" type="text/css" href="CSS/buttons.dataTables.min.css" media="screen,projection">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<script type="text/javascript" src="Librerias/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="Librerias/materialize.min.js"></script>
	<script type="text/javascript" src="Librerias/sweetalert.min.js"></script>
	<script type="text/javascript" src="Librerias/datatable/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="Librerias/datatable/dataTables.buttons.min.js"></script>
	<script type="text/javascript" src="Librerias/datatable/jszip.min.js"></script>
	<script type="text/javascript" src="Librerias/datatable/pdfmake.min.js"></script>
	<script type="text/javascript" src="Librerias/datatable/vfs_fonts.js"></script>
	<script type="text/javascript" src="Librerias/datatable/buttons.html5.min.js"></script>

	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	<nav class="light-green lighten-2">
		<div class="nav-wrapper container">
			<a href="admin.php" class="brand-logo">
				<img style="height: 55px;" class="responsive-img" src="Imagenes/LGP.png">
			</a>
			<a href="#" data-target="menu-side" class="sidenav-trigger">
				<i class="material-icons">menu</i>
			</a>
			<!--Menu desktop-->
			<ul class="right hide-on-med-and-down">
				<li id="ID_PA"><a href="Administrar_Productos.php">Productos</a></li>
				<li id="ID_SeA"><a href="Administrar_Servicios.php">Servicios</a></li>
				<li><a href="TalleresA.php">Talleres</a></li>
				<li><a href="TerapiasA.php">Terapias</a></li>
				<li>
					<a href="#" onclick="cerrar()">Cerrar sesion</a>
				</li>
				<li>
					<a href="#"><?php echo $_SESSION['user'] ?></a>
				</li>
			</ul>
			<!--Menu movil-->
			<ul class="sidenav" id="menu-side">
				<li>
					<div class="user-view">
						<div class="background">
							<img src="Imagenes/p2.jpg">
						</div>
						<a href="">
							<a href="index.php" class="col s12 hide-on-large-only"><img class="responsive-img" src="Imagenes/logop1.png"></a>
						</a>
					</div>
				</li>
				<!--Content-->
				<li id="ID_P1"><a href="ProductosA.php">Productos</a></li>
				<li><a href="serviciosA.php">Servicios</a></li>
				<li><a href="TalleresA.php">Talleres</a></li>
				<li><a href="TerapiasA.php">Terapias</a></li>
				<!-- CUANDO NO SE HA INICIADO SESION -->
			
			</ul>
		</div>
	</nav>


