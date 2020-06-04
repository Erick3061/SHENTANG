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
            <div class="card-action">
              <a class="modal-trigger black-text " href="#<?php echo $nombre;?>">VER</a>
              <a onclick="asignarID(<?php echo $ides.",'".$nombre."'"; ?>)" href="#modalAS" class="modal-trigger right black-text">Apartar</a>
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
<div id="modalAS" class="modal">
  <div class="modal-content">
    <h4 id="Serv">Modal Header</h4>
    <p></p>
    <div class="row">
      <form id="FormSer" method="POST" onsubmit="return AgendarServicio()">
        <div class="input-field col s12 l6 hide">
          <input placeholder="" id="IDSe" name="IDSe" type="text" class="validate" required>
          <label for="IDSe">ID</label>
        </div>
        <div class="input-field col s12">
          <input placeholder="" id="IDSe" name="IDSe" type="text" class="validate datepicker" required>
          <label for="IDSe">Fecha</label>
        </div>
        <div class="input-field col s12">
          <input placeholder="" id="IDSe" name="IDSe" type="text" class="validate" required>
          <label for="IDSe">Hora</label>
        </div>
        <div class="col s12">
          <br><br>
          <button class="center btn btn-large">Agendar</button>
        </div>
      </form>
    </div>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
  </div>
</div>
<script type="text/javascript">
  $('#ID_Se').addClass("active brown lighten-4");
  function asignarID (id,nombre) {
    $('#IDSe').val(id);
    $('#Serv').val(nombre);
  }
  $(document).ready(function(){
    $('.datepicker').datepicker({format:'yyyy/mm/dd'});
  });
</script>