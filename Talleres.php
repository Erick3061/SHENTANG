<?php
include "Vistas/header.php";
require("PHP/conexiondb.php");
<<<<<<< HEAD
$sql="select * from talleres";
/* preparar los metodos */
$resultado=$base->prepare($sql);
$resultado->execute();
$ban=true;
?>
<!--Seccion 1-->
<div class="section">
  <h3 class="center">Nuestros talleres</h3>
  <div class="row">
    <div class="col l7 s10 offset-l3 offset-s1">
    </div>
  </div>
</div>
<!--Fin de seccion 1-->

<!--Seccion 2-->

<?php  
    while($ban==true){
      if(($registro=$resultado->fetch(PDO::FETCH_OBJ))==true){
        $id=$registro->ID;
        $nombre=$registro->NOMBRE;
        $info=$registro->INFO;
        ?>
        <div class="parallax-container">
          <div class="parallax"><img src="Imagenes/talleres/t<?php echo $id?>.jpg"></div>
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
<!--Columna media (Contenido)-->



=======
?>

<!--Fin de seccion 1-->

<!--Seccion 2-->

<!--Columna media (Contenido)-->
<div class="parallax-container">
  <div class="parallax"><img src="Imagenes/talleres/1.jpg"></div>
</div>
<div class="section white">
  <div class="row container">
   <h2 class="header">Taller para el amor</h2>
   <p class="grey-text text-darken-3 lighten-3">¿Tienes mala suerte en el amor? ¿No logras encontrar a la pareja adecuada? ¿Te cansaste de la soltería o de las relaciones fallidas? Te explicaremos todo acerca de la psicología transgeneracional. Recuerda que cada taller tiene su cupo limitado. Pregunta por la fecha más cercana.</p>
 </div>
</div>
<div class="parallax-container">
  <div class="parallax"><img src="Imagenes/talleres/t2.jpg"></div>
</div>
<div class="section white">
  <div class="row container">
   <h2 class="header">Taller Interior</h2>
   <p class="grey-text text-darken-3 lighten-3">Transforma la relación contigo misma desde tus células hasta tu alma. Este es un llamado a sanar lo que te mantiene estancada en el pasado y conectar con tu felicidad, amor pareja y prosperidad. Todo ello está en ti, escondido entre capas de patrones aprendidos, creencias, experiencias negativas y memorias inconscientes. Deja atrás los patrones de dolor, sacrificio y sufrimiento. Comienza una nueva realidad en donde tu energía Femenina Sagrada diseña tu vida, con sabiduría, intuición y conciencia. Trabaja con tu autoestima y reafirma tu feminidad. En este taller te guiaremos paso a paso en el camino del despertar con tu Diosa interior. Cupo limitado, pregunta por la fecha más cercana.</p>
 </div>
</div>
<div class="parallax-container">
  <div class="parallax"><img src="Imagenes/talleres/t3.jpg"></div>
</div>
<div class="section white">
  <div class="row container">
   <h2 class="header">Taller de la Prosperidad</h2>
   <p class="grey-text text-darken-3 lighten-3">Te invitamos a participar en el taller prosperidad para mejorar tu abundancia y prosperidad, incrementar tu clientela, hacer crecer tu negocio y mejorar tus finanzas en todos los aspectos. Trabajamos con herramientas de Grigori Gravovoi y programación cuántica.</p>
 </div>
</div>
<div class="Parallax-container">
  <!-- <div class="parallax"><img src="Imagenes/talleres/t5.jpg"></div> -->
</div>



<div class="parallax-container">
  <div class="parallax"><img src="Imagenes/talleres/t4.jpg"></div>
</div>
<div class="section white">
  <div class="row container">
   <h2 class="header">Taller cuantico</h2>
   <p class="grey-text text-darken-3 lighten-3">TAsiste nuestra terapia cuántica de desbloqueo integral ,la cual actúa a nivel, físico mental, emocional y espiritual en esta ocasión se llevará a cabo de manera grupal así la energía de sanación se percibirá con mayor intensidad .</p>
 </div>
</div>
>>>>>>> cc978a284f1a8a8d953a7c2cbe6c173b39d4ec6a
<?php
include "Vistas/formularios.php";
include "Vistas/pie.php";
?>