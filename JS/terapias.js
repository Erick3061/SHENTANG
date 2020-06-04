function agregarTerapiaNuevo(){
	$.ajax({
		type: "POST",
		data:$('#FormTe').serialize(),
		url:"PHP/Terapias/Nuevo_Te.php",
		success:function(respuesta){
			respuesta=respuesta.trim();
			if (respuesta==1) {
				swal("Agregado", "Terapia agregada correctamente", "success");
				$('#Tb_Gest_Te').load("Vistas/Gestor/TablaGestorTerapias.php");
			}else{
				swal("Error", "La terapia no fue agregado", "error");
			}
		}
	});
	return false;
}
function eliminarTerapia(id){
	swal({
		title: "¿Deseas eliminar esta terapia?",
		text: "Una vez eliminado no podra recuperar esta terapia",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			$.ajax({
				type:"POST",
				data:"ID="+id,
				url:"PHP/Terapias/Eliminar_Te.php",
				success:function(respuesta){
					respuesta=respuesta.trim();
					if (respuesta>=1) {
						swal("Correcto", "Terapia eliminada", "success");
						$('#Tb_Gest_Te').load("Vistas/Gestor/TablaGestorTerapias.php");
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
function obteberDatosTe(id) {
	$.ajax({
		type:"POST",
		data:"ID="+id,  
		url:"PHP/Terapias/ObtenerDatTe.php",
		success: function(respuesta){
			respuesta = jQuery.parseJSON(respuesta);
			$("#FormTeM")[0].reset();
            M.updateTextFields();
            $('#IDS').val(respuesta['ID']);
			$('#nombre1').val(respuesta['Nombre']);
			$('#info1').val(respuesta['Info']);
			$('#precio1').val(respuesta['Precio']);
		}
	});
}
function ModificarTerapia(){
	$.ajax({
		type:"POST",
		data:$('#FormTeM').serialize(),
		url:"PHP/Terapias/ModificarTe.php",
		success: function(respuesta){
			respuesta=respuesta.trim();
			if (respuesta==1) {
				$('#Tb_Gest_Te').load("Vistas/Gestor/TablaGestorTerapias.php");
				swal("Correcto", "Terapia actualizada", "success");
			}else{
				swal("Error", "Terapia no actualizada", "error");
			}
		}
	});
	return false;
}