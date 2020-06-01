<?php
session_start();
require("../conexiondb.php");
$sql="SELECT * FROM notificacion WHERE User ="."'".$_SESSION["user"]."'";
$exe=$base->prepare($sql);
$exe->execute();
while($registro=$exe->fetch(PDO::FETCH_OBJ)){
	?>
			<?php 
			if ($registro->estado==0) {
				
			}else{
			}
			?>	
	
	<?php
}
?>