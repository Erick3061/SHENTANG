<?php
include "Vistas/header.php";
require("PHP/conexiondb.php");
<<<<<<< HEAD
$sql="select * from terapias";
/* preparar los metodos */
$resultado=$base->prepare($sql);
$resultado->execute();
$ban=true;
=======
>>>>>>> cc978a284f1a8a8d953a7c2cbe6c173b39d4ec6a
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
<<<<<<< HEAD

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
=======
<!--Fin de seccion 1-->

<!--Seccion 2-->
<div class="parallax-container">
  <div class="parallax"><img src="Imagenes/SERVICIOS/TaD.jpg"></div>
</div>
<div class="section white">
  <div class="row container">
    <h2 class="header">Terapia a distancia</h2>
    <p class="grey-text text-darken-3 lighten-3">¿Sabías qué?</p>
    <p class="grey-text text-darken-3 lighten-3">Muchas enfermedades que tenemos son causadas por emociones como el estrés, la depresión, la ira, entre otros estados anímicos. Prevén enfermedades, fortaleciendo tu mente y recupérate de las que ya tienes con nuestra terapia SAAMA a distancia. Contamos con los mejores especialistas que te darán resultados reales. </p>
  </div>
</div>
<!--  -->
<div class="parallax-container">
  <div class="parallax"><img src="Imagenes/SERVICIOS/ANSIEDAD1.jpg"></div>
</div>
<div class="section white">
  <div class="row container">
    <h2 class="header">Problemas de ansiedad</h2>
    <p class="grey-text text-darken-3 lighten-3">¡𝐍𝐨 𝐬𝐮𝐛𝐞𝐬𝐭𝐢𝐦𝐞𝐬 𝐥𝐚 𝐚𝐧𝐬𝐢𝐞𝐝𝐚𝐝!</p>
    <p class="grey-text text-darken-3 lighten-3">Es un problema que nos puede hundir atodos, por ello, te ofrecemos las mejores alternativas para combatirlo y vivir en plenitud.
    Contamos con los mejores especialistas que te darán resultados reales.</p>
  </div>
</div>
<!--  -->
<div class="parallax-container">
  <div class="parallax"><img src="Imagenes/SERVICIOS/KARMA.jpg"></div>
</div>
<div class="section white">
  <div class="row container">
    <h2 class="header">KARMA</h2>
    <p class="grey-text text-darken-3 lighten-3">El Karma es un fenómeno que nos afecta a todos y es mejor evitarlo, te compartimos unos consejos para librarte de él.</p>
  </div>
</div>
<!--  -->
<div class="parallax-container">
  <div class="parallax"><img src="Imagenes/SERVICIOS/IMAGEN ORGANICA.jpg"></div>
</div>
<div class="section white">
  <div class="row container">
    <h2 class="header">IMAGEN ORGANICA</h2>
    <p class="grey-text text-darken-3 lighten-3">Quien se domina a sí mismo se conoce y se  vuelve sabio. El camino de los sabios es el   camino del Autoconocimiento.</p>
  </div>
</div>
<!--  -->
<div class="parallax-container">
  <div class="parallax"><img src="Imagenes/SERVICIOS/CHAKRAS.jpg"></div>
</div>
<div class="section white">
  <div class="row container">
    <h2 class="header">ALINEACIÓN DE CHAKRAS</h2>
    <p class="grey-text text-darken-3 lighten-3">¿Sufres constantemente de estrés?</p>
    <p class="grey-text text-darken-3 lighten-3">Probablemente tus chakras no estén alineados. Lo que podría provocar que se bloqueen, que nuestras defensas del cuerpo bajen, trayendo consigo distintos trastornos emocionales y físicos en nuestro cuerpo. Los chakras son siete puntos psíquicos y energéticos que dominan nuestro cuerpo humano y regulan la entrada y salida de energía. Están ubicados desde el coxis, hasta la coronilla, se distribuyen en los plexos, redes formadas por distintos filamentos nerviosos y vasculares entretejidos.</p>
  </div>
</div>
>>>>>>> cc978a284f1a8a8d953a7c2cbe6c173b39d4ec6a
<?php
include "Vistas/formularios.php";
include "Vistas/pie.php";
?>