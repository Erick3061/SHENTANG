<?php
require("../conexiondb.php");
session_start();
$sql="UPDATE notificacion SET estado=1 WHERE ID_Not=".$_POST['Id'];
$r=$base->prepare($sql);
$r->execute();
$sqlN="SELECT * FROM notificacion where estado=0 and User="."'".$_SESSION["user"]."'";
$resultadoN=$base->prepare($sqlN);
$resultadoN->execute();
$NumNot=$resultadoN->rowCount();
print_r($NumNot);
?>