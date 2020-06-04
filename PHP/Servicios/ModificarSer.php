<?php
session_start();
require("../conexiondb.php");
$sql="UPDATE servicios SET nombre='".$_POST["nombre1"]."', contenido='".$_POST["Cont1"]."', precio=".$_POST["precio1"].", Max_Per=".$_POST["MaxP1"].", Sesiones=".$_POST["Ses1"]." WHERE ID_Ser=".$_POST["IDS"];
$resultado=$base->prepare($sql);
$resp=$resultado->execute();
print_r($resp);
?>