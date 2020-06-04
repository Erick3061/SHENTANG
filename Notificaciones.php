<?php
include "Vistas/header.php";
require ("PHP/conexiondb.php");
?>
<div class="row" style="margin-top: 1%;margin-bottom: 3%;">
	<div class="col s12 m10 offset-m1">
		<div class="col s12" style="margin-bottom: 5%;">
			<h4>Notificaciones:</h4>
		</div>
		<?php
		$sql="SELECT * FROM notificacion WHERE User ="."'".$_SESSION["user"]."' ORDER BY fecha DESC";
		$exe=$base->prepare($sql);
		$exe->execute();
		while($registro=$exe->fetch(PDO::FETCH_OBJ)){
			?>
			<div class="row">
				<div class="col s10 m3 offset-m1 offset-s1" style="margin-top: -3%;">
					<ul class="collection" style=" cursor: pointer;" onclick="muestra(<?php echo $registro->ID_Not; ?>)">
						<li class="collection-item avatar amber lighten-5">
							<span ><?php echo $registro->tipo; ?></span>
							<p><?php echo $registro->fecha; ?></p>
							<div id="<?php echo 'SN'.$registro->ID_Not;?>">
								<?php
								if ($registro->estado==0) {
									echo '<i class="secondary-content material-icons red-text left">announcement</i>';
								}
								?>
							</div>
						</li>
					</ul>
				</div>
				<div id="<?php echo $registro->ID_Not.'1'; ?>" class="hide-on-small-only col m7 light-green lighten-4" style="margin-top: -2%; border-radius: 10px; display: none">
					<p><?php echo $registro->Asunto;  ?></p>
				</div>
			</div>
			<div class="row hide-on-med-and-up">
				<div id="<?php echo $registro->ID_Not ?>" class="col s10 offset-s1 light-green lighten-4" style="; border-radius: 10px; display: none; margin-top: -7%;">
					<p><?php echo $registro->Asunto;  ?></p>
				</div>
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
		var esVisible2 = $("#"+id+"1").is(":visible");
		if (esVisible2==true) {
			$('#'+id+"1").hide(300);
		}else{
			$('#'+id+"1").show(300);
		}
	}
</script>