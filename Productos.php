<?php
/* forzar a que cuando se muestre la pagina de productos sea en la pagina 1 */
if(!$_GET){
  header('Location:Productos.php?pagina=1');
}
require ("PHP/conexiondb.php");
/* CONEXION A BASE DE DATOS CON PDO */
/* consulta */
$sql="select * from productos";
/* preparar los metodos */
$resultado=$base->prepare($sql);
$resultado->execute();
$ban=true;
/* numero de productos por pagina */
$productos_x_pagina=10;
/* numero de productos en la base de datos */
$num_productos_db=$resultado->rowCount();
$num_productos_db=$num_productos_db;
/* numero de paginas correspondiente al numero de productos de la base de datos */
$paginas=$num_productos_db/$productos_x_pagina;
$paginas=ceil($paginas);
/* variable para iniciar la consulta del rango de la consulta */
$inicar=($_GET['pagina']-1)*$productos_x_pagina;
/* consulta con base a los productos por pagina */
$sql="select * from productos limit :ini,:numpro";
/* preparar los metodos */
$resultado=$base->prepare($sql);
$resultado->bindParam(':ini',$inicar,PDO::PARAM_INT);
$resultado->bindParam(':numpro',$productos_x_pagina,PDO::PARAM_INT);
$resultado->execute();
?>
<?php
include "Vistas/header.php";
?>
<?php include "Vistas/formularios.php"; ?>
<!--Seccion 1 Menu de bsuqueda-->
<div class="section">
  <h3 class="center">Nuestros productos</h3>
  <div class="row">
    <div class="col l7 s10 offset-l3 offset-s1">
      <!--<div class="nav-wrapper">
        <form>
          <div class="input-field">
            <input id="search" type="search" required>
            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
            <i class="material-icons">close</i>
          </div>
        </form>
      </div>-->
    </div>
  </div>
</div>
<!--Fin de seccion 1-->

<!--Seccion 2-->
<div class="section">
  <div class="row">
    <!--Columna Izquiera (No se usa en este momento)-->
    <div class="col l2 hide-on-med-and-down">
      <span></span>
    </div>

    <!--Columna media (Contenido)-->
    <div class="col l10 s12">
      <?php
      $contador=1; 
      while($ban==true){
        if(($registro=$resultado->fetch(PDO::FETCH_OBJ))==true){
              //for($i=0;$i<=$tam-1;$i++){      
          $id=$registro->IDP;
          $nomp=$registro->NOMBRE;
          $catp=$registro->CANTIDAD;
          $presen=$registro->TIPO_PRODUCTO;
          $costo=$registro->PRECIO;
          $marca=$registro->MARCA;
          $mod=$registro->MODELO;
          $caract=$registro->CARACTERISTICAS;
          $numpagina=$_GET['pagina'];
          ?>
          <!--Listado de los productos-->
          <div class="col s10 offset-s1 l4">
            <div class='card medium'>
              <div class='card-image waves-effect waves-block waves-light'>
                <img class='activator' src='Imagenes/PRODUCTOS/<?php echo $nomp; ?>.jpg'>
              </div>
              <div class='card-content' >
                <span class='card-title activator grey-text text-darken-4'><?php echo $nomp; ?><i class='material-icons right'>more_vert</i></span>
              </div>

              <div class='card-reveal'>
                <span style='font-weight: bold' class='card-title black-text text-darken-4 flow-textx'><i class='material-icons right'>close</i></span>
                <h5><?php echo $nomp; ?></h5>
                <p style='font-weight: bold' class='green-text text-darken-2 flow-textx'>INFORMACIÓN BASICA DEL PRODUCTO</p>
                <p>Cantidad: <?php echo $catp; ?></p>
                <p>Tipo de producto: <?php echo $presen; ?></p>
                <p>Precio: $<?php echo $costo; ?> MX</p>
                <p>Marca: <?php echo $marca; ?></p>
                <p>Modelo: <?php echo $mod; ?></p>
                <?php
                if ($adentro==true) {
                  ?>
                  <label>Cantidad:</label>
                  <input id="<?php echo $id ?>" type="number" name="cantidad" value="1" max="<?php echo $registro->stock; ?>" min="1">
                  <span onclick="Agregar(<?php echo "'".$nomp."',"; echo "'".$id."'"; ?>)" class="btn-floating  waves-effect waves-light green right" style="margin-top: 15%;">
                    <i class="material-icons">add_shopping_cart</i>
                  </span>
                  <?php
                }
                ?>
              </div>
            </div>
          </div>
          <?php
          $contador=$contador+1;
        }else{
          $ban=false;
        }
      }
      /* numero de productos */
          // echo $resultado->rowCount();
      $base=NULL;
      ?>
    </div>
    <!--Termino media (Contenido)-->
  </div>
</div>
<!--Finaliza Seccion1-->

<!-- paginacion -->   
<div class="center-align">
  <ul class="pagination">
    <li class="waves-effect <?php echo $_GET['pagina']<=1 ? 'scale-transition scale-out' : 'scale-transition'?>">
      <a href="Productos.php?pagina=<?php echo $_GET['pagina']-1 ?>">
        <i class="material-icons">chevron_left</i>
      </a>
    </li>
    <?php for($i=0;$i<$paginas;$i++){ ?>
      <li class="<?php echo $_GET['pagina']==$i+1 ? 'active' : '' ?>">
        <a href="Productos.php?pagina=<?php echo $i+1;?>"><?php echo $i+1; ?></a></li>
      <?php } ?> 
      <li class="waves-effect <?php echo $_GET['pagina']>=$paginas ? 'scale-transition scale-out' : 'scale-transition'?>">
        <a href="Productos.php?pagina=<?php echo $_GET['pagina']+1 ?>">
          <i class="material-icons">chevron_right</i>
        </a>
      </li>
    </ul> 
  </div>
  <?php include "Vistas/pie.php"; ?>
  <script type="text/javascript">
    $('#ID_P').addClass("active");
    $('#ID_P1').addClass("active");
    function Agregar (nombre,id) {
      var Stk=parseInt($('#'+id).attr("max"));
      var cant=parseInt($('#'+id).val());
      //console.log("wi");
      if (cant > Stk || cant<1) {
        M.toast({html: 'Cantidad erronea'});
      }else{
        var datos={
          "ID":id,
          "Cantidad":cant
        }
        $.ajax({
          method: "POST",
          data:datos,
          url:"PHP/Productos/agregarPedido.php",
          success:function(respuesta){
            respuesta=respuesta.trim();
            if (respuesta=="error") {
              M.toast({html: 'No hay mas stock'});
            }else{
               M.toast({html: 'Agregado'});
              $('#Pedido').text(respuesta);
              $('#Pedido1').text(respuesta);
            }
          }
        });
      }
    }
  </script>