<?php
        $adentro=false;
        /* forzar a que cuando se muestre la pagina de productos sea en la pagina 1 */
        if(!$_GET){
          header('Location:Productos.php?pagina=1');
        }
        require ("conexiondb.php");
        session_start();
        if(!isset($_SESSION["user"])){
          $adentro=false;
        }else{
          $adentro=true;
        }
        /* CONEXION A BASE DE DATOS CON PDO */
          /* consulta */
          $sql="select * from productos";
          /* preparar los metodos */
          $resultado=$base->prepare($sql);
          $resultado->execute();
          $ban=true;
          /* numero de productos por pagina */
          $productos_x_pagina=30;
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
<!DOCTYPE html>
  <html>
    <head>
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!-- Compiled and minified JavaScript -->
            
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <!--<div class="navbar-fixed">
        En caso de que la barra de navegacion sea fija
      </div>-->
      
      <!-- Menú de navegación-->
      <nav class="green">
        <div class="nav-wrapper container">
        <a href="index.php" class="brand-logo col sl3 hide-on-med-and-down"><img class="circle responsive-img" src="Imagenes/logop.png"></a>
          <a href="index.php" class="brand-logo col s12 hide-on-large-only"><img class="circle responsive-img" src="Imagenes/logop1.png"></a>
          <a href="#" data-target="menu-side" class="sidenav-trigger">
            <i class="material-icons">menu</i>
          </a>
          <!--Menu para ordenadores de resolcuion grande-->
          <ul class="right hide-on-med-and-down">
              <li class="active"><a href="#">Productos</a></li>
            <?php if($adentro==true){?>
              <!-- cuando se inicio la sesion -->
              <li><a href="servicios.php">Servicios</a></li>
              <li><a href="Talleres.php">Talleres</a></li>
              <li><a href="Terapias.php">Terapias</a></li>
              <li><a href="Espacios.php">Espacios</a></li>
              <li><a href="index.php">Pagina principal</a></li>
              <li>
                  <a href="#" class="dropdown-trigger" data-target="exit">
                    <span class="name white-text "><?php echo $_SESSION["user"]; ?></span>
                    <i class="material-icons right">arrow_drop_down</i></a>
              </li>
            <?php }else{?>
              <!-- cuando no esta la sessiom iniciada -->
              <li><a href="index.php">Pagina principal</a></li>
              <li>
              <a href="#" class="dropdown-trigger" data-target="id_drop">
              Nosotros
              <i class="material-icons right">arrow_drop_down</i></a>
            </li>
            <?php }?> 

            <!--Menú desplegable-->
          </ul>
          <!-- Menu para dispositivos pequeños-->
          <ul class="sidenav" id="menu-side">
            <!--opcion 1-->
            <li>
              <div class="user-view">
                <div class="background">
                  <img src="Imagenes/p2.jpg" alt="">
                </div>
                <!--En caso de usuarios inscritos (Muestra datos del usuario)-->
                <!--<a href="#" >
                  <img src="Imagenes/2.jpg" class="circle">
                </a>
                <a href="">
                  <span class="name white-text">Eduardo</span>
                </a>-->
                <a href="">
                <a href="index.php" class="col s12 hide-on-large-only"><img class="circle responsive-img" src="Imagenes/logop1.png"></a>
                </a>
              </div>
            </li>
            <!-- Contenido del menu movil-->
            <?php if($adentro==true){?>
              <!-- cuando se inicio la sesion -->
              <li><a href="servicios.php">Servicios</a></li>
              <li><a href="Talleres.php">Talleres</a></li>
              <li><a href="Terapias.php">Terapias</a></li>
              <li><a href="Espacios.php">Espacios</a></li>
              <li><a href="index.php">Pagina principal</a></li>
              <li>
                  <a href="#" class="dropdown-trigger" data-target="exit2">
                    <span class="name black-text "><?php echo $_SESSION["user"]; ?></span>
                    <i class="material-icons right">arrow_drop_down</i></a>
              </li>
            <?php  }else{?>
              <!-- cuando no esta la sessiom iniciada -->
              <li class="active"><a href="#">Productos</a></li>
              <li><a href="index.php">Pagina principal</a></li>
              <li>
              <a href="#" class="dropdown-trigger" data-target="id_drop">
              Nosotros
              <i class="material-icons right">arrow_drop_down</i></a>
            </li>
            <?php }?>
          <!--Menu del dropdown P-->
        </div>
      </nav>
      <!--Termino del menú de navegacion-->
      <?php require("formularios.php"); ?>
      <!--Seccion 1-->
      <div class="section">
        <h3 class="center">Nuestros productos</h3>
        <div class="row">
          <div class="col l7 s10 offset-l3 offset-s1">
            <div class="nav-wrapper">
              <form>
                <div class="input-field">
                  <input id="search" type="search" required>
                  <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                  <i class="material-icons">close</i>
                </div>
              </form>
            </div>
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
                          //echo $nomp;
                        //}
                        // <!--Listado de los productos-->
                        echo "<div class='col s10 offset-s1 l4'>";
                          echo "<div class='card small'>";
                            echo "<div class='card-image waves-effect waves-block waves-light'>";
                              echo "<img class='activator' src='imagenes/p1.jpg'>";
                            echo "</div>";
                            
                            echo "<div class='card-content' >";
                              echo "<span class='card-title activator grey-text text-darken-4'><a href='producto.php?idproducto=$id&nump=$numpagina'>$nomp</a><i class='material-icons right'>more_vert</i></span>";
                              // echo "<p><a href='producto.php?idproducto=$id'>Ver producto</a></p>";
                              echo "</div>";
                            echo "</form>";
                            echo "<div class='card-reveal'>";
                              echo "<span style='font-weight: bold' class='card-title black-text text-darken-4 flow-textx'>$nomp<i class='material-icons right'>close</i></span>";
                              echo "<p style='font-weight: bold' class='green-text text-darken-2 flow-textx'>INFORMACION BASICA DEL PRODUCTO</p>";
                              echo "<p>Cantidad: $catp</p>";
                              echo "<p>Tipo de producto: $presen</p>";
                              echo "<p>Precio: $$costo MX</p>";
                              echo "<p>Marca: $marca</p>";
                              echo "<p>Modelo: $mod</p>";
                            echo "</div>";
                          echo "</div>";
                        echo "</div>";
                      }else{
                        $ban=false;
                      }
                      }
                      /* numero de productos */
                      // echo $resultado->rowCount();
                      $base=NULL;
                      ?>
                    </div>
          <!-- en caso de aside
          <div class="col l2 hide-on-med-and-down">
            
          </div>-->
        </div>
      </div>
      <!--Finaliza Seccion1-->
      <!-- paginacion -->
      
      <div class="center-align">
        <ul class="pagination">
          <li class="waves-effect <?php echo $_GET['pagina']<=1 ? 'scale-transition scale-out' : 'scale-transition'?>">
            <a href="Productos.php?pagina=<?php echo $_GET['pagina']-1 ?>">
            <i class="material-icons">chevron_left</i></a></li>

            <?php for($i=0;$i<$paginas;$i++){ ?>
              <li class="<?php echo $_GET['pagina']==$i+1 ? 'active' : '' ?>">
              <a href="Productos.php?pagina=<?php echo $i+1;?>"><?php echo $i+1; ?></a></li>
            <?php } ?> 
          
          <li class="waves-effect <?php echo $_GET['pagina']>=$paginas ? 'scale-transition scale-out' : 'scale-transition'?>">
            <a href="Productos.php?pagina=<?php echo $_GET['pagina']+1 ?>">
            <i class="material-icons">chevron_right</i></a></li>
        </ul> 
      </div>

      <!--Bola flotante
      <div class="fixed-action-btn">
        <a class="btn-floating btn-large blue">
          <i class="large material-icons">mode_edit</i>
        </a>
        <ul>
          <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
          <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
          <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
          <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
        </ul>
      </div>-->


      <footer class="page-footer green">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Contacto</h5>
                <ul>
                  <li>
                    <a>
                      <i class="material-icons black-text">call</i>
                    </a>
                    <span>&nbsp 1234567890</span>
                  </li>
                  <li>
                    <a>
                      <i class="material-icons black-text">email</i>
                    </a>
                    <span>&nbsp easdas@hasdas.com</span>
                  </li>
                  <li>
                    <a href="#" >
                      <i class="material-icons black-text">add_location</i>
                    </a>
                    <span>&nbsp Puebla, pueb</span>
                  </li>
                </ul>
              </div>
              <!--<div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>-->
            </div>
          </div>
          <div class="footer-copyright center">
            <div class="container">
            © 2014 Copyright Text
            
            </div>
          </div>
        </footer>

      <!--JavaScript at end of body for optimized loading-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <script >
        document.addEventListener('DOMContentLoaded', function(){
          M.AutoInit();
        });

      </script>
      <script >

      </script>
    </body>
  </html>