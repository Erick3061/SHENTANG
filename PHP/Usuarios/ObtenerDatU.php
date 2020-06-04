<?php
session_start();
require("../conexiondb.php");


$sql="SELECT * FROM usuarios WHERE ID=".$_POST['ID'];
$resultado=$base->prepare($sql);
$resultado->execute();
$registro=$resultado->fetch(PDO::FETCH_OBJ);
$datos=array(
	"ID"=>$registro->ID,
	"Nombre"=>$registro->NOMBRE,
	"Usr"=>$registro->USUARIO,
	"Email"=>$registro->EMAIL,
	"Per"=>$registro->Permisos
);

 echo json_encode($datos);
?>