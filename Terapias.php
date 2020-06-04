<?php
include "Vistas/header.php";
require("PHP/conexiondb.php");
$sql="select * from terapias";
/* preparar los metodos */
$resultado=$base->prepare($sql);
$resultado->execute();
$ban=true;
?>
<!--Seccion 1-->
<div class="section">
  <h3 class="center">Nuestros terapias</h3>
  <div class="row">
    <div class="col l7 s10 offset-l3 offset-s1">
      <div class="nav-wrapper">
      </div>
    </div>
  </div>
</div>

<?php  
    while($ban==true){
      if(($registro=$resultado->fetch(PDO::FETCH_OBJ))==true){
        $id=$registro->ID;
        $nombre=$registro->NOMBRE;
        $info=$registro->INFO;
        ?>
        <div class="parallax-container">
          <div class="parallax"><img src="Imagenes/SERVICIOS/<?php echo $nombre?>.jpg"></div>
        </div>
        <div class="section white">
          <div class="row container">
          <h2 class="header"><?php echo $nombre?></h2>
          <p class="grey-text text-darken-3 lighten-3"><?php echo $info?></p>
        </div>
        </div>
        <?php
      }else{
        $ban=false;
      }
    }

    $base=NULL;
    ?>
<?php
include "Vistas/formularios.php";
include "Vistas/pie.php";
?>