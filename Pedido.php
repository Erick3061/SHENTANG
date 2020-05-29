<?php
include "Vistas/header.php";
require ("PHP/conexiondb.php");

?>

<div class="row" style="margin-top: 5%; margin-bottom: 5%;">
	<div class="col s12 l8 offset-l2">
<<<<<<< HEAD
		<div id="TablaPedido"></div>
=======
		<table>
			<thead>
				<tr>
					<th>Producto</th>
					<th>Precio (P/U)</th>
					<th>Cantidad</th>
					<th>Subtotal</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody class="container">
				<?php
				require ("conexiondb.php");
				$sql="SELECT ID_Producto,NOMBRE,PRECIO, CantidadP,Subtotal FROM pre_pedido,productos where ID_Producto=IDP and Usuario="."'".$_SESSION["user"]."'";
				$resultado=$base->prepare($sql);
				$resultado->execute();
				$total=0;
				while($registro=$resultado->fetch(PDO::FETCH_OBJ)){
						$total=$total+$registro->Subtotal;
					?>
					<tr id="<?php echo $registro->ID_Producto ?>">
						<td><?php echo $registro->NOMBRE; ?></td>
						<td>$<?php echo $registro->PRECIO; ?></td>
						<td><?php echo $registro->CantidadP; ?></td>
						<td>$<?php echo $registro->Subtotal; ?></td>
						<td>
							<span onclick="Eliminar(<?php echo "'".$registro->ID_Producto."'";?>)" class="btn-small orange" style="margin-left: 1px;">Eliminar
							</span>
						</td>
					</tr>
					<?php
				}
				?>
				<tr>
                	<td colspan="3">Total</td>
                	<td id="Total" colspan="2">$<?php echo $total; ?></td>
            	</tr>
			</tbody>
		</table>
>>>>>>> bfee7247b982e2e4e6b47b4075d253c0d9801ee5
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
		
	}
</script>

