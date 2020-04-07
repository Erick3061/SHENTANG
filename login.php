<?php
    require("conexiondb.php");
    $sql="select * from usuarios where USUARIO= :login AND PASSWORD= :password";
    $resultado=$base->prepare($sql);
    if(isset($_POST["botonlog"])){
        $login=htmlentities(addslashes($_POST["usuario"]));
        $password=htmlentities(addslashes($_POST["password"]));
        $resultado->bindValue(":login",$login);
        $resultado->bindValue(":password",$password);
        $resultado->execute();
        /* checar que exista el usuario */
        $numero_registro=$resultado->rowCount();
        if($numero_registro!=0){
            /* se inicia la sesion con la vaiable session  */
            session_start();
            $_SESSION["user"]=$_POST["usuario"];
            header("location:index.php");
            //echo "<h2>ADELANTE</h2>";
        }else{
            echo "<script> alert('EL USUARIO NO EXISTE') </script>";
            header("location:index.php");
        }
    }else{
        //echo "<script> alert('no se han enviado datos del formulario');</script>";
    }
?>