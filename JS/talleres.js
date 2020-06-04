function agregarTallerNuevo(){
	$.ajax({
		type: "POST",
		data:$('#FormTa').serialize(),
		url:"PHP/Talleres/Nuevo_Ta.php",
		success:function(respuesta){
			respuesta=respuesta.trim();
			if (respuesta==1) {
				swal("Agregado", "Taller agregado correctamente", "success");
				$('#Tb_Gest_Ta').load("Vistas/Gestor/TablaGestorTalleres.php");
			}else{
				swal("Error", "El taller no fue agregado", "error");
			}
		}
	});
	return false;
}
function eliminarTaller(id){
	swal({
		title: "¿Deseas eliminar este taller?",
		text: "Una vez eliminado no podra recuperar este taller",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			$.ajax({
				type:"POST",
				data:"ID="+id,
				url:"PHP/Talleres/Eliminar_Ta.php",
				success:function(respuesta){
					respuesta=respuesta.trim();
					if (respuesta>=1) {
						swal("Correcto", "Taller eliminado", "success");
						$('#Tb_Gest_Ta').load("Vistas/Gestor/TablaGestorTalleres.php");
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
function obteberDatosTa(id) {
	$.ajax({
		type:"POST",
		data:"ID="+id,  
		url:"PHP/Talleres/ObtenerDatTa.php",
		success: function(respuesta){
			respuesta = jQuery.parseJSON(respuesta);
			$("#FormTaM")[0].reset();
            M.updateTextFields();
            $('#IDS').val(respuesta['ID']);
			$('#nombre1').val(respuesta['Nombre']);
			$('#info1').val(respuesta['Info']);
			$('#precio1').val(respuesta['Precio']);
		}
	});
}
function ModificarTaller(){
	$.ajax({
		type:"POST",
		data:$('#FormTaM').serialize(),
		url:"PHP/Talleres/ModificarTa.php",
		success: function(respuesta){
			respuesta=respuesta.trim();
			if (respuesta==1) {
				$('#Tb_Gest_Ta').load("Vistas/Gestor/TablaGestorTalleres.php");
				swal("Correcto", "Taller actualizado", "success");
			}else{
				swal("Error", "Taller no actualizado", "error");
			}
		}
	});
	return false;
}