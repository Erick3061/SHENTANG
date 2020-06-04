<?php
require("../conexiondb.php");
if(isset($_POST["botoncu"])){
    /* recibir los datos enviados de los formularios */
    $nombre=$_POST["nombre"];
    $usuario=$_POST["usr"];
    $pass=$_POST["contra"];
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
            $sql="INSERT INTO usuarios (NOMBRE, USUARIO, PASSWORD, EMAIL, Permisos) VALUES ('$nombre', '$usuario', '$pass', '$email','1')";
            $resultado=$base->prepare($sql);
            $resultado->execute();
            
            $sql="SELECT * FROM usuarios WHERE USUARIO='$usuario' AND PASSWORD='$pass'";
            $resultado=$base->prepare($sql);
            $resultado->execute();
            $numero_registro=$resultado->rowCount();
            if ($numero_registro!=0) {
                /* se inicia la sesion con la vaiable session  */
                ob_start();
                session_start();
                $_SESSION["user"]=$_POST["usr"];
                header("location:../../index.php");
            }else{
               header("Location: ../../index.php?erno2=3"); 
            }
        }else{
            header("Location: ../../index.php?erno2=2");
        }
    }else{
        header("Location: ../../index.php?erno2=1");
    }
}
?>