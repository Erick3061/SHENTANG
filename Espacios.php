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
        <a href="index.php" class="brand-logo col sl3 hide-on-med-and-down"><img class="responsive-img" src="Imagenes/logop.png"></a>
          <a href="index.php" class="brand-logo col s12 hide-on-large-only"><img class="responsive-img" src="Imagenes/logop1.png"></a>
        <a href="#" data-target="menu-side" class="sidenav-trigger">
            <i class="material-icons">menu</i>
          </a>
          <!--Menu para ordenadores de resolcuion grande-->
          <ul class="right hide-on-med-and-down">
            <!--<li><a href="#">Servicios</a></li>-->
            <li><a href="Productos.php">Productos</a></li>
            <li><a href="Talleres.php">Talleres</a></li>
            <li><a href="#">Terapias</a></li>
            <li class="active"><a href="Espacios.php">Espacios</a></li>
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
                <a href="index.php" class="col s12 hide-on-large-only"><img class="responsive-img" src="Imagenes/logop1.png"></a>
                </a>
              </div>
            </li>
            <!-- Contenido del menu movil-->
            <li><a href="Productos.php">Productos</a></li>
            <!--<li><div class="divider"></div></li>-->
            <li><a href="Talleres.php">Talleres</a></li>
            <li><a href="#">Terapias</a></li>
            <li class="active"><a href="Espacios.php">Espacios</a></li>
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

      <!--Seccion 1-->
      <div class="section">
        <h3 class="center">Nuestros Espacios</h3>
        <div class="row">
          <div class="col l7 s10 offset-l3 offset-s1">
            <div class="nav-wrapper">
              <form>
                <div class="input-field">
                  <input id="search" type="search" required>
                  <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                  <i class="material-icons">close</i>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!--Fin de seccion 1-->

      <!--Seccion 2-->
      <div class="section">
        <div class="row">
          <!--Columna Izquiera (No se usa en este momento)-->
          <div class="col l2 hide-on-med-and-down">
            <span></span>
          </div>
          
          <!--Columna media (Contenido)-->
          <div class="col l10 s12">
            <!--Listado de los productos-->
            <div class="col s10 offset-s1 l4">
              <div class="card small">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="imagenes/p1.jpg">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">Nombre del producto<i class="material-icons right">more_vert</i></span>
                  <p><a href="producto.php">Ver producto</a></p>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Nombre del producto<i class="material-icons right">close</i></span>
                  <p>Informacion basica del producto</p>
                </div>
              </div>
            </div>
            <div class="col s10 offset-s1 l4 ">
              <div class="card small">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="imagenes/p1.jpg">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">Nombre del producto<i class="material-icons right">more_vert</i></span>
                  <p><a href="#">Ver producto</a></p>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Nombre del producto<i class="material-icons right">close</i></span>
                  <p>Informacion basica del producto</p>
                </div>
              </div>
            </div>
            <div class="col s10 offset-s1 l4">
              <div class="card small">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="imagenes/p1.jpg">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">Nombre del producto<i class="material-icons right">more_vert</i></span>
                  <p><a href="#">Ver producto</a></p>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Nombre del producto<i class="material-icons right">close</i></span>
                  <p>Informacion basica del producto</p>
                </div>
              </div>
            </div>
            <div class="col s10 offset-s1 l4 ">
              <div class="card small">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="imagenes/p1.jpg">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">Nombre del producto<i class="material-icons right">more_vert</i></span>
                  <p><a href="#">Ver producto</a></p>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Nombre del producto<i class="material-icons right">close</i></span>
                  <p>Informacion basica del producto</p>
                </div>
              </div>
            </div>

          </div>
          <!-- en caso de aside
          <div class="col l2 hide-on-med-and-down">
            
          </div>-->
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
      <script >
        document.addEventListener('DOMContentLoaded', function(){
          M.AutoInit();
        });

      </script>
      <script >

      </script>
    </body>
  </html>