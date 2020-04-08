<script>
        function verifica(){
          var ban;
          var user;
          <?php 
          require("conexiondb.php");
          $sql="select * from usuarios";
          $resultado=$base->prepare($sql);
          $resultado->execute();
          $b=true;
          ?>
          var esta = document.getElementById("nombre").value;
          var c = document.getElementById("contra").value;
          <?php while($b){ 
                if(($registro=$resultado->fetch(PDO::FETCH_OBJ))==true){
                  $n=$registro->USUARIO;
                  $c=$registro->PASSWORD;
          ?>
            if(esta=="<?php echo $n?>"){
              if(c=="<?php echo $c?>"){
                //alert("la contraseña coincide");
                //ban=true;
                //user="<?php echo $n?>";
                return true;
              }else{
                alert("LA CONTRASEÑA ES INCORRECTA PORFAVOR INSERTE LA CONTRASEÑA CORRECTA");
                ban=true;
              }
            }else{
              ban=false;
            }
          <?php }else{
              $b=false;
              }
            }
          ?>
            if(ban==true){
              return false;
            }else{
              alert("ESE USUSARIO NO EXISTE, PORFAVOR CREE UNA CUENTA");             
              return false;
            }
        }

        function verifica2(){
          var ban;
          var user;
          <?php 
          require("conexiondb.php");
          $sql="select * from usuarios";
          $resultado=$base->prepare($sql);
          $resultado->execute();
          $b=true;
          ?>
          var usr = document.getElementById("usr").value;
          var email = document.getElementById("email").value;
          <?php while($b){ 
                if(($registro=$resultado->fetch(PDO::FETCH_OBJ))==true){
                  $usr=$registro->USUARIO;
                  $email=$registro->EMAIL;
          ?>
            if(usr=="<?php echo $usr?>" && email=="<?php echo $email?>"){
                alert("USUARIO Y CORREO ELECTRONICO YA EXISTEN, POR FAVOR INGRESE DIFERENTES");
                ban=true;
                <?php $b=true; ?>
                return false;
              }else{
                ban=false;
              }
              if(usr=="<?php echo $usr?>"){
                alert("EL USUARIO YA EXISTE, POR FAVOR INGRESE UNO DIFERENTE");
                ban=true;
                <?php $b=true; ?>
                return false;
              }
              if(email=="<?php echo $email?>"){
                alert("EL CORREO ELECTRONICO YA EXISTE, POR FAVOR INGRESE UNO DIFERENTE");
                ban=true;
                <?php $b=true; ?>
                return false;
              }

          <?php }else{
              $b=false;
              }
            }
          ?>
          if(ban==false){
            // alert("DATOS CORRECTOS");
            alert("REGISTRO EXITOSO");
            return true;
          }else{
            return false;
          }

        }
      </script>