 <!DOCTYPE html>
  <html>
    <head>
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

            
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    </head>

    <body>
      <!--<div class="navbar-fixed">
        En caso de que la barra de navegacion sea fija
      </div>-->

      <!-- Menú de navegación-->
      <nav class="green">
        <div class="nav-wrapper container">
          <a href="index.php" class="brand-logo col sl3 hide-on-med-and-down"><img class="responsive-img" src="Imagenes/logop.png"></a>
          <a href="index.php" class="brand-logo col s12 hide-on-large-only"><img class="responsive-img" src="Imagenes/logop1.png"></a>
          <a href="#" data-target="menu-side" class="sidenav-trigger">
            <i class="material-icons">menu</i>
          </a>
          <!--Menu para ordenadores de resolcuion grande-->
          <ul class="right hide-on-med-and-down">
            <!--<li><a href="#">Servicios</a></li>-->
            <li><a href="Productos.php">Productos</a></li>
            <li><a href="servicios.php">Servicios</a></li>
            <li><a href="#">Iniciar sesion</a></li>
            <li><a class="waves-effect waves-light btn"><i class="material-icons left">cloud</i>Crea una cuenta</a></li>
            <!-- <li><a href="Talleres.php">Talleres</a></li> -->
            <!-- <li><a href="Terapias.php">Terapias</a></li> -->
            <!-- <li><a href="Espacios.php">Espacios</a></li> -->
            <!--Menú desplegable-->
            <li>
              <a href="#" class="dropdown-trigger" data-target="id_drop">
              Nosotros
              <i class="material-icons right">arrow_drop_down</i></a>
            </li>
          </ul>
          <!-- Menu para dispositivos pequeños-->
          <ul class="sidenav" id="menu-side">
            <!--opcion 1-->
            <li>
              <div class="user-view">
                <div class="background">
                  <img src="Imagenes/p2.jpg">
                </div>
                <!--En caso de usuarios inscritos (Muestra datos del usuario)-->
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
            <!-- Contenido del menu movil-->
            <li><a href="Productos.php">Productos</a></li>
            <!--<li><div class="divider"></div></li>-->
            <!-- <li><a href="Talleres.php">Talleres</a></li> -->
            <!-- <li><a href="Terapias.php">Terapias</a></li> -->
            <!-- <li><a href="Espacios.php">Espacios</a></li> -->
            <!--Menú desplegable-->
            <li>
              <a href="#" class="dropdown-trigger" data-target="id_drop2">
              Nosotros
              <i class="material-icons right">arrow_drop_down</i></a>
            </li>
          <!--Menu del dropdown P-->
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
      <!--Termino del menú de navegacion-->

      <div class="section">
        <div class="container">
        <div class="row">
          <div class="col 19 s12">
            <div class="slider">
              <ul class="slides container">
                <li>
                  <img class="responsive-img container" src="Imagenes/EQUIPO.jpg" alt="">
                </li>
                <li>
                  <img class="responsive-img container" src="Imagenes/PORTADA.jpg" alt="">
                </li>
              </ul>
            </div>
          </div>
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

     <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

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