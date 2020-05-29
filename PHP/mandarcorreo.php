<?php
require ("conexiondb.php");
$correo=$_POST["email"];
$sql="select * from usuarios where EMAIL='$correo'";
/* preparar los metodos */
$resultado=$base->prepare($sql);
$resultado->execute();
$num=$resultado->rowCount();
$num=$num;
/* datos del correo */
$destinatrio=$correo;
$asunto="envio de contraseña \r\n SHENTANG\r\n From: ShenTang < centro.shentang.puebla@gmail.com >";
$encabezado_a="SHENTANG From: ShenTang < centro.shentang.puebla@gmail.com >\r\n";
$encabezado_a = 'MIME-Version: 1.0' . " ";
$encabezado_a= 'Content-type: text/html; charset=iso-8859-1' . " ";



/* --------------- */
if($num==0){
    header("Location:../index.php?erno=10");
}else{
    $registro=$resultado->fetch(PDO::FETCH_OBJ);
    $pass=$registro->PASSWORD;
    $user=$registro->USUARIO;
    $nombre=$registro->NOMBRE;
    //echo $pass;
    $mensaje="Disculpe la demora $nombre su usuario es: $user y su comtraeña es: $pass";
    //echo $mensaje;
    mail($destinatrio, $asunto , $mensaje,$encabezado_a ) or die (header("Location:../index.php?erno=10"));
    header("Location:../index.php?erno=11");
}


?>