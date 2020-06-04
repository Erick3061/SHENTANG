<?php
session_start();
require("../conexiondb.php");
    $p=2;
    $nombre=$_POST["nombre"];
    $usuario=$_POST["usr"];
    $pass=$_POST["pass"];
    $email=$_POST["email"];
    //Comprobar si el usuario y correo existe
    $sql="SELECT * FROM usuarios WHERE USUARIO='$usuario'";
    $resultado=$base->prepare($sql);
    $resultado->execute();
    $Us_Ex=$resultado->rowCount();//usuario existente
    if ($Us_Ex==0) {
        $sql="SELECT * FROM usuarios WHERE EMAIL='$email'";
        $resultado=$base->prepare($sql);
        $resultado->execute();
        $Cr_Ex=$resultado->rowCount();//Correo existente
        if ($Cr_Ex==0) {
            $sql="INSERT INTO usuarios (NOMBRE, USUARIO, PASSWORD, EMAIL, Permisos) VALUES ('$nombre', '$usuario', '$pass', '$email', '$p')";
            $resultado=$base->prepare($sql);
            $resp=$resultado->execute();
            print_r($resp);
        }else{
            echo("correo ya existe");
            //header("Location: ../../index.php?erno2=2");
        }
    }else{
        echo("usuario ya existe");
        //header("Location: ../../index.php?erno2=1");
    }
?>