<!--Modla nuevo servicio-->
<div id="modal1p" class="modal">
	<div class="modal-content">
		<h5>Nuevo producto</h5>
		<div class="row">
			<form id="FormPro" method="POST" onsubmit="return agregarProductoNuevo()">
				<div class="input-field col s12 l6">
					<input id="nombre" name="nombre" type="text" class="validate" required>
					<label for="nombre">Nombre</label>
				</div>
				<div class="input-field col s12 l6">
					<textarea id="Cant" name="Cant" class="validate materialize-textarea" required=""></textarea>
					<label for="Cant">Cantidad</label>
				</div>
				<div class="input-field col s12 l6">
					<input id="tp" name="tp" type="text" class="validate" required>
					<label for="tp">Tipo de producto</label>
                </div>
                <div class="input-field col s12 l6">
					<input id="precio" name="precio" type="number" class="validate" required>
					<label for="precio">Precio</label>
                </div>
                <div class="input-field col s12 l6">
					<input id="stock" name="stock" type="number" class="validate" required>
					<label for="stock">Stock</label>
                </div>
                <div class="input-field col s12 l6">
					<input id="marca" name="marca" type="text" class="validate" required>
					<label for="marca">Marca</label>
                </div>
                <div class="input-field col s12 l6">
					<input id="modelo" name="modelo" type="text" class="validate" required>
					<label for="modelo">Modelo</label>
				</div>
				<div class="input-field col s12 l6">
					<input id="caracteristicas" name="caracteristicas" type="text" class="validate" required>
					<label for="caracteristicas">Caracteristicas</label>
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
<div id="modal2p" class="modal">
	<div class="modal-content">
		<h5>Modificar producto</h5>
		<div class="row">
			<form id="FormProM" method="POST" onsubmit="return ModificarProducto()">
				<div class="input-field col s12 l6 hide">
					<input type="number" id="IDS" name="IDS" class="validate">
					<label for="IDS">ID</label>
				</div>
				<div class="input-field col s12 l6">
					<input placeholder="" id="nombre1" name="nombre1" type="text" class="validate" required>
					<label for="nombre1">Nombre</label>
				</div>
				<div class="input-field col s12 l6">
					<textarea placeholder="" id="Cant1" name="Cant1" class="validate materialize-textarea" required=""></textarea>
					<label for="Cant1">Cantidad</label>
				</div>
				<div class="input-field col s12 l6">
					<input placeholder="" id="Tp1" name="Tp1" type="text" class="validate" required>
					<label for="Tp1">Tipo de producto</label>
				</div>
				<div class="input-field col s12 l6">
					<input placeholder="" id="precio1" name="precio1" type="number" class="validate" required>
					<label for="precio1">Precio</label>
				</div>
				<div class="input-field col s12 l6">
					<input placeholder="" id="stock1" name="stock1" type="number" class="validate" required>
					<label for="stock1">Stock</label>
				</div>
				<div class="input-field col s12 l6">
					<input placeholder="" id="marca1" name="marca1" type="text" class="validate" required>
					<label for="marca1">Marca</label>
				</div>
				<div class="input-field col s12 l6">
					<input placeholder="" id="modelo1" name="modelo1" type="text" class="validate" required>
					<label for="modelo1">Modelo</label>
				</div>
				<div class="input-field col s12 l6">
					<input placeholder="" id="carac1" name="carac1" type="text" class="validate" required>
					<label for="carac1">Caracteristicas</label>
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