<!--Modla nuevo servicio-->
<div id="modal1U" class="modal">
	<div class="modal-content">
		<h5>Nuevo Usuario</h5> 
		<div class="row">
			<form id="FormU" method="POST" onsubmit="return agregarUNuevo()">
				<div class="input-field col s12 l6">
					<input id="nombre" name="nombre" type="text" class="validate" required>
					<label for="nombre">Nombre</label>
				</div>
				<div class="input-field col s12 l6">
					<textarea id="usr" name="usr" class="validate materialize-textarea" required=""></textarea>
					<label for="usr">Usuario</label>
				</div>
                <div class="input-field col s12 l6">
					<input id="pass" name="pass" type="password" class="validate" required>
					<label for="pass">Contraseña</label>
                </div>
                <div class="input-field col s12 l6">
					<input id="email" name="email" type="email" class="validate" required>
					<label for="email">Email</label>
                </div>
				<div class="col s12">
					<button class="center btn btn-large blue lighten-1">Registrar Usuario</button>
				</div>
			</form>
		</div>
	</div>
	<div class="modal-footer">
		<a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
	</div>
</div>