<?php
session_start();
require("../conexiondb.php");
$sql="UPDATE talleres SET NOMBRE='".$_POST["nombre1"]."', INFO='".$_POST["info1"]."', PRECIO='".$_POST["precio1"]."' WHERE ID=".$_POST["IDS"];
$resultado=$base->prepare($sql);
$resp=$resultado->execute();
print_r($resp);
?>