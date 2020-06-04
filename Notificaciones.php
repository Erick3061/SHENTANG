<?php
include "Vistas/header.php";
require ("PHP/conexiondb.php");
?>
<div class="row" style="margin-top: 1%;margin-bottom: 3%;">
	<div class="col s12 m10 offset-m1">
		<div class="col s10 offset-s1">
			<h4>Notificaciones:</h4>
		</div>
		<?php
		$sql="SELECT * FROM notificacion WHERE User ="."'".$_SESSION["user"]."' ORDER BY fecha ASC";
		$exe=$base->prepare($sql);
		$exe->execute();
		while($registro=$exe->fetch(PDO::FETCH_OBJ)){
			?>
			<div class="col s10 offset-m1 m8 offset-m2">
				<h5  style=" cursor: pointer;" onclick="muestra(<?php echo $registro->ID_Not; ?>)">
					<div id="<?php echo 'SN'.$registro->ID_Not;?>">
						<?php 
						if ($registro->estado==0) {
							echo '<i class="material-icons red-text left">announcement</i>';
						}
						?>
					</div>
					<?php echo $registro->tipo."   ".$registro->fecha; ?>		
				</h5>
			</div>
			<div id="<?php echo $registro->ID_Not ?>" class="col s10 offset-s1 m8 offset-m2" style="background-color: rgba(0,255,0,0.3); border-radius: 10px; display: none">
				<p><?php echo $registro->Asunto;  ?></p>
			</div>
			<?php
		}
		?>
	</div>	
</div>


<?php
include "Vistas/formularios.php";
include "Vistas/pie.php";	

?>
<script type="text/javascript">
	$('#ID_Nt').addClass("active");
	$('#ID_Nt1').addClass("active");
	function muestra (id) {
		$.ajax({
			method:"POST",
			data:"Id="+id,
			url:"PHP/Usuarios/NotVisitada.php",
			success: function(respuesta){
				respuesta=respuesta.trim();
				$('#SN'+id).load("PHP/Usuarios/ObtenerNot.php");
				ver(id);
				$('#Noti').text(respuesta);
				$('#Noti1').text(respuesta);
			}
		}); 
	}
	function ver (id) {
		var esVisible = $("#"+id).is(":visible");
		if (esVisible==true) {
			$('#'+id).hide(300);
		}else{
			$('#'+id).show(300);
		}
	}
</script>