<?php
require("../conexiondb.php");
session_start();
$sql="SELECT ID_Producto,NOMBRE,PRECIO, CantidadP,Subtotal FROM pre_pedido,productos where ID_Producto=IDP and Usuario="."'".$_SESSION["user"]."'";
$resultado=$base->prepare($sql);
$resultado->execute();
$NumF=$resultado->rowCount();
$total=0;
if ($NumF>0) {
	?>
	<form onsubmit="return HacerPedido()" method="post" id="FrmDatos">
		<table id="Tb_Ped" class="highlight responsive-table">
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
				while($registro=$resultado->fetch(PDO::FETCH_OBJ)){
					$total=$total+$registro->Subtotal;
					?>
					<tr id="<?php echo $registro->ID_Producto ?>">
						<td><?php echo $registro->NOMBRE; ?></td>
						<td>$<?php echo $registro->PRECIO; ?></td>
						<td><?php echo $registro->CantidadP; ?></td>
						<td>$<?php echo $registro->Subtotal; ?></td>
						<td>
							<span onclick="Eliminar(<?php echo "'".$registro->ID_Producto."'";?>)" class="btn red" style="margin-left: 1px;">
								<i class="material-icons left">remove_shopping_cart</i>
								Eliminar
							</span>
						</td>
					</tr>
					<input type='checkbox' checked='checked' class='hide' name='Ids[]' value="<?php echo $registro->ID_Producto ?>">
					<?php
				}	
				?>
				<tr class="grey lighten-4">
					<td colspan="3" style="font-weight: bold;">Total</td>
					<td id="Total" style="font-weight: bold;">$<?php echo $total; ?></td>
					<td id="enviar">
						<button type="submint" class="btn">Pedido<i class=" material-icons left">shopping_basket</i></button>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
	<?php
}else{
	?>
	<h2>No tienes articulos</h2>
	<?php
}

?>