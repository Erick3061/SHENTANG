<?php
	require("../conexiondb.php");
	session_start();
	$sql="DELETE FROM pre_pedido WHERE Usuario="."'".$_SESSION["user"]."' and ID_Producto="."'".$_POST["ID"]."'";
	$resultado=$base->prepare($sql);
    $resultado->execute();

    $sql="SELECT * FROM pre_pedido where Usuario="."'".$_SESSION["user"]."'";
	$resultado=$base->prepare($sql);
    $resultado->execute();
    $Pr_Ex2=$resultado->rowCount();
	print_r($Pr_Ex2);
?>