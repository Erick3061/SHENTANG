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
					<th class="">Descripcion</th>
					<th>Precio</th>
					<th>Personas</th>
					<th>Sesiones</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$sql="SELECT * FROM servicios";
				$resultado=$base->prepare($sql);
				$resultado->execute();
				while($registro=$resultado->fetch(PDO::FETCH_OBJ)){
					?>
					<tr>
						<td class="hide"><?php echo $registro->ID_Ser; ?></td>
						<td><?php echo $registro->nombre; ?></td>
						<td><?php echo $registro->contenido; ?></td>
						<td><?php echo $registro->precio; ?></td>
						<td><?php echo $registro->Max_Per; ?></td>
						<td><?php echo $registro->Sesiones; ?></td>
						<td>
							<?php
							//if($_SESSION['Permisos']<=2){

								?>
								<span href="#modal2" onclick="obteberDatosServ(<?php echo $registro->ID_Ser; ?>)" class="btn-small amber modal-trigger" style="margin-left: 1px;"><i class="material-icons ">edit</i></span>
								<span onclick="eliminarServicio(<?php echo $registro->ID_Ser; ?>)" class="btn-small red" style="margin-left: 1px;"><i class="material-icons ">delete</i></span>
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