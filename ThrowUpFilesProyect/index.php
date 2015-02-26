
<!-- En el index es donde tenemos nuestra pantalla de logueo y las diferentes
     opciones que nos ofrece nuestra web -->
<!DOCTYPE html>
<html lang="en">

<head>
<!-- definimos parametros de la pagina -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<!-- Este es el titulo de la pagina -->
<title>Throw Up Files server</title>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/stylish-portfolio.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

</head>

<body>
<?php
    ?>
<!-- Nuestro menú (situado en el lado derecho de la web con forma de un cuadrado desplegable -->
<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
<nav id="sidebar-wrapper">
<ul class="sidebar-nav">
<a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
<li class="sidebar-brand">
<a href="#top">¿A donde quieres ir?</a>
</li>
<li>
<a href="index.php">Home</a>
</li>
<li>
<a href="registro.php">Registrate!</a>
</li>
<li>
    <a href="subida_1.html">Mis archivos</a>
</li>
<li>
<a href="tipos_cuentas.html">Tipos de cuentas</a>
</li>
<li>
<a href="https://mega.co.nz/#copyright">F.A.Q.</a>
</li>
<li>
<a href="#" class="button alt big">Subir</a>
</li>
<li>
<a href="aboutMe2.html" >Tu opinión nos importa</a>
</li>
</ul>
</nav>

<!-- Header -->
<!-- Banner principal de nuestra web  -->
<header id="top" class="header">
<div class="text-vertical-center ">
<div class="fondo">
<br>
<h1>Throw Up Files!</h1>
<h3>Crea tu mundo...</h3>
<br>
<div id="principal">
<div class="botones" >
<!-- formulario de login  -->
<form id="login" class="form-inline" role="form" method="post" action="comprueba.php">

<div class="form-group">
<!-- label del usuario -->
<input id="username" type="text" class="form-control"  placeholder="Username" name="username">
</div>
<div class="form-group">
<label class="sr-only" for="exampleInputPassword2">Introduce Password</label>
<!-- label de la contraseña -->
<input id="password" type="password" class="form-control"  placeholder="Password" name="password">
</div>
<!-- boton "entrar" -->
<button type="submit" onclick="validacion()" class="btn btn-info">Logearte</button>
</form>

</div>
</div>
<br><br>
</div>
</div>p
</header>

<!-- pié de la pagina -->
<footer>
<div class="container">
<div class="row">
<div class="col-lg-10 col-lg-offset-1 text-center">
<h4><strong>Matias Perez Lopez</strong>
</h4>
<p>3481 Melrose Place<br>Beverly Hills, CA 90210</p>
<ul class="list-unstyled">
<li><i class="fa fa-phone fa-fw"></i> 698765432 </li>
<li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:roexone@gmail.com">roexonejuegos@gmail.com</a>
</li>
</ul>
<br>
<ul class="list-inline">
<li>
<a href="https://www.facebook.com/roex1987"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
</li>
<li>
<a href="https://twitter.com/roex_de_1987"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
</li>
<li>
<a href="mailto:roexone@gmail.com"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
</li>
</ul>
<hr class="small">
<p class="text-muted">Copyright &copy; Throw Up Files 2015</p>
</div>
</div>
</div>
</footer>

<!-- jQuery Version 1.11.0 -->
<script src="js/jquery-1.11.1.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->


<script src="js/bootstrapValidator.min.js"></script>

<!-- Con este script abrimos y cerramos el menú de la derecha desplegable  -->
<script>
// Closes the sidebar menu
$("#menu-close").click(function (e) {
                       e.preventDefault();
                       $("#sidebar-wrapper").toggleClass("active");
                       });

// Opens the sidebar menu
$("#menu-toggle").click(function (e) {
                        e.preventDefault();
                        $("#sidebar-wrapper").toggleClass("active");
                        });

// Scrolls to the selected menu item on the page
$(function () {
  $('a[href*=#]:not([href=#])').click(function () {
                                      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                                                                    
                                                                    var target = $(this.hash);
                                                                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                                                                    if (target.length) {
                                                                    $('html,body').animate({
                                                                                           scrollTop: target.offset().top
                                                                                           }, 1000);
                                                                    return false;
                                                                    }
                                                                    }
                                                                    });
                                          });
                                      </script>
                                      
                                      <!-- Con este script cargamos las restricciones que le queremos aplicar a bootstrap validator
                                           para poder logearse el usuario -->
                                      
                                      <script>
                                      //cuando termina de cargar la pagina,hace lo siguiente
                                      $(document).ready(function() {
                                                        //ejecuta bootstrapValidator para controlar que lo metido en las cajas cumple
                                                        //las reglas de validacion que tengo metidas mas abajo,hasta que se pulsa el boton ENTRAR
                                                        $('#login').bootstrapValidator({
                                                                                       message: 'VALOR NO VALIDO',
                                                                                       //muestra los botones de "correcto o incorrecto" y aplica una regla css
                                                                                       feedbackIcons: {
                                                                                       valid: 'glyphicon glyphicon-ok',
                                                                                       invalid: 'glyphicon glyphicon-remove',
                                                                                       validating: 'glyphicon glyphicon-refresh'
                                                                                       },
                                                                                       //fields = campos
                                                                                       //aplicaselo a usuario:
                                                                                       fields: {
                                                                                       username: {
                                                                                       message: 'El nombre de usuario no cumple las condiciones',
                                                                                       validators: {
                                                                                       //si esta vacia,expulsa el siguiente mensaje
                                                                                       notEmpty: {
                                                                                       message: 'El nombre de usuario no puede estar en blanco'
                                                                                       },
                                                                                       //si la longitud esta comprendida entre 6 y 30 caracteres
                                                                                       stringLength: {
                                                                                       min: 4,
                                                                                       max: 20,
                                                                                       message: 'El nombre usuario tiene que tener entre 4 y 20 caracteres'
                                                                                       },
                                                                                       //estos son los caracteres permitidos
                                                                                       regexp: {
                                                                                       regexp: /^[a-zA-Z0-9Ò@._-]+$/,
                                                                                       message: 'El nombre de usuario puede contener letras alfabeticas, numeros , guiones y arrobas'
                                                                                       }
                                                                                       }
                                                                                       },
                                                                                       //le aplicamos a la clave lo siguiente:
                                                                                       password: {
                                                                                       validators: {
                                                                                       //si esta vacia
                                                                                       notEmpty: {
                                                                                       message: 'la clave no puede estar en blanco'
                                                                                       },
                                                                                       regexp: {
                                                                                       //estos son los caracteres permitidos
                                                                                       regexp: /^[a-zA-Z0-9Ò]+$/,
                                                                                       ///^[a-zA-Z0-9_ñÑáéíóúÁÉÍÓÚüÜ]+$/,
                                                                                       message: 'La clave puede contener letras mayusculas y minusculas y numeros'
                                                                                       }
                                                                                       }
                                                                                       }
                                                                                       }
                                                                                       });
                                                        });
                                      </script>
                                      
                                      
                                      
                                      
                                      </body>
                                      
                                      </html>

