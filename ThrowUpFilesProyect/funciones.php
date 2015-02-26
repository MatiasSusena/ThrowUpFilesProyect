<!-- En funciones se hace la conexión a la base de datos  -->


<?php

//Conexion a la BBDD
function conectaBBDD(){
    //$conexion = new mysqli('mysql.hostinger.es', 'u493304553_root', '123456', 'u493304553_cetys');
        $conexion = new mysqli('localhost', 'root', '', 'test');
        $consulta = $conexion->query("Set names utf8");
        return $conexion;
}
//Limitador de caracteres
function limpia($palabra){
   $palabra =  trim($palabra, "'");
   $palabra =  trim($palabra, "=");
   $palabra =  trim($palabra, '"');
   return $palabra;
}
