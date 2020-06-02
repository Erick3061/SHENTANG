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

<div class="row">
  <div class="col l2 hide-on-med-and-down">
    <span></span>
  </div>
  <div class="col col l10 s12">
    <p></p>
    <?php  
    while($ban==true){
      if(($registro=$resultado->fetch(PDO::FETCH_OBJ))==true){
        $ides=$registro->ID_Ser;
        $nombre=$registro->nombre;
        $info=$registro->contenido;
        ?>
        <div class="col s6 m4">         
          <div class="card large">
            <div class="card-image  ">
              <img src="Imagenes/SERVDISP/<?php echo $nombre;?>.jpg">
            </div>
            <div class="card-content">
              <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
              <h6><?php echo $nombre;?></h6>
              <p class="hide-on-small-only"><?php echo $info;?></p>
            </div>
            <div class="card-action ">
              <a class="modal-trigger black-text" href="#<?php echo $nombre;?>">VER</a>
              <a href="servicio.php?ident=<?php echo $ides;?>&servicio=<?php echo $nombre; ?>" class="right black-text modal-trigger">Apartar</a>
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
</div>
<?php
include "Vistas/formularios.php";
include "Vistas/pie.php";
?>
<script type="text/javascript">
  $('#ID_Se').addClass("active");
</script>