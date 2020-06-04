<?php
session_start();
require("../conexiondb.php");


$sql="SELECT * FROM talleres WHERE ID=".$_POST['ID'];
$resultado=$base->prepare($sql);
$resultado->execute();
$registro=$resultado->fetch(PDO::FETCH_OBJ);
$datos=array(
	"ID"=>$registro->ID,
	"Nombre"=>$registro->NOMBRE,
	"Info"=>$registro->INFO,
	"Precio"=>$registro->PRECIO
);

 echo json_encode($datos);
?>