function agregarProductoNuevo(){
	$.ajax({
		type: "POST",
		data:$('#FormPro').serialize(),
		url:"PHP/Productos/Nuevo_Pro.php",
		success:function(respuesta){
			respuesta=respuesta.trim();
			if (respuesta==1) {
				swal("Agregado", "Producto agregado correctamente", "success");
				$('#Tb_Gest_Pro').load("Vistas/Gestor/TablaGestorProductos.php");
			}else{
				swal("Error", "El producto no fue agregado", "error");
			}
		}
	});
	return false;
}
function eliminarProducto(id){
	swal({
		title: "¿Deseas eliminar este producto?",
		text: "Una vez eliminado no podra recuperar este producto",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			$.ajax({
				type:"POST",
				data:"ID="+id,
				url:"PHP/Productos/Eliminar_Pro.php",
				success:function(respuesta){
					respuesta=respuesta.trim();
					if (respuesta>=1) {
						swal("Correcto", "Producto eliminado", "success");
						$('#Tb_Gest_Pro').load("Vistas/Gestor/TablaGestorProductos.php");
					}else{
						swal("Error", "No se ha eliminado", "error");
					}
				}
			});
		} else {
			//swal("");
		}
	});
	return false;
}
function obteberDatosPro(id) {
	$.ajax({
		type:"POST",
		data:"ID="+id,  
		url:"PHP/Productos/ObtenerDatPro.php",
		success: function(respuesta){
			respuesta = jQuery.parseJSON(respuesta);
			$("#FormProM")[0].reset();
            M.updateTextFields();
            $('#IDS').val(respuesta['Id']);
			$('#nombre1').val(respuesta['Nombre']);
			$('#Cant1').val(respuesta['Cantidad']);
			$('#Tp1').val(respuesta['Tp']);
			$('#precio1').val(respuesta['Precio']);
            $('#stock1').val(respuesta['Stock']);
            $('#marca1').val(respuesta['Marca']);
            $('#modelo1').val(respuesta['Modelo']);
            $('#carac1').val(respuesta['Carac']);
		}
	});
}
function ModificarProducto(){
	$.ajax({
		type:"POST",
		data:$('#FormProM').serialize(),
		url:"PHP/Productos/ModificarPro.php",
		success: function(respuesta){
			respuesta=respuesta.trim();
			if (respuesta==1) {
				$('#Tb_Gest_Pro').load("Vistas/Gestor/TablaGestorProductos.php");
				swal("Correcto", "Producto actualizado", "success");
			}else{
				swal("Error", "Producto no actualizado", "error");
			}
		}
	});
	return false;
}