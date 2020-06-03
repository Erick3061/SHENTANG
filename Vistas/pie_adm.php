<footer class="page-footer light-green lighten-2">
	<div class="container">
		<div class="row">
			<div class="col l6 s12">
				<h5 class="white-text">Contacto</h5>
				<ul>
					<li>
						<a>
							<i class="material-icons black-text">call</i>
						</a>
						<span>(222) 2490429 o 2222177728</span>
					</li>
					<li>
						<a>
							<i class="material-icons black-text">email</i>
						</a>
						<span>centro.shentang.puebla@gmail.com</span>
					</li>
					<li>
						<a href="#" >
							<i class="material-icons black-text">add_location</i>
						</a>
						<span>TEPEYAHUALCO NO.37-1, COL. LA PAZ, PUEBLA PUE. CP.72160</span>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer-copyright center">
		<div class="container">
			© 2020 Shen Tang

		</div>
	</div>
</footer>
</body>
</html>
<script >
  document.addEventListener('DOMContentLoaded', function(){
    M.AutoInit();
  });
  function cerrar () {
    swal({
      title: "Cerrar sesión",
      text: "¿Deseas cerrar sesión?",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        swal("Cerrando sesion", {
          icon: "success",
        });
        window.location.assign("PHP/Usuarios/cerrar.php");
      } else {
        swal("No se ah cerrado sesion");
      }
    });
  }
</script>