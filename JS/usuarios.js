function agregarUNuevo(){
	$.ajax({
		type: "POST",
		data:$('#FormU').serialize(),
		url:"PHP/Usuarios/Nuevo_U.php",
		success:function(respuesta){
			respuesta=respuesta.trim();
			if (respuesta==1) {
				swal("Agregado", "Usuario agregado correctamente", "success");
				$('#Tb_Gest_U').load("Vistas/Gestor/TablaGestorUsuarios.php");
				location.href = "Administrar_Usuarios.php";
			}else{
				swal("Error", "Usuario no fue agregado", "error");
				$("#FormU")[0].reset();
				M.updateTextFields();
				$('#Tb_Gest_U').load("Vistas/Gestor/TablaGestorUsuarios.php");
			}
		}
	});
	return false;
}
function eliminarU(id){
	swal({
		title: "¿Deseas eliminar este Usuario?",
		text: "Una vez eliminado no podra recuperar este Usuario",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			$.ajax({
				type:"POST",
				data:"ID="+id,
				url:"PHP/Usuarios/Eliminar_U.php",
				success:function(respuesta){
					respuesta=respuesta.trim();
					if (respuesta>=1) {
						swal("Correcto", "Usuario eliminado", "success");
						$('#Tb_Gest_U').load("Vistas/Gestor/TablaGestorUsuarios.php");
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
function obteberDatosU(id) {
	$.ajax({
		type:"POST",
		data:"ID="+id,  
		url:"PHP/Usuarios/ObtenerDatU.php",
		success: function(respuesta){
			respuesta = jQuery.parseJSON(respuesta);
			$("#FormU")[0].reset();
            M.updateTextFields();
            $('#IDS').val(respuesta['ID']);
			$('#nombre1').val(respuesta['Nombre']);
			$('#usr1').val(respuesta['Usr']);
            $('#email1').val(respuesta['Email']);
            $('#per1').val(respuesta['Per']);
		}
	});
}