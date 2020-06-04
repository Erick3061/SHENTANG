<?php

session_start();
require("../conexiondb.php");
$sql="INSERT INTO servicios (nombre,contenido,precio,Max_per,Sesiones) VALUES ("
.'"'.$_POST['nombre'].'","'.$_POST['Cont'].'",'.$_POST['precio'].",".$_POST['MaxP'].",".$_POST['Ses'].")";
$resultado=$base->prepare($sql);
$resp1=$resultado->execute();
$ID_Ser=$base->lastInsertId();
for ($i=0; $i < $_POST['Ses']; $i++) { 
	$sql="INSERT INTO sesiones (ID_serv,hora) VALUES($ID_Ser,"."'".$_POST['SesN'.$i]."'".")";
	$resultado=$base->prepare($sql);
	$resp=$resultado->execute();
}
print_r($resp1);
?>