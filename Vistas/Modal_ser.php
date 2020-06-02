<!--Modla nuevo servicio-->
<div id="modal1" class="modal">
	<div class="modal-content">
		<h5>Nuevo servicio</h5>
		<div class="row">
			<form id="FormSer" method="POST" onsubmit="return agregarServicioNuevo()">
				<div class="input-field col s12 l6">
					<input id="nombre" name="nombre" type="text" class="validate" required>
					<label for="nombre">Nombre</label>
				</div>
				<div class="input-field col s12 l6">
					<textarea id="Cont" name="Cont" class="validate materialize-textarea" required=""></textarea>
					<label for="Cont">Contenido</label>
				</div>
				<div class="input-field col s12 l6">
					<input id="precio" name="precio" type="number" class="validate" required>
					<label for="precio">Precio</label>
				</div>
				<div class="input-field col s12 l6">
					<input id="MaxP" name="MaxP" type="number" class="validate" required>
					<label for="MaxP">Personas</label>
				</div>
				<div class="input-field col s12 l6">
					<input id="Ses" name="Ses" type="number" class="validate" required>
					<label for="Ses">Sesiones</label>
				</div>
				<div class="col s12">
					<button class="center btn btn-large">Registrar</button>
				</div>
			</form>
		</div>
	</div>
	<div class="modal-footer">
		<a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
	</div>
</div>