<?php
include "Vistas/headerAdm.php";

if (isset($_SESSION['user']) and isset( $_SESSION['per'])) {
  ?>
  
  <div class="row" style="margin-top: 3%;margin-bottom: 3%;">
    <div class="col s12 m10 offset-m1">
      <a class="waves-effect waves-light btn modal-trigger light-green brown lighten-3" href="#modal1"> <i class="material-icons left">add</i> Agregar</a>
    </div>
    <div class="col s12">
      <div id="Tb_Gest_Ser"></div>
    </div>  
  </div>

<<<<<<< HEAD
 
=======

>>>>>>> cc978a284f1a8a8d953a7c2cbe6c173b39d4ec6a
  <?php
  include "Vistas/Modal_ser.php";
  include "Vistas/pie_adm.php"; 
}else{
  header("Location: index.php");
}
?>
<script type="text/javascript" src="JS/Servicios.js"></script>
<script >
  document.addEventListener('DOMContentLoaded', function(){
    M.AutoInit();
  });
  function AgregarCampos(){
    $('#Nuevos').empty();
    num=parseInt($('#Ses').val());
    for (var i = 0; i < num; i++) {
      dvsI='<div class="input-field col s12 l6">';
      int='<input id="SesN'+i+'" name="SesN'+i+'" type="text" class="validate" required>';
      lbl='<label for="SesN'+i+'">Horario '+(i+1)+'</label>';
      dvsE='</div>'
      campo = dvsI+int+lbl+dvsE;
      $("#Nuevos").append(campo); 
    }
  }
  function AgregarCamposE(){
    $('#NuevosE').empty();
    num=parseInt($('#Ses1').val());
    for (var i = 0; i < num; i++) {
      dvsI='<div class="input-field col s12 l6">';
      int='<input id="SesE'+i+'" name="SesE'+i+'" type="text" class="validate" required>';
      lbl='<label for="SesE'+i+'">Horario '+(i+1)+'</label>';
      dvsE='</div>'
      campo = dvsI+int+lbl+dvsE;
      $("#NuevosE").append(campo); 
    }
  }

</script>

<script type="text/javascript">
  $('#ID_SeA').addClass("active brown lighten-4");
  $(document).ready(function(){
    $('#Tb_Gest_Ser').load("Vistas/Gestor/TablaGestorServicios.php");
  });
</script>