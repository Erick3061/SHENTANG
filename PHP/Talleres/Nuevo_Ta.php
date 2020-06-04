<?php
session_start();
require("../conexiondb.php");
$sql="INSERT INTO talleres (NOMBRE,INFO,PRECIO) VALUES ("
.'"'.$_POST['nombre'].'","'.$_POST['info'].'",'.$_POST['precio'].")";
$resultado=$base->prepare($sql);
$resp=$resultado->execute();
print_r($resp);
?>