<?php
include "header.php";
?>

<div class="row">
	<div class="col s12 l8 offset-l2">
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
			<tbody>
				<?php
				require ("conexiondb.php");
				$sql="SELECT ID_Producto,NOMBRE,PRECIO, CantidadP,Subtotal FROM pre_pedido,productos where ID_Producto=IDP and Usuario="."'".$_SESSION["user"]."'";
				$resultado=$base->prepare($sql);
				$resultado->execute();
				while($registro=$resultado->fetch(PDO::FETCH_OBJ)){
					?>
					<tr id="<?php echo $registro->ID_Producto ?>">
						<td><?php echo $registro->NOMBRE; ?></td>
						<td><?php echo $registro->PRECIO; ?></td>
						<td><?php echo $registro->CantidadP; ?></td>
						<td><?php echo $registro->Subtotal; ?></td>
						<td>
							<span onclick="Eliminar(<?php echo "'".$registro->ID_Producto."'";?>)" class="btn-small orange" style="margin-left: 1px;">Eliminar
							</span>
						</td>
					</tr>
					<?php
				}
				?>
			</tbody>
		</table>
	</div>
</div>

<?php
include "formularios.php";
include "pie.php";	
?>
<script type="text/javascript">
	$('#ID_Pe').addClass("active");
	$('#ID_Pe1').addClass("active");
	function Eliminar (ident) {
		//alert(ident);
		$.ajax({
			method:"POST",
			data:"ID="+ident,
			url:"PHP/EliminarPedido.php",
			success:function(respuesta){
				respuesta=respuesta.trim();
				console.log(respuesta);
				$('#'+ident).remove();
				$('#Pedido').text(respuesta);
			}
		});
	}
</script>

