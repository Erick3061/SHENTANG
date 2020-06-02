<?php
$adentro=false;
session_start();
$error=0;
$err=0;
if(!isset($_SESSION["user"])){
	$adentro=false;
}else{
	$adentro=true;
}
if (isset($_GET['erno']) && $adentro==false) {
	$error=$_GET['erno'];
}
if (isset($_GET['erno2']) && $adentro==false) {
	$err=$_GET['erno2'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	<nav class="green">
		<div class="nav-wrapper container">
			<a href="index.php" class="brand-logo">
				<img style="height: 55px;" class="responsive-img" src="Imagenes/LGP.png">
			</a>
			
			<a href="#" data-target="menu-side" class="sidenav-trigger">
				<i class="material-icons">menu</i>
			</a>
			<!--Menu desktop-->
			<ul class="right hide-on-med-and-down">
				<li id="ID_P"><a href="Productos.php">Productos</a></li>
				<li id="ID_Se"><a href="servicios.php">Servicios</a></li>
				<li><a href="Talleres.php">Talleres</a></li>
				<li><a href="Terapias.php">Terapias</a></li>
				<li id="ID_Esp"><a href="Espacios.php">Espacios</a></li>
				<?php if ($adentro==false){?>
					<!-- CUANDO NO SE HA INICIADO SESION -->
					<li>
						<a href="#Registro" class="modal-trigger">
							<span class="white-text">Iniciar Sesión</span>
						</a>
					</li>
					<li>
						<a href="#" class="dropdown-trigger" data-target="id_drop">
							Nosotros
							<i class="material-icons right">arrow_drop_down</i>
						</a>
					</li>
				<?php }else{?>
					<!-- CUANDO SE INICIO SESION -->
					
					<?php
						require ("PHP/conexiondb.php");
						$sqlP="SELECT * FROM pre_pedido where Usuario="."'".$_SESSION["user"]."'";
						$resultadoP=$base->prepare($sqlP);
					    $resultadoP->execute();
					    $Pr_Ex2=$resultadoP->rowCount();
					    $sqlN="SELECT * FROM notificacion where estado=0 and User="."'".$_SESSION["user"]."'";
					    $resultadoN=$base->prepare($sqlN);
					    $resultadoN->execute();
					    $NumNot=$resultadoN->rowCount();
					?>
				
					<li class="">
						<a href="#" class="dropdown-trigger" data-target="modalop">
							<span class="white-text">Mis acciones</span>
							<i class="material-icons right ">arrow_drop_down</i>
						</a>
					</li>
					<li class="">
						<a href="#" class="dropdown-trigger" data-target="exit">
							<span class="name white-text "><?php echo $_SESSION["user"]; ?></span>
							<i class="material-icons right ">arrow_drop_down</i>
						</a>
					</li>
				<?php }?>
			</ul>
			<!--Menu movil-->
			<ul class="sidenav" id="menu-side">
				<li>
					<div class="user-view">
						<div class="background">
							<img src="Imagenes/p2.jpg">
						</div>
						<!--En caso de usuarios inscritos (Muestra datos del usuario)-->
						<!--<a href="#" >
							<img src="Imagenes/2.jpg" class="circle">
						</a>
						<a href="">
							<span class="name white-text">Eduardo</span>
						</a>-->
						<a href="">
							<a href="index.php" class="col s12 hide-on-large-only"><img class="responsive-img" src="Imagenes/logop1.png"></a>
						</a>
					</div>
				</li>
				<!--Content-->
				<li id="ID_P1"><a href="Productos.php">Productos</a></li>
				<li><a href="servicios.php">Servicios</a></li>
				<li><a href="Talleres.php">Talleres</a></li>
				<li><a href="Terapias.php">Terapias</a></li>
				<li id="ID_Esp1"><a href="Espacios.php">Espacios</a></li>
				<?php if ($adentro==false){?>
					<!-- CUANDO NO SE HA INICIADO SESION -->
					<li>
						<a href="#Registro" class="modal-trigger">
							<span class="black-text">Iniciar Sesion</span>
						</a>
					</li>
					<li>
						<a href="#" class="dropdown-trigger" data-target="id_drop2">
							Nosotros
							<i class="material-icons right">arrow_drop_down</i>
						</a>
					</li>
				<?php }else{?>
					<!-- CUANDO SE INICIO SESION -->
					<!-- <li>
						<a href="#" class="dropdown-trigger" data-target="id_drop">
						Nosotros
						<i class="material-icons right">arrow_drop_down</i></a>
					</li> -->
					<li id="ID_Pe1">
						<a href="Pedido.php">Pedido
							<span id="Pedido1" class="new badge right" data-badge-caption=""><?php echo $Pr_Ex2;?></span>
						</a>
					</li>

					<li id="ID_Nt1" style="">
						<a href="Notificaciones.php">
							<i class="material-icons">notifications</i>
							<span id="Noti1" class="new badge right" data-badge-caption=""><?php echo $NumNot;?></span>
						</a>
					</li>
					<li class="">
						<a href="#" class="dropdown-trigger" data-target="exit2">
							<span class="name black-text "><?php echo $_SESSION["user"]; ?></span>
							<i class="material-icons right">arrow_drop_down</i>
						</a>
					</li>
				<?php }?>
			</ul>
		</div>
	</nav>


