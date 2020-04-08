<!-- INICIAR SESION -->
<div id="Registro" class="modal white z-depth-4">
        <div class="modal-content">
          <h5 style="margin-bottom: 10%;" class="center-align">INICIAR SESION</h5>
          <p class="hide" id="Msg">Hola</p>
          <form id="login" action="login.php" name="creausr1" method="POST" onsubmit="return verifica()">
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
          <a href="index.php" class="modal-close waves-effect waves-green btn-flat">CERRAR</a>
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
          <form id="creausr" action="crearuser.php" name="creausr" method="POST" onsubmit="return verifica2()">
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
              <input class=" waves-effect waves-ligth green" name="botoncu" type="submit" id="btnreg" value="CREAR CUENTA">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <a href="#" class="modal-close waves-effect waves-green btn-flat">CERRAR</a>
        </div>
      </div>
      <!--Menu del dropdown P-->
      <ul id="id_drop" class="dropdown-content">
            <li><a href="#">¿Quienes somos?</a></li>
            <li><a href="#">Mision</a></li>
            <li><a href="#">Vision</a></li>
          </ul>

          <ul id="exit" class="dropdown-content">
            <li><a a href="#Cerrarses" class="modal-trigger">Cerrar sesion</a></li>
          </ul>
          <ul id="exit2" class="dropdown-content">
            <li><a a href="#Cerrarses" class="modal-trigger">Cerrar sesion</a></li>
          </ul>
          <ul id="id_drop2" class="dropdown-content">
            <li><a href="#">¿Quienes somos?</a></li>
            <li><a href="#">Mision</a></li>
            <li><a href="#">Vision</a></li>
          </ul>