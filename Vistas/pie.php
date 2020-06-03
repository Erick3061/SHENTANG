<footer class="page-footer light-green lighten-2">
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
		</div>
	</div>
	<div class="footer-copyright center">
		<div class="container">
			© 2020 Shen Tang

		</div>
	</div>
</footer>
</body>
</html>
<script >
	document.addEventListener('DOMContentLoaded', function(){
		M.AutoInit();
	});
</script>
<script type="text/javascript">
	function ocultar(){
		$('#Msg').addClass('hide');
		$('#Msg').removeClass('red-text');
		$('#Msg').removeClass('green-text');
	}
	function ocultar2(){
		$('#Msg1').addClass('hide');
		$('#Msg1').removeClass('red-text');
		$('#Msg1').removeClass('green-text');
	}
	$(document).ready(function(){
		var error2='<?php echo $err;?>';
		switch (error2) {
			case '0': $('#Msg1').addClass('hide');
			break;
			case '1':
				$('#Crearcuenta').modal();
				$('#Crearcuenta').modal('open'); 
				$('#Msg1').removeClass('hide');
				$('#Msg1').addClass('red-text');
				$('#Msg1').text("Usuario existente");
				setTimeout("ocultar2()",4000);
			break;
			case '2':
				$('#Crearcuenta').modal();
				$('#Crearcuenta').modal('open'); 
				$('#Msg1').removeClass('hide');
				$('#Msg1').addClass('red-text');
				$('#Msg1').text("Correo ya registrado");
				setTimeout("ocultar2()",4000);
			break;
			case '3':
				$('#Crearcuenta').modal();
				$('#Crearcuenta').modal('open'); 
				$('#Msg1').removeClass('hide');
				$('#Msg1').addClass('red-text');
				$('#Msg1').text("Error al agregar");
				setTimeout("ocultar2()",4000);
			break;
			default:
			// statements_def
			break;
		}
	});
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
			break;
			case '10':
			$('#Mandarcorreo').modal();
			$('#Mandarcorreo').modal('open'); 
			setTimeout("ocultar()",4000);
			alert("NO EXISTE ESE CORREO");
			break;
			case '11':
			alert("CONTRASEÑA ENVIADA A CORREO ELECTRONICO");
			default:
					// statements_def
					break;
				}
			});
</script>
