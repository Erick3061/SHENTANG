<?php
session_start();
require("../conexiondb.php");


$sql="SELECT * FROM servicios WHERE ID_Ser=".$_POST['ID'];
$resultado=$base->prepare($sql);
$resultado->execute();
$registro=$resultado->fetch(PDO::FETCH_OBJ);
$datos=array(
	"ID"=>$registro->ID_Ser,
	"Nombre"=>$registro->nombre,
	"Contenido"=>$registro->contenido,
	"Precio"=>$registro->precio,
	"Personas"=>$registro->Max_Per,
	"Sesiones"=>$registro->Sesiones
);

 echo json_encode($datos);
?>