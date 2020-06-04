<?php
session_start();
require("../conexiondb.php");
$sql="INSERT INTO servicios (nombre,contenido,precio,Max_per,Sesiones) VALUES ("
.'"'.$_POST['nombre'].'","'.$_POST['Cont'].'",'.$_POST['precio'].",".$_POST['MaxP'].",".$_POST['Ses'].")";
$resultado=$base->prepare($sql);
$resp=$resultado->execute();
print_r($resp);
?>