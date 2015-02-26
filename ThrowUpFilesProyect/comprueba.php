<?php

//Iniciamos la sesion
session_start();
include('funciones.php');
$conexion = conectaBBDD();

?>
<!DOCTYPE html>
<html>
    <head>
        <!-- definimos parametros de la pagina -->
        <meta charset="UTF-8">
        <!-- definimos parametros de la pagina -->
        <title>login</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet">

        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>



        <?php
        //si la contraseña y el usuario son correctos cargamos los asrticulos del alamacen
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $usuario = $_POST['username'];
            $password = $_POST['password'];
          
            //HAY QUE METER EMAIL Y CONTRASEÑA PARA PODER LOGEARTE
            $consulta = $conexion->query("SELECT * FROM usuariosSocial WHERE (email = '$usuario') AND (password='$password')");
            $fila = $consulta->fetch_assoc();
            if ($fila) {
                $nombre = $fila['nombre'];
                //significa que cargo la página de usuario
                $_SESSION['dniUsuario'] = $usuario;
                $_SESSION['nombre_usuario'] = $nombre;
                
                ///////
               
                // Si usuario es usuario y contraseña es contraseña ..
                
                if ($consulta){
    
    //entramos en la web cargando subida.html
   echo'<script>

                $(document).ready(function () {
                window.location = ("subida.html");
});
           </script>';
    
}
   //si no lo es,y el usuario a introducido uno o los 2 campos incorrectos,
//expulsamos el siguiente mensaje ..
else {
    
//Campos introducidos incorrectos
echo 'Campos introducidos incorrectos';
}
                
                
            } 
        }
        ?>

    </body>
</html>