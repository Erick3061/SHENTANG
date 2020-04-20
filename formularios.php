
<html lang="en">
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
          <a href="index.php" class="modal-close waves-effect waves-green btn-flat">CERRAR</a>
        </div>
      </div>
      <!-- ¡QUIENES SOMOS? -->
      <div id="somos" class="modal white z-depth-4">
        <div class="modal-content">
          <h5 style="margin-bottom: 10%;" class="center-align">¿QUIENES SOMOS?</h5>
          <p class="hide" id="Msg">Hola</p>
          <h6>Somos un Centro Multidisciplinario que tiene como objetivo ayudarte a crecer de manera integral mediante herramientas alternativas y con el mejor equipo de profesionales en el ámbito.</h6>
        </div>

        <div class="modal-footer">
          <a href="#" class="modal-close waves-effect waves-green btn-flat">CERRAR</a>
        </div>
      </div>
      <!-- MISION  -->
      <div id="mision" class="modal white z-depth-4">
        <div class="modal-content">
          <h5 style="margin-bottom: 10%;" class="center-align">MISIÓN</h5>
          <p class="hide" id="Msg">Hola</p>
          <h6>Alcanzar un bienestar físico, emocional, sentimental y espiritual con ayuda de las distintas terapias alternativas ayudando a la autosanación de la naturaleza del ser humano.</h6>
          <h6>Es por eso que ShenTang cuenta con profesionales de excelencia, quienes, basados en una política de respeto por la integridad y privacidad de cada paciente, están comprometidos a apoyar el crecimiento personal orientado al cambio de mejores hábitos para vivir saludablemente.</h6>
        </div>

        <div class="modal-footer">
          <a href="#" class="modal-close waves-effect waves-green btn-flat">CERRAR</a>
        </div>
      </div>
      <!-- VISION -->
      <div id="vision" class="modal white z-depth-4">
        <div class="modal-content">
          <h5 style="margin-bottom: 10%;" class="center-align">VISIÓN</h5>
          <p class="hide" id="Msg">Hola</p>
          <h6>Dar a conocer los beneficios que tiene cada terapia y demostrar que el terapeuta actúa como facilitador de salud, aplicando la terapia más adecuada según cada caso.</h6>
          <h6>Nuestra visión es crecer y ser recomendados nuestros pacientes que han sido testigos del cambio.</h6>
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
            <li><a href="#somos" class="modal-trigger">¿Quienes somos?</a></li>
            <li><a href="#mision" class="modal-trigger">Misión</a></li>
            <li><a href="#vision" class="modal-trigger">Visión</a></li>
          </ul>

          <ul id="exit" class="dropdown-content">
            <li><a a href="#Cerrarses" class="modal-trigger">Cerrar sesion</a></li>
          </ul>
          <ul id="exit2" class="dropdown-content">
            <li><a a href="#Cerrarses" class="modal-trigger">Cerrar sesion</a></li>
          </ul>
          <ul id="id_drop2" class="dropdown-content">
            <li><a href="#somos" class="modal-trigger">¿Quienes somos?</a></li>
            <li><a href="#mision" class="modal-trigger">Misión</a></li>
            <li><a href="#vision" class="modal-trigger">Visión</a></li>
          </ul>

  <!-- <div id="YOGA" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat green">Agree</a>
    </div>
  </div> -->

</html>