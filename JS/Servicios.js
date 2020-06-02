function agregarServicioNuevo () {
	$.ajax({
		method: "POST",
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
		title: "Deseas elimianr este servicio?",
		text: "Una vez eliminado no podra recuperar este servicio",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			$.ajax({
				method:"POST",
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
		method:"POST",
		data:"ID="+id,
		url:"PHP/Servicios/ObtenerDat.php",
		success:function(respuesta){
			
		}
	});
	return false;
}