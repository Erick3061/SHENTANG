<?php
include "header.php";
?>
<div class="row" style="margin-top: 3%;margin-bottom: 3%;">
	<div class="col s8 offset-s2">
		<div class="slider">
			<ul class="slides">
				<li>
<<<<<<< HEAD
					<img src="Imagenes/EQUIPO.jpg">
					<div class="caption center-align">
						
					</div>
				</li>
				<li>
					<img src="Imagenes/PORTADA.jpg">
					<div class="caption center-align">
						
					</div>
=======
					<img class="responsive-img" src="Imagenes/EQUIPO.jpg">
>>>>>>> b85594b38676ff4cdf04d2547485fb209236403d
				</li>
				<li>
					<img src="">
					<div class="caption center-align">
						
					</div>
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
			indicators: true,
			interval: 2500,
			height: 500
		});
	});
</script>

