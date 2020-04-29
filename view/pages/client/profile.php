<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head><meta charset="utf-8">
        <meta http-equiv="X-UA_Compatible" content="IE=edge"><!--Permite al navegador establecer un modo de compatibilidad-->
        <meta name="format-detection" content="telephone=no"/><!-- Desactivar la detección automática de números de teléfono -->
        <meta name="viewport" content="width=device-width, initial-scale = 1, , shrink-to-fit=no"> <!--Se ajusta al tamaño de la pantalla-->
        <link rel="icon" href="" type="image/x-icon"> <!--Icono de la pestaña-->

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600">
        <link rel="stylesheet" href="../../css/bootstrap.css">
        <link rel="stylesheet" href="../../css/animate.css">
        <!--<link rel="stylesheet" href="../../css/form-elements.css">-->
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" href="../../css/mediaqueries.css">

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="../../img/icon/favicon.png">

        <title>Perfil</title>

        <!--Script de las fuentes-->
        <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js"  crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    </head>
    <body>
        <!-- Top menu -->
        <div class="navbar" style="height: 60px; width: 100% ">
            <nav class="navbar navbar-expand-md navbar-dark fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar navbar-header">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <!--<li><a class="nav-link " href="vehiculos.php">Vehiculos</a></li>-->                            
                            <li><a class="nav-link" href="client.php">Gestionar reserva</a></li>
                            <li><a class="nav-link" href="profile.php">Perfil</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="content" style="padding-Top: 10px">
            <div class="container bootstrap snippet">
                <div class="row">
                    <div class="col-sm-10"><h1>Detalles de la cuenta</h1></div>
                    <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="../../img/icon/apple-touch-icon-114-precomposed.png"></a></div>
                </div>
                <div class="row">
                    <div class="col-sm-3"><!--left col-->
                        <div class="text-center">
                            <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                            <br></br>
                            Upload a different photo...
                            <input type="file" class="text-center center-block file-upload">
                        </div>


                        <hr>
                        <ul class="list-group">
                            <li class="list-group-item text-muted"><strong>Activity</strong> <i class="fas fa-tachometer-alt"></i></li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <strong>Shares</strong>
                                <span class="badge badge-primary badge-pill">14</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <strong>Likes</strong>
                                <span class="badge badge-primary badge-pill">13</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <strong>Posts</strong>
                                <span class="badge badge-primary badge-pill">37</span></li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <strong>Followers</strong>
                                <span class="badge badge-primary badge-pill">78</span> </li>
                        </ul>
                        <div class="panel panel-default">
                            <div class="panel-heading">Social Media</div>
                            <div class="panel-body">
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-github"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-pinterest"></i>
                                <i class="fab fa-google-plus"></i>
                            </div>
                        </div>
                    </div><!--/col-3-->

                    <div class="col">
                        <!--<ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="profile.php">Home</a>
                            </li>
                            li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#messages">Menu 1</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#settings">Menu 2</a>
                            </li
                        </ul>-->

                        <div class="tab-content" style="padding-top: 70px">
                            <?php
                            include_once ('../../../model/Usuarios.php');
                            include_once ('../../../controller/UserControl.php');
                            include_once ('../../../config/Conexion.php');
                            Conexion::abrir_conexion();
                            $usuario = UserControl::traer_usuario_parqueadero(Conexion::obtener_conexion());
                            ?>

                            <form class="form" action="##" method="post" id="detalleuser">
                                <div class="row">
                                    <div class="form-group col" style="padding-left: 50px; padding-right: 50px" >
                                        <div class="col">
                                            <label for="first_name">Identificación</label>
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" name="iduser" id="iduser" placeholder="Identificación" readonly="" >
                                        </div>
                                    </div>
                                    <div class="form-group col" style="padding-left: 50px; padding-right: 50px" >
                                        <div class="col">
                                            <label for="first_name">Nombres</label>

                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese su nombre completo" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col" style="padding-left: 50px; padding-right: 50px" >
                                        <div class="col">
                                            <label for="first_name">Edad</label>

                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Edad" >
                                        </div>
                                    </div>
                                    <div class="form-group col" style="padding-left: 50px; padding-right: 50px">
                                        <div class="col">
                                            <label for="mobile">Teléfono</label>
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Ingrese su número de teléfono" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col"style="padding-left: 50px; padding-right: 50px">
                                        <div class="col">
                                            <label for="email">Correo</label>
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" name="email" id="email" placeholder="you@email.com" >
                                        </div>
                                    </div>
                                    <div class="form-group col"style="padding-left: 50px; padding-right: 50px">
                                        <div class="col">
                                            <label for="email">Dirección</label>
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" id="dirección" placeholder="Dirección" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col"style="padding-left: 50px; padding-right: 50px">
                                        <div class="col">
                                            <label for="password">Contraseña</label>
                                        </div>
                                        <div class="col">
                                            <input type="password" class="form-control" name="password" id="password" placeholder="password" >
                                        </div>
                                    </div>
                                    <div class="form-group col"style="padding-left: 50px; padding-right: 50px">
                                        <div class="col">
                                            <label for="password2">Vericar</label>
                                        </div>
                                        <div class="col">
                                            <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" >
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group"style="padding-top: 50px">
                                    <div class="col-xs-12">

                                        <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                        <button class="btn btn-lg btn-warning" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div><!--/col-9-->
                    </div><!--/row-->

                </div>

                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"  crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"  crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>

                <script>
                    $(document).ready(function () {
                        var readURL = function (input) {
                            if (input.files && input.files[0]) {
                                var reader = new FileReader();

                                reader.onload = function (e) {
                                    $('.avatar').attr('src', e.target.result);
                                }
                                reader.readAsDataURL(input.files[0]);
                            }
                        }
                        $(".file-upload").on('change', function () {
                            readURL(this);
                        });
                    });
                </script>

                </body>
                </html>
