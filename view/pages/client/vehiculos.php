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

        <title>Vehiculos</title>

        <!--Script de las fuentes-->
        <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js"  crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    </head>
    <body>
        <?php
        $idpaq = $_POST['idp1'];
        $idpaqe = $_POST['idp2'];
        $fechai = $_POST['fechar'];
        $fechaf = $_POST['fechae'];

        include_once '../../../controller/VehiculosContol.php';
        include_once '../../../config/Conexion.php';
        include_once '../../../model/Vehiculos.php';
        Conexion::abrir_conexion();
        $estado="Disponible";
        $vehiculos = VehiculosControl::traervehiculosById(Conexion::obtener_conexion(), $idpaq, $estado);
//            echo 'tamaño: '.count($vehiculos);
        ?>
        <!-- Top menu -->
        <div class="navbar" style="height: 60px; width: 100% ">
            <nav class="navbar navbar-expand-md navbar-dark fixed-top " role="navigation">
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
                            <!--<li><a class="nav-link scroll-link" href="#footer">Contáctenos</a>-->
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <!-- Portfolio -->
        <div class="portfolio-container section-container">
            <div class="container">

                <div class="row">
                    <table border="0" s>
                        <thead>
                            <tr style="row">
                                <th>Imágenes</th>
                                <th>Descripción</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <?php
                        if (count($vehiculos)) {
                            foreach ($vehiculos as $vehiculo) {
                                ?>
                                <tbody>

                                    <tr>
                                        <td ><?php
                                            switch ($vehiculo->getTipo_vh()) {
                                                case 1:
                                                    ?>
                                                    <img src="../../img/portfolio/10.jpg" style="padding: 20px"  >
                                                    <?php
                                                    break;
                                                case 2:
                                                    ?>
                                                    <img src="../../img/portfolio/2.jpg" style="padding: 20px"  >
                                                    <?php
                                                    break;
                                                case 3:
                                                    ?>
                                                    <img src="../../img/portfolio/4.jpg" style="padding: 20px"  >
                                                    <?php
                                                    break;
                                                case 4:
                                                    ?>
                                                    <img src="../../img/portfolio/6.jpg" style="padding: 20px" >
                                                    <?php
                                                    break;
                                            }
                                            ?>


                                        </td>
                                        <td style="padding: 30px; width: 600px" >
                                            <div class="row">
                                                <div class="col">
                                                    <h6><strong>Id del vehículo</strong></h6>
                                                    <p><?php echo $vehiculo->getId_vh(); ?></p>
                                                </div>                                        
                                                <div class="col">
                                                    <h6><strong>Color</strong></h6>
                                                    <p><?php echo $vehiculo->getColor_vh(); ?></p>
                                                </div>
                                                <div class="col">
                                                    <h6><strong>Puestos</strong></h6>
                                                    <p><?php echo $vehiculo->getPuestos_vh(); ?></p>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <h6><strong>Placa</strong></h6>
                                                    <p><?php echo $vehiculo->getPlaca_vh(); ?></p>
                                                </div>                                        

                                                <div class="col">
                                                    <h6><strong>Kilometraje</strong></h6>
                                                    <p><?php echo $vehiculo->getKilometraje_vh(); ?></p>
                                                </div>
                                                <div class="col">
                                                    <h6><strong>Estado</strong></h6>
                                                    <p><?php echo $vehiculo->getEstado_vh(); ?></p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <h6><strong>Valor/Día</strong></h6>
                                                    <p>$ <?php echo $vehiculo->getValorDia_vh(); ?></p>
                                                </div>                                        
                                                <div class="col">
                                                    <h6><strong>Seguro</strong></h6>
                                                    <p><?php echo $vehiculo->getSeguro_vh(); ?></p>
                                                </div>                                                
                                                <div class="col">
                                                    <h6><strong>Parqueadero</strong></h6>
                                                    <p><?php echo $vehiculo->getParqueadero(); ?></p>
                                                </div> 
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <h6><strong>Observaciones</strong></h6>
                                                    <p><?php echo $vehiculo->getObservaciones_vh(); ?></p>
                                                </div>

                                            </div>


                                        </td>
                                        <td style="padding: 40px">
                                            <button type="button" class="btn btn-success"><a href="masreserva.php?a=<?php echo $idpaq ?>&b=<?php echo $idpaqe ?>&c=<?php echo $fechai ?>&d=<?php echo $fechaf ?>&e=<?php echo $vehiculo->getId_vh() ?>&f=<?php echo $vehiculo->getValorDia_vh() ?>">Reservar</a></button>
                                        </td>
                                    </tr>                            
                                </tbody>
                                <?php
                            }
                        }
                        ?>
                    </table>
                </div>


            </div>
        </div>




        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>




    </body>
</html>
