<?php
session_start();
require("../../PHP/conexiondb.php"); 
?>
<div  id="prin" class="row">
	<div class="col col s12 m10 offset-m1  l10 offset-l1">
		<!--<a href="#"  onclick="enviar();" class="btn">Enviar</a>-->
		<table class="responsive-table highlight centered " id="GestorDatatable">
			<thead class="deep-purple lighten-4">
				<tr>
					<th class="hide">ID</th>
					<th>Nombre</th>
					<th class="">Cantidad</th>
					<th>Tipo de producto</th>
					<th>Precio</th>
					<th>Stock</th>
                    <th>marca</th>
					<th>modelo</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$sql="SELECT * FROM productos";
				$resultado=$base->prepare($sql);
				$resultado->execute();
				while($registro=$resultado->fetch(PDO::FETCH_OBJ)){
					?>
					<tr>
						<td class="hide"><?php echo $registro->IDP; ?></td>
						<td><?php echo $registro->NOMBRE; ?></td>
						<td><?php echo $registro->CANTIDAD; ?></td>
						<td><?php echo $registro->TIPO_PRODUCTO; ?></td>
						<td><?php echo $registro->PRECIO; ?></td>
                        <td><?php echo $registro->stock; ?></td>
                        <td><?php echo $registro->MARCA; ?></td>
                        <td><?php echo $registro->MODELO; ?></td>
						<td> 
							<?php
							//if($_SESSION['Permisos']<=2){

								?>
								<span href="#modal2p" onclick="obteberDatosPro(<?php echo $registro->IDP; ?>)" class="btn-small blue modal-trigger" style="margin-left: 1px;"><i class="material-icons ">edit</i></span>
								<span onclick="eliminarProducto(<?php echo $registro->IDP; ?>)" class="btn-small red" style="margin-left: 1px;"><i class="material-icons ">delete</i></span>
								<?php
							//}
							?>
						</td>
					</tr>
					<?php
				}
				?>
			</tbody>
		</table>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		t = $('#GestorDatatable').DataTable({
			/*dom: 'Bflrtip',
			buttons: [
            'excelHtml5',
            'pdfHtml5'
        	]*/

		});
		$('.dt-buttons').after("<br><br>");
		$("select").formSelect();
	});
	var specialElementHandler={
		'#editor':function(element,render){
			return true;
		}
	}
</script>