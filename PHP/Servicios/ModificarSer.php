<?php
session_start();
require("../conexiondb.php");
//Eliminar horarios
$sql="DELETE FROM sesiones WHERE ID_serv=".$_POST['IDS'];
$resultado=$base->prepare($sql);
$resp=$resultado->execute();
//
$sql="UPDATE servicios SET nombre='".$_POST["nombre1"]."', contenido='".$_POST["Cont1"]."', precio=".$_POST["precio1"].", Max_Per=".$_POST["MaxP1"].", Sesiones=".$_POST["Ses1"]." WHERE ID_Ser=".$_POST["IDS"];
$resultado=$base->prepare($sql);
$resp1=$resultado->execute();
//Insertar nuevos horarios
for ($i=0; $i < $_POST['Ses1']; $i++) { 
	$sql="INSERT INTO sesiones (ID_serv,hora) VALUES(".$_POST['IDS'].",'".$_POST['SesE'.$i]."'".")";
	$resultado=$base->prepare($sql);
	$resp=$resultado->execute();
}
print_r($resp1);
?>