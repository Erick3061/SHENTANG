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
          <a href="index.php" class="brand-logo col sl3 hide-on-med-and-down"><img class="circle responsive-img" src="Imagenes/logop.png"></a>
          <a href="index.php" class="brand-logo col s12 hide-on-large-only"><img class="circle responsive-img" src="Imagenes/logop1.png"></a>
          <a href="#" data-target="menu-side" class="sidenav-trigger">
            <i class="material-icons">menu</i>
          </a>
          <!--Menu para ordenadores de resolcuion grande-->
          <ul class="right hide-on-med-and-down">
            <li><a href="index.php">Pagina Principal</a></li>
            <li class="active"><a href="#">Crear cuenta</a></li>
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
            <li><a href="index.php">Pagina Principal</a></li>
            <li class="active"><a href="#">Crear cuenta</a></li>
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

     <div class="section container">
         <!-- <table class="red"> -->
            <div class="row">
                <!-- formulario en moviles -->
                <form class="col s12 show-on-small hide-on-large-only" action="insertu.php" method="POST" name="fvalida1">
                <div class="row">
                    <div class="container col s4 offset-s4">
                        <img class="responsive-img" src="Imagenes/2.jpg" alt="">
                    </div>
                    <div class="col s12 section">
                        <p>
                            
                        </p>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="Nombre" id="nombre" type="text" class="validate" name="nombre">
                        <label for="nombre">NOMBRE</label>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="Apellidos" id="apellidos" type="text" class="validate" name="apellidos">
                        <label for="apellidos">APELLIDOS</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Usuario" id="usuario" type="text" class="validate" name="usuario">
                        <label for="user">USUARIO</label>
                    </div>
                    <!-- <div class="input-field col s6">
                        <input placeholder="Fecha de Nacimiento" id="fecha" type="date" class="validate">
                        <label for="fecha">FECHA DE NACIMIENTO</label>
                    </div> -->
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="Contraseña" id="password" type="password" class="validate" name="contraseña">
                        <label for="contraseña">CONTRASEÑA</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="email" id="email" type="email" class="validate" name="email">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field center">
                        <input class="waves-effect waves-light btn" type="submit" value="ENVIAR" id="enviar" name="enviar"> 
                    </div>
                </div>
                </form>
                <!-- formulario en desktop y tabletas -->
                <form class="col s8 offset-s2 show-on-large hide-on-med-and-down" action="insertu.php" method="POST" name="fvalida">
                <div class="row">
                    <div class="container col s4 offset-s4">
                        <img class="responsive-img" src="Imagenes/2.jpg" alt="">
                    </div>
                    <div class="col s12 section">
                        <p>
                            
                        </p>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="Nombre" id="nombre" type="text" class="validate" name="nombre" required>
                        <label for="nombre">NOMBRE</label>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="Apellidos" id="apellidos" type="text" class="validate" name="apellidos" required>
                        <label for="apellidos">APELLIDOS</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Usuario" id="usuario" type="text" class="validate" name="usuario" required>
                        <label for="usuario">USUARIO</label>
                    </div>
                   <!--  <div class="input-field col s6">
                        <input placeholder="Fecha de Nacimiento" id="fecha" type="date" class="validate">
                        <label for="fecha">FECHA DE NACIMIENTO</label>
                    </div> -->
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="Contraseña" id="password" type="password" class="validate" name="password"required>
                        <label for="contraseña">CONTRASEÑA</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="email" id="email" type="email" class="validate" name="email"required>
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field center">
                        <input class="waves-effect waves-light btn" type="submit" value="ENVIAR" id="enviar" name="enviar">
                    </div>
                </div>
                </form>
            </div>
         <!-- </table> -->
     </div>
      <!-- Bola flotante
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
      </div> -->
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
              <!-- <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div> -->
            </div>
          </div>
          <div class="footer-copyright center">
            <div class="container">
            © 2014 Copyright Text
            
            </div>
          </div>
        </footer>
      <!-- VALIDAR CAMPOS DEL FORMULARIO -->
      <script>
      function validar_formulario(){
        if (document.fvalida1.nombre.value.length==0){
      		alert("Tiene que escribir su nombre")
      		document.fvalida1.nombre.focus()
      		return 0;
   	    }
        
        alert("Muchas gracias por enviar el formulario");
   	    document.fvalida1.submit();
      }
      </script>
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