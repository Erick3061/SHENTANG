<?php
        $adentro=false;
        $ne=false;
        session_start();
        if(!isset($_SESSION["user"])){
          $adentro=false;
        }else{
          $adentro=true;
        }
      ?>
<!DOCTYPE html>
  <html>
    <head>
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!-- Compiled and minified JavaScript -->
            
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
    
      <!--<div class="navbar-fixed">
        En caso de que la barra de navegacion sea fija
      </div>-->
      
      <!-- Menú de navegación-->
      <nav class="green">
        <div class="nav-wrapper container">
        <a href="index.php" class="brand-logo col sl3 hide-on-med-and-down"><img class="circle responsive-img" src="Imagenes/logop.png"></a>
          <a href="index.php" class="brand-logo col s12 hide-on-large-only"><img class="circle responsive-img" src="Imagenes/logop1.png"></a>
          <a href="#" data-target="menu-side" class="sidenav-trigger">
            <i class="material-icons">menu</i>
          </a>
          <!--Menu para ordenadores de resolcuion grande-->
          <ul class="right hide-on-med-and-down">
          <?php if($adentro==true){?>
              <!-- cuando se inicio la sesion -->
              <li><a href="Productos.php">Productos</a></li>
              <li><a href="servicios.php">Servicios</a></li>
              <li><a href="Talleres.php">Talleres</a></li>
              <li class="active"><a href="#">Terapias</a></li>
              <li><a href="Espacios.php">Espacios</a></li>
              <li><a href="index.php">Pagina principal</a></li>
              <li>
                  <a href="#" class="dropdown-trigger" data-target="exit">
                    <span class="name white-text "><?php echo $_SESSION["user"]; ?></span>
                    <i class="material-icons right">arrow_drop_down</i></a>
              </li>
            <?php }else{?>
              <!-- cuando no esta la sessiom iniciada -->
              <li class="active"><a href="#">Talleres</a></li>
              <li><a href="index.php">Pagina principal</a></li>
              <li>
              <a href="#" class="dropdown-trigger" data-target="id_drop">
              Nosotros
              <i class="material-icons right">arrow_drop_down</i></a>
            </li>
            <?php }?>
            
          </ul>
          <!-- Menu para dispositivos pequeños-->
          <ul class="sidenav" id="menu-side">
            <!--opcion 1-->
            <li>
              <div class="user-view">
                <div class="background">
                  <img src="Imagenes/p2.jpg" alt="">
                </div>
                <!--En caso de usuarios inscritos (Muestra datos del usuario)-->
                <!--<a href="#" >
                  <img src="Imagenes/2.jpg" class="circle">
                </a>
                <a href="">
                  <span class="name white-text">Eduardo</span>
                </a>-->
                <a href="">
                <a href="index.php" class="col s12 hide-on-large-only"><img class="circle responsive-img" src="Imagenes/logop1.png"></a>
                </a>
              </div>
            </li>
            <!-- Contenido del menu movil-->
            <?php if($adentro==true){?>
              <!-- cuando se inicio la sesion -->
              <li><a href="Productos.php">Productos</a></li>
              <li><a href="servicios.php">Servicios</a></li>
              <li><a href="Talleres.php">Talleres</a></li>
              <li class="active"><a href="#">Terapias</a></li>
              <li><a href="Espacios.php">Espacios</a></li>
              <li><a href="index.php">Pagina principal</a></li>
              <li>
                  <a href="#" class="dropdown-trigger" data-target="exit2">
                    <span class="name black-text "><?php echo $_SESSION["user"]; ?></span>
                    <i class="material-icons right">arrow_drop_down</i></a>
              </li>
            <?php }else{?>
              <!-- cuando no esta la sessiom iniciada -->
              <li class="active"><a href="#">Terapias</a></li>
              <li><a href="index.php">Pagina principal</a></li>
              <li>
              <a href="#" class="dropdown-trigger" data-target="id_drop">
              Nosotros
              <i class="material-icons right">arrow_drop_down</i></a>
            </li>
            <?php }?>
          </ul>
        </div>
      </nav>
      <!--Termino del menú de navegacion-->
      <?php require("formularios.php"); ?>
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
      <!--Fin de seccion 1-->

      <!--Seccion 2-->
      <div class="parallax-container">
        <div class="parallax"><img src="Imagenes/SERVICIOS/TaD.jpg"></div>
      </div>
      <div class="section white">
        <div class="row container">
         <h2 class="header">Terapia a distancia</h2>
         <p class="grey-text text-darken-3 lighten-3">¿Sabías qué?</p>
         <p class="grey-text text-darken-3 lighten-3">Muchas enfermedades que tenemos son
causadas por emociones como el estrés, la
depresión, la ira, entre otros estados
anímicos.
Prevén enfermedades, fortaleciendo tu
mente y recupérate de las que ya tienes con
nuestra terapia SAAMA a distancia. Contamos con los mejores especialistas que te darán resultados reales.
</p>
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
         <p class="grey-text text-darken-3 lighten-3">Es un problema que nos puede hundir a
todos, por ello, te ofrecemos las mejores
alternativas para combatirlo y vivir en
plenitud.
Contamos con los mejores especialistas que
te darán resultados reales.</p>
       </div>
     </div>
     <!--  -->
     <div class="parallax-container">
        <div class="parallax"><img src="Imagenes/SERVICIOS/KARMA.jpg"></div>
      </div>
      <div class="section white">
        <div class="row container">
         <h2 class="header">KARMA</h2>
         <p class="grey-text text-darken-3 lighten-3">El Karma es un fenómeno que nos afecta a
todos y es mejor evitarlo, te compartimos
unos consejos para librarte de él.</p>
       </div>
     </div>
     <!--  -->
     <div class="parallax-container">
        <div class="parallax"><img src="Imagenes/SERVICIOS/IMAGEN ORGANICA.jpg"></div>
      </div>
      <div class="section white">
        <div class="row container">
         <h2 class="header">IMAGEN ORGANICA</h2>
         <p class="grey-text text-darken-3 lighten-3">Quien se domina a sí mismo se conoce y se
vuelve sabio. El camino de los sabios es el
camino del Autoconocimiento.</p>
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
         <p class="grey-text text-darken-3 lighten-3">
Probablemente tus chakras no estén
alineados. Lo que podría provocar que se
bloqueen, que nuestras defensas del cuerpo
bajen, trayendo consigo distintos trastornos
emocionales y físicos en nuestro cuerpo.
Los chakras son siete puntos psíquicos y
energéticos que dominan nuestro cuerpo
humano y regulan la entrada y salida de
energía. Están ubicados desde el coxis,
hasta la coronilla, se distribuyen en los
plexos, redes formadas por distintos
filamentos nerviosos y vasculares
entretejidos.</p>
       </div>
     </div>
      <!--Finaliza Seccion1-->


      <!--Bola flotante
      <div class="fixed-action-btn">
        <a class="btn-floating btn-large blue">
          <i class="large material-icons">mode_edit</i>
        </a>
        <ul>
          <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
          <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
          <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
          <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
        </ul>
      </div>-->


      <footer class="page-footer green">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Contacto</h5>
                <ul>
                  <li>
                    <a>
                      <i class="material-icons black-text">call</i>
                    </a>
                    <span>(222) 2490429 o 2222177728</span>
                  </li>
                  <li>
                    <a>
                      <i class="material-icons black-text">email</i>
                    </a>
                    <span>centro.shentang.puebla@gmail.com</span>
                  </li>
                  <li>
                    <a href="#" >
                      <i class="material-icons black-text">add_location</i>
                    </a>
                    <span>TEPEYAHUALCO NO.37-1, COL. LA PAZ, PUEBLA PUE. CP.72160</span>
                  </li>
                </ul>
              </div>
              <!--<div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>-->
            </div>
          </div>
          <div class="footer-copyright center">
            <div class="container">
            © 2020 Shen Tang
            
            </div>
          </div>
        </footer>

      <!--JavaScript at end of body for optimized loading-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <script >
        document.addEventListener('DOMContentLoaded', function(){
          M.AutoInit();
        });

      </script>
      <script >

      </script>
    </body>
  </html>