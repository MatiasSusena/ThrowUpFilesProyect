<!-- En datosUsuario se realiza la insert( nuevo registro)  -->
<?php
// llamamos a todos los campos

include('funciones.php');
$conexion= conectaBBDD();
//$conexion = new mysqli('localhost', 'root', '', 'test');
//$consulta = $conexion->query("Set names utf8");

$id = $_POST ['id'];
$nombre = $_POST ['nombre'];
$apellido = $_POST ['apellido'];
$email = $_POST ['email'];
$sexo = $_POST ['sexo'];
$pass = $_POST ['pass'];

// strlen devuelve la cantidad de caracteres q tiene un string
//si algun campo no esta rellenado o es igual a 0 no te deja enviar
//$reqlen = strlen($id) * strlen($nombre) * strlen($apellido) * strlen($email) * strlen($sexo) * strlen($pass);

//if ($reqlen > 0){
//
//    $consulta = $conexion->query("INSERT INTO usuariosSocial VALUES('$id','$nombre','$apellido','$email','$sexo','$pass','Nuevo_Usuario')");// consulta para realizar una consulta y una inserccion a la BBDD 
//
//   
//      
//    echo 'REGISTRADO CON EXISTO';
//}else{
//    echo 'POR FAVOR RELLENE TODOS LOS CAMPOS';
//
//}

$resultado = $conexion->query("INSERT INTO usuariosSocial VALUES('$id','$nombre','$apellido','$email','$sexo','$pass','Nuevo_Usuario')");// consulta para realizar una consulta y una inserccion a la BBDD 

//si la insert es correcta ..
if ($resultado){
    
    //cargamos index.php
    echo 'REGISTRADO CON EXISTO';
    header("location:index.php");
    //A FUNCIONADOOOO !!! :D
    //header("location:index.php");
    
}
//si no lo es ..
else {
//cargamos el siguiente mensaje:
    //POR FAVOR RELLENE TODOS LOS CAMPOS
    echo 'POR FAVOR RELLENE TODOS LOS CAMPOS';
        //NO FUNCIONA ... :(
    //header("location:registro.php");
}

?>

