<?php
require("../conexiondb.php");
session_start();
$sql="SELECT ID_Producto,NOMBRE,PRECIO, CantidadP,Subtotal FROM pre_pedido,productos where ID_Producto=IDP and Usuario="."'".$_SESSION["user"]."'";
$resultado=$base->prepare($sql);
$resultado->execute();
$total=0;
while($registro=$resultado->fetch(PDO::FETCH_OBJ)){
	$total=$total+$registro->Subtotal;
}
echo "$".$total;
?>