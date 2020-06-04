<?php
session_start();
require("../conexiondb.php");
$sql="UPDATE productos SET NOMBRE='".$_POST["nombre1"]."',CANTIDAD='".$_POST["Cant1"]."'
,TIPO_PRODUCTO='".$_POST["Tp1"]."',PRECIO='".$_POST["precio1"]."',stock='".$_POST["stock1"]."'
,MARCA='".$_POST["marca1"]."',MODELO='".$_POST["modelo1"]."',CARACTERISTICAS='".$_POST["carac1"]."' WHERE IDP='".$_POST["IDS"]."'";
$resultado=$base->prepare($sql);
$resp=$resultado->execute();
print_r($resp); 
?> 