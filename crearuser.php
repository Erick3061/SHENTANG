<?php
  require("conexiondb.php");
  if(isset($_POST["botoncu"])){
    /* recibir los datos enviados de los formularios */
    $nombre=$_POST["nombre"];
    $usuario=$_POST["usr"];
    $pass=$_POST["contra"];
    $email=$_POST["email"];
    $sql="INSERT INTO usuarios (NOMBRE, USUARIO, PASSWORD, EMAIL) VALUES ('$nombre', '$usuario', '$pass', '$email')";
    $resultado=$base->prepare($sql);
    $resultado->execute();
    
    $sql="select * from usuarios where USUARIO='$usuario' AND PASSWORD='$pass'";
    $resultado=$base->prepare($sql);
    $resultado->execute();
    $numero_registro=$resultado->rowCount();
        if($numero_registro!=0){
            /* se inicia la sesion con la vaiable session  */
            ob_start();
            session_start();
            $_SESSION["user"]=$_POST["usr"];
            header("location:index.php");
        }else{
            header("location:index.php");
        }
}else{
    //echo "<script> alert('no se han enviado datos del formulario');</script>";
}
?>