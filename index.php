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
    <?php
        $adentro=false;
        session_start();
        if(!isset($_SESSION["user"])){
          echo "<p>";
          echo "sesion no inicada";
          echo "</p>";
          $adentro=false;
        }else{
          echo "<p>";
          echo "session iniciada";
          echo "</p>";
          $adentro=true;
        }
      ?>
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
            <!--<li><a href="#">Servicios</a></li>-->
            <li><a href="Productos.php">Productos</a></li>
            <li><a href="servicios.php">Servicios</a></li>
            <?php if ($adentro==false){?>
              <!-- CUANDO NO SE HA INICIADO SESION -->
            <li><a href="#Registro" class="modal-trigger">
              <span class="white-text">Iniciar Sesion</span>
            </a></li>
            <li>
              <a href="#" class="dropdown-trigger" data-target="id_drop">
              Nosotros
              <i class="material-icons right">arrow_drop_down</i></a>
            </li>
            <?php }else{?>
              <!-- CUANDO SE INICIO SESION -->
              <li><a href="Talleres.php">Talleres</a></li>
              <li><a href="Terapias.php">Terapias</a></li>
              <li><a href="Espacios.php">Espacios</a></li>
              <!-- <li>
                <a href="#" class="dropdown-trigger" data-target="id_drop">
                Nosotros
                <i class="material-icons right">arrow_drop_down</i></a>
              </li> -->
              <li>
                  <a href="#" class="dropdown-trigger" data-target="exit">
                    <span class="name white-text "><?php echo $_SESSION["user"]; ?></span>
                    <i class="material-icons right">arrow_drop_down</i></a>
              </li>
            <?php }?>
            <!--Menú desplegable-->
            
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
            <li><a href="servicios.php">Servicios</a></li>
            <li><a href="#Registro" class="modal-trigger">
              <span class="black-text">Iniciar Sesion</span>
            </a></li>
            <!--<li><div class="divider"></div></li>-->
            <li></li>
            
            
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

          <ul id="exit" class="dropdown-content">
            <li><a a href="#Cerrarses" class="modal-trigger">Cerrar sesion</a></li>
          </ul>

          <ul id="id_drop2" class="dropdown-content">
            <li><a href="#">¿Quienes somos?</a></li>
            <li><a href="#">Mision</a></li>
            <li><a href="#">Vision</a></li>
          </ul>
        </div>
      </nav>
      <!--Termino del menú de navegacion-->
      <!-- verificar session -->
     
      <!-- INICIAR SESION -->
      <div id="Registro" class="modal white z-depth-4">
        <div class="modal-content">
          <h5 style="margin-bottom: 10%;" class="center-align">INICIAR SESION</h5>
          <p class="hide" id="Msg">Hola</p>
          <form id="login" action="login.php" name="creausr1" method="POST">
            <div class="input-field">
              <input type="text" name="usuario" id="nombre" class="validate" required>
              <label for="nombre">USUARIO</label>
            </div>
            <div class="input-field">
              <input type="password" name="password" id="contra" class="validate" required>
              <label for="contra">CONTRASEÑA</label>
            </div>
            <div class="row">
                <a href="#Crearcuenta" class="col s6 modal-close modal-trigger" >Crear cuenta</a>
                <a href="#" class="col s6 right-align">Olvide mi contraseña</a>
            </div>
            <div class="center-align"> 
              <input class="btn-large waves-effect waves-ligth green" name="botonlog" type="submit" id="btn" value="INICIAR SESION">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <a href="#" class="modal-close waves-effect waves-green btn-flat">CERRAR</a>
        </div>
      </div>
      <!-- CERRAR SESION -->
      <div id="Cerrarses" class="modal white z-depth-4">
        <div class="modal-content">
          <h5 style="margin-bottom: 10%;" class="center-align">¿DE VERDAD DESEA CERRAR SESION?</h5>
          <p class="hide" id="Msg">Hola</p>
          <form id="cerrar" action="cerrar.php" name="exit" method="POST">
            <div class="center-align">
              <input class="btn-large waves-effect waves-ligth green" name="botoncs" type="submit" id="cs" value="SALIR">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <a href="#" class="modal-close waves-effect waves-green btn-flat">CERRAR</a>
        </div>
      </div>
      <!-- CREAR USUARIO -->
      <script src='valida.js' class="modal white z-depth-4">
      </script> 
      <div id="Crearcuenta" class="modal white z-depth-4">
        <div class="modal-content">
          <h5 style="margin-bottom: 10%;" class="center-align">CREAR CUENTA</h5>
          <p class="hide" id="Msg">Hola</p>
          <form id="creausr" action="" name="creausr" method="POST">
            <div class="input-field">
              <input type="text" name="nombre" id="nom" class="validate" required
              placeholder="Ingrese su nombre">
              <label for="nombre">NOMBRE</label>
            </div>
            <div class="input-field">
              <input type="text" name="usr" id="usr" class="validate" required
              placeholder="Ingrese su usuario">
              <label for="nombre">USUARIO</label>
            </div>
            <div class="input-field">
              <input type="password" name="contra" id="contra" class="validate" required
              placeholder="Ingrese su contraseña">
              <label for="contra">CONTRASEÑA</label>
            </div>
            <div class="input-field">
              <input type="email" name="email" id="email" class="validate" required
              placeholder="Ingrese su email">
              <label for="nombre">EMAIL</label>
            </div>
            <div class="center-align"> 
              <input class=" waves-effect waves-ligth green" name="boton" type="submit" id="btnreg" value="CREAR CUENTA">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <a href="#" class="modal-close waves-effect waves-green btn-flat">CERRAR</a>
        </div>
      </div>
      
      <?php
      require("crearuser.php"); 
      ?>

     <div class="section container">
          <img class="responsive-img" src="Imagenes/EQUIPO.jpg" alt="">
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