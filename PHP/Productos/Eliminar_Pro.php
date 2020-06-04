<?php
session_start();
require("../conexiondb.php");
$sql="DELETE FROM productos WHERE IDP=".$_POST['ID'];
$resultado=$base->prepare($sql);
$resp=$resultado->execute();
print_r($resp);
?>