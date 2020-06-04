<!--Modla nuevo servicio-->
<div id="modal1te" class="modal">
	<div class="modal-content">
		<h5>Nueva terapia</h5> 
		<div class="row">
			<form id="FormTe" method="POST" onsubmit="return agregarTerapiaNuevo()">
				<div class="input-field col s12 l6">
					<input id="nombre" name="nombre" type="text" class="validate" required>
					<label for="nombre">Nombre</label>
				</div>
				<div class="input-field col s12 l6">
					<textarea id="info" name="info" class="validate materialize-textarea" required=""></textarea>
					<label for="info">contenido</label>
				</div>
                <div class="input-field col s12 l6">
					<input id="precio" name="precio" type="number" class="validate" required>
					<label for="precio">Precio</label>
                </div>
				<div class="col s12">
					<button class="center btn btn-large amber lighten-1">Registrar</button>
				</div>
			</form>
		</div>
	</div>
	<div class="modal-footer">
		<a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
	</div>
</div>
<!--Modal modificacion producto-->
<div id="modal2te" class="modal">
	<div class="modal-content">
		<h5>Modificar terapia</h5>
		<div class="row">
			<form id="FormTeM" method="POST" onsubmit="return ModificarTerapia()">
				<div class="input-field col s12 l6 hide">
					<input type="number" id="IDS" name="IDS" class="validate">
					<label for="IDS">ID</label>
				</div>
				<div class="input-field col s12 l6">
					<input placeholder="" id="nombre1" name="nombre1" type="text" class="validate" required>
					<label for="nombre1">Nombre</label>
				</div>
				<div class="input-field col s12 l6">
					<textarea placeholder="" id="info1" name="info1" class="validate materialize-textarea" required=""></textarea>
					<label for="info1">contenido</label>
				</div>
				<div class="input-field col s12 l6">
					<input placeholder="" id="precio1" name="precio1" type="number" class="validate" required>
					<label for="precio1">Precio</label>
				</div>
				<div class="col s12">
					<button class="center btn btn-large amber lighten-1">Modificar</button>
				</div>
			</form>
		</div>
	</div>
	<div class="modal-footer">
		<a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
	</div>
</div>