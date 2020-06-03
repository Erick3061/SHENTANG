function agregarServicioNuevo () {
	$.ajax({
		type: "POST",
		data:$('#FormSer').serialize(),
		url:"PHP/Servicios/Nuevo_Ser.php",
		success:function(respuesta){
			respuesta=respuesta.trim();
			if (respuesta==1) {
				swal("Agregado", "Servicio agregado correctamente", "success");
				$('#Tb_Gest_Ser').load("Vistas/Gestor/TablaGestorServicios.php");
			}else{
				swal("Error", "El servicio no fue agregado", "error");
			}
		}
	});
	return false;
}
function eliminarServicio(id){
	swal({
		title: "¿Deseas eliminar este servicio?",
		text: "Una vez eliminado no podra recuperar este servicio",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			$.ajax({
				type:"POST",
				data:"ID="+id,
				url:"PHP/Servicios/Eliminar_Ser.php",
				success:function(respuesta){
					respuesta=respuesta.trim();
					if (respuesta==1) {
						swal("Correcto", "Servicio eliminado", "success");
						$('#Tb_Gest_Ser').load("Vistas/Gestor/TablaGestorServicios.php");
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
function obteberDatosServ (id) {
	$.ajax({
		type:"POST",
		data:"ID="+id,
		url:"PHP/Servicios/ObtenerDat.php",
		success: function(respuesta){
			respuesta = jQuery.parseJSON(respuesta);
			$("#FormSerM")[0].reset();
            M.updateTextFields();
            $('#IDS').val(respuesta['ID']);
			$('#nombre1').val(respuesta['Nombre']);
			$('#Cont1').val(respuesta['Contenido']);
			$('#precio1').val(respuesta['Precio']);
			$('#MaxP1').val(respuesta['Personas']);
			$('#Ses1').val(respuesta['Sesiones']);
		}
	});
}
function ModificarServicio(){
	$.ajax({
		type:"POST",
		data:$('#FormSerM').serialize(),
		url:"PHP/Servicios/ModificarSer.php",
		success: function(respuesta){
			respuesta=respuesta.trim();
			if (respuesta==1) {
				$('#Tb_Gest_Ser').load("Vistas/Gestor/TablaGestorServicios.php");
				swal("Correcto", "Servicio actualizado", "success");
			}else{
				swal("Error", "Servicio no actualizado", "error");
			}
		}
	});
	return false;
}