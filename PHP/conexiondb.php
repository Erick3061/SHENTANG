<?php
     /* conectar a la case de datos PDO*/
     try{
        //el metodo conexcion se llama $base
        $base=new PDO('mysql:host=localhost; dbname=shentang','root','');
        $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        /* agragar caracteres especiales */
        $base->exec("SET CHARACTER SET utf8");
    }catch(Exception $e){
         /* mandar error al conectar a la base datos */
         echo "error al conectar a la base de datos" . "<br>$e";
    }
?>