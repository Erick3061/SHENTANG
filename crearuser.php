<?php
  
  require("conexiondb.php");
  if(isset($_POST["boton"])){
    $nombre=$_POST["nombre"];
    $usuario=$_POST["usr"];
    $password=$_POST["contra"];
    $correo=$_POST["email"];
   
    /* preparar los metodos */
    $resultado=$base->prepare($sql);
    $resultado->execute();
    $b=true;
    $existe=false;
    $existeu=false;
    $existec=false;
    while($b==true){
      if(($registro=$resultado->fetch(PDO::FETCH_OBJ))==true){      
        $n=$registro->USUARIO;
        $c=$registro->EMAIL;
        if(($n==$usuario) and ($c==$correo)){
          $existe=true;
          $b=false;
        }
        if($n==$usuario){
          $existeu=true;
          $b=false;
        }
        if($c==$correo){
          $existec=true;
          $b=false;
        }
      }else {
        $b=false;
        $existe=false;
        $existeu=false;
        $existec=false;
      }
    }
    /* cerramos la base de datos */
    //$base=NULL;
    

  }
  
?>