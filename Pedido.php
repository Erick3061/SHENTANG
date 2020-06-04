<?php
include "Vistas/header.php";
require ("PHP/conexiondb.php");

?>

<div class="row" style="margin-top: 5%; margin-bottom: 5%;">
	<div class="col s12 l8 offset-l2">
		<div id="TablaPedido"></div>
	</div>
</div>

<?php
include "Vistas/formularios.php";
include "Vistas/pie.php";	
?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#TablaPedido').load("PHP/Productos/ObtenerPedido.php");
	});
	$('#ID_Pe').addClass("active");
	$('#ID_Pe1').addClass("active");
	function Eliminar (ident) {
		$.ajax({
			method:"POST",
			data:"ID="+ident,
			url:"PHP/Productos/EliminarPedido.php",
			success:function(respuesta){
				respuesta=respuesta.trim();
				$('#'+ident).remove();
				$('#Pedido').text(respuesta);
				$('#Total').load('PHP/Productos/Total.php');
				$('#TablaPedido').load("PHP/Productos/ObtenerPedido.php");
			}
		});
	}
	function HacerPedido(){
		//event.preventDefault();
		$.ajax({
			method: "POST",
			data: $('#FrmDatos').serialize(),
			url: "PHP/Productos/NuevoPedido.php",
			success:function(respuesta){
				respuesta=respuesta.trim();
				console.log(respuesta);
				$('#TablaPedido').load("PHP/Productos/ObtenerPedido.php");
				$('#Pedido').text('0');
				$('#Pedido1').text('0');
				$('#Noti').text(respuesta);
				$('#Noti1').text(respuesta);
				swal("Status","Peido enviado exitosamente","success");
			}
		});
		return false;
	}
</script>

