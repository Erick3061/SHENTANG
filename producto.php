 <!DOCTYPE html>
  <html>
    <head>
      <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
    <?php
      $idproducto=$_GET["idproducto"];
      $num_pag=$_GET["nump"];
      $imgnum=$_GET["img"];
      //echo "$idproducto";
      require ("conexiondb.php");
    ?>
      <!--<div class="navbar-fixed">
        En caso de que la barra de navegacion sea fija
      </div>-->
      <nav class="green">
        <div class="nav-wrapper container">
        <a href="index.php" class="brand-logo col sl3 hide-on-med-and-down"><img class="responsive-img" src="Imagenes/logop.png"></a>
          <a href="index.php" class="brand-logo col s12 hide-on-large-only"><img class="responsive-img" src="Imagenes/logop1.png"></a>
          <a href="#" data-target="menu-side" class="sidenav-trigger">
            <i class="material-icons">menu</i>
          </a>
          <!--Menu normal-->
          <ul class="right hide-on-med-and-down">
            
            <li><a href="Productos.php?pagina=<?php echo $num_pag?>">Productos</a></li>
            <li>
              <a href="#" class="dropdown-trigger" data-target="id_drop">
              Nosotros
              <i class="material-icons right">arrow_drop_down</i>
            </a></li>
          </ul>
          <!-- Menu movil-->
          <ul class="sidenav" id="menu-side">
            <!--opcion 1-->
            <li>
              <div class="user-view">
                <div class="background">
                  <img src="Imagenes/p2.jpg" alt="">
                </div>
                <!--<a href="#" >
                  <img src="Imagenes/2.jpg" class="circle">
                </a>
                <a href="">
                  <span class="name white-text">Eduardo</span>
                </a>-->
                <a href="">
                <a href="index.php" class="col s12 hide-on-large-only"><img class="responsive-img" src="Imagenes/logop1.png"></a>

                </a>
              </div>
            </li>
            <li>
              <a href="Productos.php">
                Productos
              </a>
            </li>
            <li>
              <div class="divider"></div>
            </li>
            <li>
              <a href="#" class="dropdown-trigger" data-target="id_drop2">
              Nosotros
              <i class="material-icons right">arrow_drop_down</i>
            </a></li>
            <!--opcion 2--><!--
            <li><a href="#">Enlace1</a></li>
            <li><a href="#">Enlace2</a></li>
            <li><a href="#">Enlace3</a></li>
          </ul>-->
          <!--Menu del dropdown-->
          <ul id="id_drop" class="dropdown-content">
            <li><a href="#">¿Quienes somos?</a></li>
            <li><a href="#">Mision</a></li>
            <li><a href="#">Vision</a></li>
          </ul>
          <ul id="id_drop2" class="dropdown-content">
            <li><a href="#">¿Quienes somos?</a></li>
            <li><a href="#">Mision</a></li>
            <li><a href="#">Vision</a></li>
          </ul>
        </div>
      </nav>
      <!-- iniciar con las consultas -->
      <?php
        /* CONEXION A BASE DE DATOS CON PDO */
          /* consulta */
          $sql="select * from productos where IDP='$idproducto'";
          /* preparar los metodos */
          $resultado=$base->prepare($sql);
          $resultado->execute();
          $registro=$resultado->fetch(PDO::FETCH_OBJ);
          $id=$registro->IDP;
          $nomp=$registro->NOMBRE;
          $catp=$registro->CANTIDAD;
          $presen=$registro->TIPO_PRODUCTO;
          $costo=$registro->PRECIO;
          $marca=$registro->MARCA;
          $mod=$registro->MODELO;
          $caract=$registro->CARACTERISTICAS;
      ?>
      <div class="section">
        <div class="row">
          <div class="col s12">
            <?php
            echo "<h2>$nomp</h2>";
            ?>
          </div>
          
        </div>
        <div class="row">
          <div class="col l7">

            <div class="row">
              <ul class="slides">

                <li class=" container section">
                  <img class="responsive-img" src="Imagenes/PRODUCTOS/<?php echo $nomp?>.jpg" alt="">
                  
                </li>
                <!-- <li>
                  <img src="Imagenes/p2.jpg" alt="">
                </li>
                <li>
                  <img src="Imagenes/p3.jpg" alt="">
                </li> -->
              </ul>

            </div>
          </div>
          <div class="col l3 hide-on-med-and-down">
            <?php
              echo "<p>Cantidad: $catp</p>";
              echo "<p>Tipo de producto: $presen</p>";
              echo "<p>Precio: $$costo MX</p>";
              echo "<p>Marca: $marca</p>";
              echo "<p>Modelo: $mod</p>";
            ?>
          </div>
          <div class="col s12">
            <p style="font-weight: bold">Descripcion</p>
            <?php
              echo "<p style='font-weight: bold'>$caract</p>";
            ?> 
          </div>
          <div class="col l2 hide-on-large-only">
            <?php
              echo "<p>Cantidad: $catp</p>";
              echo "<p>Tipo de producto: $presen</p>";
              echo "<p>Precio: $$costo MX</p>";
              echo "<p>Marca: $marca</p>";
              echo "<p>Modelo: $mod</p>";
            ?>
          </div>
        </div>
      </div>
      <?php 
      $base=NULL;
      ?>
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
      <script type="text/javascript" src="js/materialize.min.js"></script>

      <script >
        document.addEventListener('DOMContentLoaded', function(){
          M.AutoInit();
        });
        document.addEventListener('DOMContentLoaded', function() {
          var elems = document.querySelectorAll('.slider');
          var instances = M.Slider.init(elems,{
            interval:3000
          });
        });
        
      </script>
    </body>
  </html>