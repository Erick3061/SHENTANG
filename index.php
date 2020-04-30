<?php
				$adentro=false;
				session_start();
				$error=0;
				if(!isset($_SESSION["user"])){
					$adentro=false;
				}else{
					$adentro=true;
				}
				if (isset($_GET['erno']) && $adentro==false) {
					$error=$_GET['erno'];
				}
			?>
 <!DOCTYPE html>
	<html>
		<head>
			<!-- Compiled and minified CSS -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
			<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
						
			<!--Import Google Icon Font-->
			<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
			
			<!--Let browser know website is optimized for mobile-->
			<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		</head>

		<body>
			<!--<div class="navbar-fixed">
				En caso de que la barra de navegacion sea fija
			</div>-->

			<!-- Menú de navegación-->
			<nav class="green">
				<div class="nav-wrapper container">
					<a href="index.php" class="brand-logo col sl3 hide-on-med-and-down"><img class="circle responsive-img" src="Imagenes/logop.png"></a>
					<a href="index.php" class="brand-logo col s12 hide-on-large-only"><img class="circle responsive-img" src="Imagenes/logop1.png"></a>
					<a href="#" data-target="menu-side" class="sidenav-trigger">
						<i class="material-icons">menu</i>
					</a>
					<!--Menu para ordenadores de resolcuion grande-->
					<ul class="right hide-on-med-and-down">
						<!--<li><a href="#">Servicios</a></li>-->
						<li><a href="Productos.php">Productos</a></li>
						<li><a href="servicios.php">Servicios</a></li>
						<?php if ($adentro==false){?>
							<!-- CUANDO NO SE HA INICIADO SESION -->
						<li><a href="#Registro" class="modal-trigger">
							<span class="white-text">Iniciar Sesion</span>
						</a></li>
						<li>
							<a href="#" class="dropdown-trigger" data-target="id_drop">
							Nosotros
							<i class="material-icons right">arrow_drop_down</i></a>
						</li>
						<?php }else{?>
							<!-- CUANDO SE INICIO SESION -->
							<li><a href="Talleres.php">Talleres</a></li>
							<li><a href="Terapias.php">Terapias</a></li>
							<li><a href="Espacios.php">Espacios</a></li>
							<!-- <li>
								<a href="#" class="dropdown-trigger" data-target="id_drop">
								Nosotros
								<i class="material-icons right">arrow_drop_down</i></a>
							</li> -->
							<li class="active">
									<a href="#" class="dropdown-trigger" data-target="exit">
										<span class="name white-text "><?php echo $_SESSION["user"]; ?></span>
										<i class="material-icons right">arrow_drop_down</i></a>
							</li>
						<?php }?>
						<!--Menú desplegable-->
						
					</ul>
					<!-- Menu para dispositivos pequeños-->
					<ul class="sidenav" id="menu-side">
						<!--opcion 1-->
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
						<!-- Contenido del menu movil-->
						<li><a href="Productos.php">Productos</a></li>
						<li><a href="servicios.php">Servicios</a></li>
						<?php if ($adentro==false){?>
							<!-- CUANDO NO SE HA INICIADO SESION -->
						<li><a href="#Registro" class="modal-trigger">
							<span class="black-text">Iniciar Sesion</span>
						</a></li>
						<li>
							<a href="#" class="dropdown-trigger" data-target="id_drop2">
							Nosotros
							<i class="material-icons right">arrow_drop_down</i></a>
						</li>
						<?php }else{?>
							<!-- CUANDO SE INICIO SESION -->
							<li><a href="Talleres.php">Talleres</a></li>
							<li><a href="Terapias.php">Terapias</a></li>
							<li><a href="Espacios.php">Espacios</a></li>
							<!-- <li>
								<a href="#" class="dropdown-trigger" data-target="id_drop">
								Nosotros
								<i class="material-icons right">arrow_drop_down</i></a>
							</li> -->
							<li class="active">
									<a href="#" class="dropdown-trigger" data-target="exit2">
										<span class="name black-text "><?php echo $_SESSION["user"]; ?></span>
										<i class="material-icons right">arrow_drop_down</i></a>
							</li>
						<?php }?>
						<!--<li><div class="divider"></div></li>-->
						
						
						
						<!-- <li><a href="Espacios.php">Espacios</a></li> -->
						<!--Menú desplegable-->
				</div>
			</nav>
			<!--Termino del menú de navegacion-->

		 <!-- se requieren los formularios de formularios.php 
					ESTA LINEA ES MUY IMPORTANTE YA QUE SI NO SE RQUIERE PUES 
					NO SERVIRA LOS FORMULARIOS-->
		 <?php require("formularios.php"); ?>
			

		 <div class="section container">
					<img class="responsive-img" src="Imagenes/EQUIPO.jpg" alt="">
		 </div>

			<footer class="page-footer green">
					<div class="container">
						<div class="row">
							<div class="col l6 s12">
								<h5 class="white-text">Contacto</h5>
								<ul>
									<li>
										<a>
											<i class="material-icons black-text">call</i>
										</a>
										<span>(222) 2490429 o 2222177728</span>
									</li>
									<li>
										<a>
											<i class="material-icons black-text">email</i>
										</a>
										<span>centro.shentang.puebla@gmail.com</span>
									</li>
									<li>
										<a href="#" >
											<i class="material-icons black-text">add_location</i>
										</a>
										<span>TEPEYAHUALCO NO.37-1, COL. LA PAZ, PUEBLA PUE. CP.72160</span>
									</li>
								</ul>
							</div>
							<!--<div class="col l4 offset-l2 s12">
								<h5 class="white-text">Links</h5>
								<ul>
									<li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
									<li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
									<li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
									<li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
								</ul>
							</div>-->
						</div>
					</div>
					<div class="footer-copyright center">
						<div class="container">
						© 2020 Shen Tang
						
						</div>
					</div>
				</footer>

		 <!-- Compiled and minified JavaScript -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

			<script >
				document.addEventListener('DOMContentLoaded', function(){
					M.AutoInit();
				});
				document.addEventListener('DOMContentLoaded', function() {
					var elems = document.querySelectorAll('.slider');
					var instances = M.Slider.init(elems,{
						interval:3000
					});
				});
			</script>
			<!-- ESTE SCRIPT VERIFICA SI EXISTE EL USURIO INGRESADO -->
			
			</body>
	</html>
	<script type="text/javascript">
		function ocultar(){
      $('#Msg').addClass('hide');
      $('#Msg').removeClass('red-text');
      $('#Msg').removeClass('green-text');
    }

		$(document).ready(function(){
			var error='<?php echo $error;?>';
			switch (error) {
				case '0':
					$('#Msg').addClass('hide');
				break;
				case '1':
					$('#Registro').modal();
					$('#Registro').modal('open'); 
					$('#Msg').removeClass('hide');
					$('#Msg').addClass('red-text');
					$('#Msg').text("Contraseña incorrecta");
					setTimeout("ocultar()",4000);
				break;
				case '2':
					$('#Registro').modal();
					$('#Registro').modal('open'); 
					$('#Msg').removeClass('hide');
					$('#Msg').addClass('red-text');
					$('#Msg').text("Usuario no existente");
					setTimeout("ocultar()",4000);
				default:
					// statements_def
					break;
			}
		});
	</script>