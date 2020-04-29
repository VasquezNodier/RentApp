<?php
include_once '../../../controller/VehiculosContol.php';
include_once '../../../model/Vehiculos.php';
include_once ('../../../model/Parqueaderos.php');
include_once ('../../../controller/ParqueaderoControl.php');
include_once ('../../../config/Conexion.php');
include_once ('../../../controller/ReservasControl.php');
include_once ('../../../model/Reservas.php');
include_once ('../../../controller/ControlSesion.php');

if (ControlSesion::sesion_iniciada()) {
    $idpq = $_SESSION['id_user'];
}

$estado = "Reservado";
Conexion::abrir_conexion();
$parqueaderoo = ParqueaderoControl::traerparqueaderos(Conexion::obtener_conexion());
$vehiculos = VehiculosControl::traervehiculosreservadospq(Conexion::obtener_conexion(), $estado, $idpq);
?>
<!DOCTYPE html> <!---->
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA_Compatible" content="IE=edge"><!--Permite al navegador establecer un modo de compatibilidad-->
        <meta name="format-detection" content="telephone=no"/><!-- Desactivar la detección automática de números de teléfono -->
        <meta name="viewport" content="width=device-width, initial-scale = 1, , shrink-to-fit=no"> <!--Se ajusta al tamaño de la pantalla-->
        <link rel="icon" href="" type="image/x-icon"> <!--Icono de la pestaña-->

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600">
        <link rel="stylesheet" href="../../fonts/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../css/bootstrap.css">
        <!--link rel="stylesheet" href="../../css/bootstrap.min.css"-->
        <link rel="stylesheet" href="../../css/animate.css">
        <link rel="stylesheet" href="../../css/form-elements.css">
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" href="../../css/mediaqueries.css">

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="../../img/icon/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../img/icon/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../img/icon/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../img/icon/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../../img/icon/apple-touch-icon-57-precomposed.png">



        <title>Vehiculos</title>

        <link rel="stylesheet" href="../../css/tablas.css">   
        <script src="../../js/tablas.js"></script>




    </head>
    <body>
        <!-- Loader -->
        <div class="loader">
            <div class="loader-img"></div>
        </div>
        <!-- Top menu -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top navbar-no-bg" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="nav">
                        <li><a href="parqueadero.php">Vehiculos</a>
                        </li>
                        <li><a href="vehiculoEntrega.php">Vehiculos Por Entregar</a></li>
                        <li><a href="vehiculorecepcion.php">Vehiculos Por Recibir</a></li>
                        <?php
                            if (ControlSesion::sesion_iniciada()) {
                                ?>
                                <li class="nav-link">Usuario: <?php echo $_SESSION['nombres_user'] ?></li>
                                <?php
                            }
                            ?>
                    </ul>
                    <div class="navbar-text navbar-right">
                        <Botón de login>
                            <li>
                                <button type="button" class="btn btn-outline-light" data-toggle="modal" >Salir</button>
                            </li>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Top content -->
        <div class="top-content" style="position: relative; z-index: 0; background: none;">

            <br><br><br><br>
            <br><br><br><br>
            <div id="wrapper">
                <h1>Vehiculos</h1>

                <table id='keywords' cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th><span>Modelo</span></th>
                            <th><span>color</span></th>
                            <th><span>Placas</span></th>
                            <th><span>Estado</span></th>
                            <th><span></span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (count($vehiculos)) {
                            foreach ($vehiculos as $vehiculo) {
                                ?>
                                <tr>
                                    <td class="lalign"><?php echo $vehiculo->getModelo_vh(); ?></td>

                                    <td><?php echo $vehiculo->getColor_vh(); ?></td>
                                    <td><?php echo $vehiculo->getPlaca_vh(); ?></td>
                                    <td><?php echo $vehiculo->getEstado_vh(); ?></td>
                                    <td><form action="entregarvehiculo.php" method="post">
                                            <button class="btn" name="btn" value="<?php echo $vehiculo->getId_vh(); ?>"> Ver <span class="arrow">❯</span></button>
                                        </form></td>
                                    <td></td>
                                </tr> <?php }
                } ?>
                    </tbody>
                </table>
            </div> 
            <br>








            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

            <!-- Javascript -->

            <script src="../../js/jquery-3.2.1.min.js"></script>
            <script src="../../js/jquery-migrate-3.0.0.min.js"></script>
            <script src="../../js/jquery.backstretch.min.js"></script>
            <script src="../../js/wow.min.js"></script>
            <script src="../../js/retina-1.1.0.min.js"></script>
            <script src="../../js/waypoints.min.js"></script>
            <script src="../../js/scripts.js"></script>
            <script src="../../js/tablas.js"></script>


    </body>
</html>
