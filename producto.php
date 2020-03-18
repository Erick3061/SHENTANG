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
      //echo "$idproducto";
      require ("conexiondb.php");
    ?>
      <!--<div class="navbar-fixed">
        En caso de que la barra de navegacion sea fija
      </div>-->
      <nav class="green">
        <div class="nav-wrapper container">
          <a href="index.php" class="brand-logo">Logo</a>
          
          <a href="#" data-target="menu-side" class="sidenav-trigger">
            <i class="material-icons">menu</i>
          </a>
          <!--Menu normal-->
          <ul class="right hide-on-med-and-down">
            <li><a href="#">Servicios</a></li>
            <li><a href="Productos.php">Productos</a></li>
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
                  <img src="Imagenes/1.jpg" alt="">
                </div>
                <!--<a href="#" >
                  <img src="Imagenes/2.jpg" class="circle">
                </a>
                <a href="">
                  <span class="name white-text">Eduardo</span>
                </a>-->
                <a href="">
                  <span class="email white-text">Shen-Tang(Logo)</span>
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
              <a href="">
                Servicios
              </a>
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
        $conexion=mysqli_connect($db_host,$db_user,$db_password); 
          if((mysqli_connect_errno())==true){
            echo "error al conectar a la base de datos <br>";
            exit();
            }else{
                mysqli_select_db($conexion,$db_nomdb) or die ("NO SE ENCUENTRA LA BASE DE DATOS");
                /* para que reconozca los acentos y juegos de caracteres */
                mysqli_set_charset($conexion,"utf8");
                $consulta="select * from productos where IDP='$idproducto'";
                $resultado=mysqli_query($conexion, $consulta);
                $fila=mysqli_fetch_row($resultado);
                $id=$fila[0];
                $nomp=$fila[1];
                $catp=$fila[2];
                $presen=$fila[3];
                $costo=$fila[4];
            }
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
          <div class="col l9 s12">

            <div class="slider">
              <ul class="slides">

                <li>
                  <img src="Imagenes/p1.jpg" alt="">
                  <div class="caption center-align">
                    <h3>Hola</h3>
                  </div>
                </li>
                <li>
                  <img src="Imagenes/p2.jpg" alt="">
                </li>
                <li>
                  <img src="Imagenes/p3.jpg" alt="">
                </li>
              </ul>

            </div>
          </div>
          <div class="col l3 hide-on-med-and-down">
            <?php
              echo "<p>PRESENTACION: $presen</p>";
              echo "<p>PRECIO: $costo</p>";
              echo "<p>CANTIDAD: $catp</p>";
            ?>
          </div>
          <div class="col s12">
            Descripcion
          </div>
        </div>
      </div>
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
                    <span>&nbsp 1234567890</span>
                  </li>
                  <li>
                    <a>
                      <i class="material-icons black-text">email</i>
                    </a>
                    <span>&nbsp easdas@hasdas.com</span>
                  </li>
                  <li>
                    <a href="#" >
                      <i class="material-icons black-text">add_location</i>
                    </a>
                    <span>&nbsp Puebla, pueb</span>
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
            © 2014 Copyright Text
            
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