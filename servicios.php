<?php
include "Vistas/header.php";
require("PHP/conexiondb.php");
$sql="select * from servicios";
/* preparar los metodos */
$resultado=$base->prepare($sql);
$resultado->execute();
$ban=true;
?>
<!-- iniciar con las consultas -->
<div class="section container ">
  <div class="divider"></div>
  <div class="row">
    <?php  
    while($ban==true){
      if(($registro=$resultado->fetch(PDO::FETCH_OBJ))==true){
        $nombre=$registro->nombre;
        $info=$registro->contenido;
        ?>
        <div class="col s4 ">         
          <div class="card">
            <div class="card-image  waves-block waves-light">
              <img class="activator" src="Imagenes/SERVDISP/<?php echo $nombre;?>.jpg">
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
              <h6><?php echo $nombre;?></h6>
              <p><?php echo $info;?></p>
            </div>
            <div class="card-action center-align">
              <a class="modal-trigger black-text" href="#<?php echo $nombre;?>">VER</a>
            </div>
          </div>
        </div>

        <div id="<?php echo $nombre;?>" class="modal">
          <div class="modal-content">
            <h4><?php echo $nombre;?></h4>
            <div class="section container col s6" >

            </div>

            <p><?php echo $info;?></p>
          </div>
          <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat green">CERRAR</a>
          </div>
        </div>
        <?php
      }else{
        $ban=false;
      }
    }

    $base=NULL;
    ?>
  </div>
  <div class="divider"></div>
</div>
<?php
include "Vistas/formularios.php";
include "Vistas/pie.php";
?>