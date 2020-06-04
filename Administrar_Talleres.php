<?php
include "Vistas/headerAdm.php";

if (isset($_SESSION['user']) and isset( $_SESSION['per'])) {
  ?>
  
  <div class="row" style="margin-top: 3%;margin-bottom: 3%;">
    <div class="col s12 m10 offset-m1">
      <a class="waves-effect waves-light btn modal-trigger light-green brown lighten-3" href="#modal1t"> <i class="material-icons left">add</i> Agregar</a>
    </div>
    <div class="col s12">
      <div id="Tb_Gest_Ta"></div>
    </div>  
  </div>

 
  <?php
  include "Vistas/Modal_ta.php";
  include "Vistas/pie_adm.php"; 
}else{
  header("Location: index.php");
}
?>
<script type="text/javascript" src="JS/talleres.js"></script>
<script >
  document.addEventListener('DOMContentLoaded', function(){
    M.AutoInit();
  });
</script>

<script type="text/javascript">
  $('#ID_Ta').addClass("active brown lighten-4");
  $(document).ready(function(){
      $('#Tb_Gest_Ta').load("Vistas/Gestor/TablaGestorTalleres.php");
    });
</script>