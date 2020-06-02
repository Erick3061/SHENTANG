<?php
include "Vistas/header.php";
?>
<div class="row">
  <div class="col s12 m8 offset-m2">
    <h3>¿Necesitas un espacio?</h3>
  </div>
  <div class="col s12 m8 offset-m2">
    <p>¿Tienes planes de comenzar con tu propio negocio?</p>
    <p>En Shen Tang centro de terapias alternativas entendemos la necesidad de tener un espacio para atender a tus pacientes (clientes) por eso ponemos a tu disposición diversos espacios para tus necesidades.</p>
  </div>
</div>
<div class="row" style="margin-top: 3%;margin-bottom: 3%;">
  <div class="col s12 m10 l8 offset-m1 offset-l2">
    <div class="slider">
      <ul class="slides">
        <li>
          <img src="Imagenes/Espacios/1.jpg">
          <div class="caption left-align">
          </div>
        </li>
        <li>
          <img src="Imagenes/Espacios/2.jpg">
          <div class="caption center-align">

          </div>
        </li>
        <li>
          <img src="Imagenes/Espacios/3.jpg">
          <div class="caption center-align">

          </div>
        </li>

      </ul> 
    </div>
  </div>  
</div>


<?php
include "Vistas/formularios.php";
include "Vistas/pie.php"; 

?>
<script type="text/javascript">
  $('#ID_Esp').addClass("active");
  $('#ID_Esp1').addClass("active");
  var sc=0;
  if (screen.width < 1024) 
    sc=210;
 else 
   if (screen.width < 1280) 
    sc=350;
  else 
    sc=500; 

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems,{
      indicators: true,
      interval: 2500,
      height: sc
    });
  });
</script>
