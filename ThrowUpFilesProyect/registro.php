<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    
    <head>
        <!-- definimos parametros de la pagina -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- TITULO DE LA PAGINA -->
        <title>Nuevo Usuario</title>

        <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/freelancer.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
        <!-- Scripts para añadir fondo autoajustable a la imagen -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        
        
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
        <script src="js/bootstrapValidator.min.js"></script>

<!--         Scripts para añadir MODAL 
        <script src="js/custombox.min.js"></script>
        <link rel="stylesheet" href="css/custombox.min.css">-->
        
        

    </head>

    <!-- cuerpo -->
    <body>
        

        
        <?php
        ?>

       <!-- Portfolio Grid Section -->
        <section id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">

                        <!-- TEXTO REGISTRATE -->



                    </div>
                </div>

                <div class="botones"> 
                    <div id="insertaDatos">
                        <h2>REGISTRATE</h2>
                        <hr class="star-light">
                        <!-- FORMULARIO -->


                        <form method="post"  action="datosUsuario.php" id="nuevoUsuario" class="navbar-form navbar-center" role="form">
                            <div class="form-group">
                                <input id="id" type="text" placeholder="Id" class="form-control" name="id">
                            </div>

                            <br>
                            <br>
                            
                            <div class="form-group">
                                <input id="nombre" type="text" placeholder="nombre" class="form-control" name="nombre">
                            </div>

                            <br>
                            <br>

                            <div class="form-group">
                                <input id="apellidos" type="text" placeholder="apellido" class="form-control" name="apellido">
                            </div>

                            <br>
                            <br>

                            <div class="form-group">
                                <input id="email" type="text" placeholder="email" class="form-control" name="email">
                            </div>

                            <br>
                            <br>
                            
                            <div class="form-group">
                                <input id="sexo" type="text" placeholder="sexo" class="form-control" name="sexo">
                            </div>

                            <br>
                            <br>

                            <div class="form-group">
                                <input id="pass" type="text" placeholder="password" class="form-control" name="pass">
                            </div>

                            <br>
                            <br>

                            <!-- BOTON NUEVO REGISTRO -->


                            <button  id="enviarDatos"  type="submit" class="btn btn-success" data-toggle="modal" data-target="#basicModal">Nuevo Registro</button>
                        </form>

                    </div> 


                </div>  
            </div>
        </section>      

   
        
        
<!--<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">Cerrar</button>
            <h4 class="modal-title" id="myModalLabel">Usuario registrado correctamente</h4>
            </div>
            <div class="modal-body">
                <h3>Volver al menú principal</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Volver</button>
                <button type="button" class="btn btn-primary">Guardar</button>
        </div>
    </div>
  </div>
</div>-->
       
       
<!--<script>
    $(function () {
        $('#enviarDatos').on('click', function ( e ) {
            Custombox.open({
                target: '#enviarDatos',
                effect: 'fadein'
            });
            e.preventDefault();
        });
    });
</script>-->
     

<!--<script src="js/custombox.min.js"></script>
<script src="js/legacy.min.js"></script>-->
        
<!-- Con este script cargamos las restricciones que le queremos aplicar a bootstrap validator
     para poder logearse el usuario -->

<script>
//cuando termina de cargar la pagina,hace lo siguiente
$(document).ready(function() {
    //ejecuta bootstrapValidator para controlar que lo metido en las cajas cumple 
    //las reglas de validacion que tengo metidas mas abajo,hasta que se pulsa el boton ENTRAR
    $('#nuevoUsuario').bootstrapValidator({
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
            id: {
                message: 'El nombre de usuario no cumple las condiciones',
                validators: {
                    //si esta vacia,expulsa el siguiente mensaje
                    notEmpty: {
                        message: 'El id de usuario no puede estar en blanco'
                    },
                    //si la longitud esta comprendida entre 1 y 30 caracteres
                    stringLength: {
                        min: 1,
                        max: 6,
                        message: 'el ID puede contener entre 1 y 6 caracteres'
                    },
                    //estos son los caracteres permitidos
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'id puede contener unicamente caracteres numéricos'
                    }
                }
            },
             email: {
                validators: {
                    //si esta vacia
                    notEmpty: {
                        message: 'El email no puede estar en blanco'
                    },
                    regexp: {
                        //estos son los caracteres permitidos
                        regexp: /^[a-zA-Z0-9ñ@.]+$/,
                        message: 'email puede contener caracteres alfabeticos, numericos y especiales'
                    }
                }
            },
            //le aplicamos a la clave lo siguiente:
            pass: {
                validators: {
                    //si esta vacia
                    notEmpty: {
                        message: 'La clave no puede estar en blanco'
                    },
                    regexp: {
                        //estos son los caracteres permitidos
                        regexp: /^[a-zA-Z0-9_ñÑáéíóúÁÉÍÓÚüÜ]+$/,
                        message: 'pasword puede contener caracteres alfabeticos, numericos y especiales'
                    }
                }
            },
            nombre: {
                validators: {
                    //si esta vacia
                    notEmpty: {
                        message: 'El nombre no puede estar en blanco'
                    },
                    regexp: {
                        //estos son los caracteres permitidos
                        regexp: /^[a-zA-Z_ñÑáéíóúÁÉÍÓÚüÜ]+$/,
                        message: 'nombre puede contener caracteres alfabeticos, numericos y especiales'
                    }
                }
            },
             apellido: {
                validators: {
                    //si esta vacia
                    notEmpty: {
                        message: 'El apellido no puede estar en blanco'
                    },
                    regexp: {
                        //estos son los caracteres permitidos
                        regexp: /^[a-zA-Z_ñÑáéíóúÁÉÍÓÚüÜ]+$/,
                        message: 'apellido puede contener caracteres alfabeticos, numericos y especiales'
                    }
                }
            },
             sexo: {
                validators: {
                    //si esta vacia
                    notEmpty: {
                        message: 'El sexo no puede estar en blanco'
                    },
                    regexp: {
                        //estos son los caracteres permitidos
                        regexp: /^[HOMBREMUJ]+$/,
                        message: 'sexo puede contener los caracteres H para hombres y M para muejeres'
                    }
                }
            }
        }
    });
});
</script>

<!-- Con el siguiente script, cargamos la imagen de fondo y la hacemos auto ajustable  -->
<script>
     
    $(document).ready(function() {
        $.backstretch("img/fondoRegistro_2.jpg");
    });
     
</script>

         </body>
</html>