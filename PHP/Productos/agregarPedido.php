<?php
    require("../conexiondb.php");
    session_start();
    	//Checa el precio del producto
    $sql="SELECT * FROM productos where IDP="."'".$_POST["ID"]."'";
    $resultado=$base->prepare($sql);
    $resultado->execute();
    $registro=$resultado->fetch(PDO::FETCH_OBJ);
    $costo=$registro->PRECIO;
    $costo=$costo*$_POST["Cantidad"];
    $stk=$registro->stock;
    	//Checa si existe el producto para añadir mas
    $sql="SELECT * FROM pre_pedido where ID_Producto="."'".$_POST["ID"]."' and Usuario="."'".$_SESSION["user"]."'";
    $resultado=$base->prepare($sql);
    $resultado->execute();
    $datosP=$resultado->fetch(PDO::FETCH_OBJ);
    $Pr_Ex=$resultado->rowCount();

    if ($Pr_Ex==0) {
        $sql="INSERT INTO pre_pedido (Usuario,ID_Producto,CantidadP,Subtotal) VALUES ("."'".$_SESSION["user"]."',"."'".$_POST["ID"]."'".",".$_POST["Cantidad"].",".$costo.")";
        $resultado=$base->prepare($sql);
        $resultado->execute();
         $sql="SELECT * FROM pre_pedido where Usuario="."'".$_SESSION["user"]."'";
        $resultado=$base->prepare($sql);
        $resultado->execute();
        $Pr_Ex2=$resultado->rowCount();
        print_r($Pr_Ex2);
    }else{
        $stkUser=$datosP->CantidadP+$_POST["Cantidad"];
        if ($stkUser>$stk) {
            print_r("error");
        }else{
            $Can_new=$datosP->CantidadP+$_POST["Cantidad"];
            $costo_new=$datosP->Subtotal+$costo;
            $sql="UPDATE pre_pedido SET CantidadP=$Can_new, Subtotal=$costo_new WHERE ID_Producto="."'".$_POST["ID"]."'";
            $resultado=$base->prepare($sql);
            $resultado->execute();
            $sql="SELECT * FROM pre_pedido where Usuario="."'".$_SESSION["user"]."'";
            $resultado=$base->prepare($sql);
            $resultado->execute();
            $Pr_Ex2=$resultado->rowCount();
            print_r($Pr_Ex2);
        }
    }

?>