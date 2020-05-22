<?php
include "header.php";
?>
<div class="section container">
	<img class="responsive-img" src="Imagenes/EQUIPO.jpg" alt="">
</div>

<?php
include "formularios.php";
include "pie.php";	
?>

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