<?php
session_start();
require("../conexiondb.php");
$sql="SELECT * FROM productos WHERE IDP=".$_POST['ID'];
$resultado=$base->prepare($sql);
$resultado->execute();
$registro=$resultado->fetch(PDO::FETCH_OBJ);
$datos=array(
	"Id"=>$registro->IDP,
	"Nombre"=>$registro->NOMBRE,
	"Cantidad"=>$registro->CANTIDAD,
	"Tp"=>$registro->TIPO_PRODUCTO,
    "Precio"=>$registro->PRECIO,
    "Stock"=>$registro->stock,
    "Marca"=>$registro->MARCA,
	"Modelo"=>$registro->MODELO,
	"Carac"=>$registro->CARACTERISTICAS
);

 echo json_encode($datos);
?>