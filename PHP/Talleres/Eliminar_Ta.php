<?php
session_start();
require("../conexiondb.php");
$sql="DELETE FROM talleres WHERE ID=".$_POST['ID'];
$resultado=$base->prepare($sql);
$resp=$resultado->execute();
print_r($resp);
?>