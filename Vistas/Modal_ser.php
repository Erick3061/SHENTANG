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
<!--Modal modificacion servicio-->
<div id="modal2" class="modal">
	<div class="modal-content">
		<h5>Modificar servicio</h5>
		<div class="row">
			<form id="FormSerM" method="POST" onsubmit="return ModificarServicio()">
				<div class="input-field col s12 l6 hide">
					<input type="number" id="IDS" name="IDS" class="validate">
					<label for="IDS">ID</label>
				</div>
				<div class="input-field col s12 l6">
					<input placeholder="" id="nombre1" name="nombre1" type="text" class="validate" required>
					<label for="nombre1">Nombre</label>
				</div>
				<div class="input-field col s12 l6">
					<textarea placeholder="" id="Cont1" name="Cont1" class="validate materialize-textarea" required=""></textarea>
					<label for="Cont1">Contenido</label>
				</div>
				<div class="input-field col s12 l6">
					<input placeholder="" id="precio1" name="precio1" type="number" class="validate" required>
					<label for="precio1">Precio</label>
				</div>
				<div class="input-field col s12 l6">
					<input placeholder="" id="MaxP1" name="MaxP1" type="number" class="validate" required>
					<label for="MaxP1">Personas</label>
				</div>
				<div class="input-field col s12 l6">
					<input placeholder="" id="Ses1" name="Ses1" type="number" class="validate" required>
					<label for="Ses1">Sesiones</label>
				</div>
				<div class="col s12">
					<button class="center btn btn-large">Modificar</button>
				</div>
			</form>
		</div>
	</div>
	<div class="modal-footer">
		<a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
	</div>
</div>