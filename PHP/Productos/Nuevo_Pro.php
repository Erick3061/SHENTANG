<?php
session_start();
require("../conexiondb.php");
$sql="INSERT INTO productos (NOMBRE,CANTIDAD,TIPO_PRODUCTO,PRECIO,stock,MARCA,MODELO,CARACTERISTICAS) VALUES ("
.'"'.$_POST['nombre'].'","'.$_POST['Cant'].'",'.$_POST['tp'].",".$_POST['precio'].",".$_POST['stock'].",".$_POST['marca'].",".$_POST['modelo'].",".$_POST['caracteristicas'].")";
$resultado=$base->prepare($sql);
$resp=$resultado->execute();
print_r($resp);
?>