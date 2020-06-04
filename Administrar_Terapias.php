<?php
include "Vistas/headerAdm.php";

if (isset($_SESSION['user']) and isset( $_SESSION['per'])) {
  ?>
  
  <div class="row" style="margin-top: 3%;margin-bottom: 3%;">
    <div class="col s12 m10 offset-m1">
      <a class="waves-effect waves-light btn modal-trigger light-green brown lighten-3" href="#modal1te"> <i class="material-icons left">add</i> Agregar</a>
    </div>
    <div class="col s12">
      <div id="Tb_Gest_Te"></div>
    </div>  
  </div>

 
  <?php
  include "Vistas/Modal_te.php";
  include "Vistas/pie_adm.php"; 
}else{
  header("Location: index.php");
}
?>
<script type="text/javascript" src="JS/terapias.js"></script>
<script >
  document.addEventListener('DOMContentLoaded', function(){
    M.AutoInit();
  });
</script>

<script type="text/javascript">
  $('#ID_Te').addClass("active brown lighten-4");
  $(document).ready(function(){
      $('#Tb_Gest_Te').load("Vistas/Gestor/TablaGestorTerapias.php");
    });
</script>