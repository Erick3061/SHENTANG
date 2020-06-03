<?php
include "Vistas/headerAdm.php";

if (isset($_SESSION['user']) and isset( $_SESSION['per'])) {
  ?>

  <div class="row" style="margin-top: 3%;margin-bottom: 3%;">
    <div class="col s12 m8 offset-m2">
      <div class="slider">
        <ul class="slides">
          <li>
            <img src="Imagenes/EQUIPO.jpg">
            <div class="caption down-align">

            </div>
          </li>
          <li>
            <img src="Imagenes/PORTADA.jpg">
            <div class="caption center-align">

            </div>
            <img class="responsive-img" src="Imagenes/EQUIPO.jpg">
          </li>
          <li>
            <img src="Imagenes/COMERCIALES/IMAGEN ORGÁNICA2.jpg">
            <div class="caption center-align">

            </div>
          </li>
        </ul> 
      </div>
    </div>  
  </div>


  <?php
  
  include "Vistas/pie_adm.php"; 
}else{
  header("Location: index.php");
}

?>
<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems,{
      indicators: true,
      interval: 2500,
      height: 500
    });
  });
</script>
