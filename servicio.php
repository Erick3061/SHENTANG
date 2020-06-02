<?php
include "Vistas/header.php";

$Id=$_GET['ident'];
$producto=$_GET['servicio'];
?>


<?php
include "Vistas/formularios.php";
include "Vistas/pie.php";	

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