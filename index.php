
<?php
include "header.php";
?>
<div class="row">
	<div class="col s8 offset-s2">
		<div class="slider" style="margin-top: 10%; margin-bottom: 10%;">
			<ul class="slides">
				<li>
					<img class="responsive-img" style="" src="Imagenes/EQUIPO.jpg">
				</li>
				<li>
					<img class="responsive-img" src="Imagenes/PORTADA.jpg">
				</li>  
			</ul>
		</div>
	</div>
	
</div>

<?php
include "formularios.php";
include "pie.php";	

?>
<script type="text/javascript">
	document.addEventListener('DOMContentLoaded', function() {
		var elems = document.querySelectorAll('.slider');
		var instances = M.Slider.init(elems,{
			interval:3000
		});
	});
</script>

