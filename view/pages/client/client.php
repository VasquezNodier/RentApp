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
        <!--link rel="stylesheet" href="../../fonts/css/font-awesome.min.css"-->
        <link rel="stylesheet" href="../../css/bootstrap.css">
        <!--link rel="stylesheet" href="../../css/bootstrap.min.css"-->

        <link rel="stylesheet" href="../../css/animate.css">
        <!--<link rel="stylesheet" href="../../css/form-elements.css">-->
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" href="../../css/mediaqueries.css">

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="../../img/icon/favicon.png">

        <title>index</title>

        <!--Script de las fuentes-->
        <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" crossorigin="anonymous"></script>

    </head>

    <body>
        <!-- Top menu -->
        <div class="navbar" style="height: 60px; width: 100% ">
            <nav class="navbar navbar-expand-md navbar-dark fixed-top " role="navigation">
                <div class="container">
                    <div class="navbar-header">
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
        <?php
        include_once ('../../../model/Parqueaderos.php');
        include_once ('../../../controller/ParqueaderoControl.php');
        include_once ('../../../config/Conexion.php');
        Conexion::abrir_conexion();
        $parqueaderoo = ParqueaderoControl::traerparqueaderos(Conexion::obtener_conexion());
        ?>

        <div class="services-container section-container" style="padding-top:10px">
            <!--            <hr>-->
            <div class="container" >
                <div class="row">
                    <div class="col" style="background: #F7F7FF">
                        <div class="row" style="padding: 20px">
                            <h3 style="padding-top:10px; padding-left: 50px"><strong>Ahora, encontremos el alquiler perfecto</strong></h3>
                        </div>
                        <div class="col">
                            <form  role="form" method="post" action="vehiculos.php">
                                <div class="row">
                                    <div class="col">

                                        <div class="form-group">
                                            <div class="col">
                                                <label for="lugar" style="">Revisa en el mapa y escoge tu punto más cercano para recoger el vehículo. Luego selecciona el parqueadero en el que te queda más fácil hacer la entrega del mismo.</label>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <!--<div class="col">
                                                        <label for="lugar">Salida</label>
                                                    </div>-->


                                                    <div class="form-group col"> <!-- State Button -->
                                                        <label for="salida" class="control-label">Salida</label>
                                                        <select class = "form-control" id = "salida" name="idp1">
                                                            <?php
                                                            foreach ($parqueaderoo as $parqueadero) {
                                                                ?>
                                                                <option value="<?php echo $parqueadero->getId_pq() ?>"><?php echo $parqueadero->getNombre_pq(); ?></option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select> 
                                                    </div>
                                                </div>

                                                <div class="form-group col"> <!-- State Button -->
                                                    <label for="salida" class="control-label">Llegada</label>
                                                    <select class = "form-control" id = "entrega" name="idp2">
                                                        <?php
                                                        foreach ($parqueaderoo as $parqueadero) {
                                                            ?>
                                                            <option value="<?php echo $parqueadero->getId_pq() ?>"><?php echo $parqueadero->getNombre_pq(); ?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="col">
                                            <div class="form-group">
                                                <div class="col">
                                                    <label for="fechar">Fecha de recogida</label>
                                                </div>
                                                <div class="col">
                                                    <input type="date" class="form-control" name="fechar" id="fechar" placeholder="" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <div class="col">
                                                    <label for="fechar">Fecha de entrega</label>
                                                </div>
                                                <div class="col">
                                                    <input type="date" class="form-control" name="fechae" id="fechae" placeholder="" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="padding: 40px">                                   
                                    <div class="column">
                                        <button type="submit" name="enviard" class="btn btn-success">Buscar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col">
                        <div class="col">
                            <h1>Nuestros puntos de atención</h1>
                            <div class="row">
                                <label for="lugar" style="">El marcador verde es tu ubicación, el amarillo es el parqueadero más cercano, y los púrpura son los que están más retirados de tu ubicación actual.</label>
                            </div>
                            <div class="row" style="padding: 20px">
                                <div id="mapirris" class="column" style="padding:10px; height:500px; width:600px">

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <script>
                function initMap() {
                    var map = document.getElementById('mapirris');
                    navigator.geolocation.getCurrentPosition(fn_ok, fn_mal);

                    function fn_mal() {
                        console.log("error");
                    }
                    function fn_ok(rta) {

                        var lat = rta.coords.latitude;
                        var lon = rta.coords.longitude;
                        var gLatLon = new google.maps.LatLng(lat, lon);
                        var objConfig = {
                            zoom: 14,
                            center: gLatLon
                        };

                        var image = {
                            url: 'componentes/img/icon.png', //ruta de la imagen
                            size: new google.maps.Size(40, 60), //tamaño de la imagen
                            origin: new google.maps.Point(0, 0), //origen de la iamgen
                            //el ancla de la imagen, el punto donde esta marcando, en nuestro caso el centro inferior.
                            anchor: new google.maps.Point(20, 60)
                        };

                        var gMapa = new google.maps.Map(map, objConfig);
                        var objConfigMarker = {
                            position: gLatLon,
                            map: gMapa,
                            title: "Usted está aquí",
                            icon: 'https://maps.google.com/mapfiles/ms/icons/green-dot.png'
                        };
                        var gMarker = new google.maps.Marker(objConfigMarker);
<?php
if (count($parqueaderoo)) {
    $i = 0;
    foreach ($parqueaderoo as $parqueadero) {
        $longitud = $parqueadero->getLong_pq();
        $latitud = $parqueadero->getLati_pa();
        ?>
                                var latlng = new google.maps.LatLng(<?php echo $latitud ?>,<?php echo $longitud ?>);
                                if (google.maps.geometry.spherical.computeDistanceBetween(gLatLon, latlng) < 1000.000) {

                                    var texto = '<h4><?php echo $parqueadero->getNombre_pq() ?></h4>' + '<p><?php echo $parqueadero->getDir_pq() ?></p>' + '<p><?php echo $parqueadero->getTel_pq() ?></p>';
                                    var oobjconfig = {
                                        position: latlng,
                                        map: gMapa,
                                        icon: 'https://maps.google.com/mapfiles/ms/icons/yellow-dot.png'
                                    };
                                    var marker_<?php echo $i ?> = new google.maps.Marker(oobjconfig);
                                    var informacion_<?php echo $i ?> = new google.maps.InfoWindow({
                                        content: texto
                                    });

                                    google.maps.event.addListener(marker_<?php echo $i ?>, 'click',
                                            function () {
                                                informacion_<?php echo $i ?>.open(gMapa, marker_<?php echo($i); ?>);
                                                document.getElementById("lugar").value = '<?php echo $parqueadero->getId_pq() ?>';
                                            });
                                } else {
                                    var texto = '<h4><?php echo $parqueadero->getNombre_pq() ?></h4>' + '<p><?php echo $parqueadero->getDir_pq() ?></p>' + '<p><?php echo $parqueadero->getTel_pq() ?></p>';
                                    var oobjconfig = {
                                        position: latlng,
                                        map: gMapa,
                                        icon: 'https://maps.google.com/mapfiles/ms/icons/purple-dot.png'
                                    };
                                    var marker_<?php echo $i ?> = new google.maps.Marker(oobjconfig);
                                    var informacion_<?php echo $i ?> = new google.maps.InfoWindow({
                                        content: texto
                                    });

                                    google.maps.event.addListener(marker_<?php echo $i ?>, 'click',
                                            function () {
                                                informacion_<?php echo $i ?>.open(gMapa, marker_<?php echo($i); ?>);
                                                document.getElementById("lugar").value = '<?php echo $parqueadero->getId_pq() ?>';
                                            });
                                }
        <?php
        $i++;
    }
}
?>
                    }
                }

            </script>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHqF2Cl4_hdmoFu1pw2GI0UJmnWylRnqE&callback=initMap&sensor=false&language=es&libraries=geometry">
            </script>

            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.4.1.js" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>

            <!-- Javascript -->
            <script src="../../js/jquery-3.2.1.min.js"></script>
            <script src="../../js/jquery-migrate-3.0.0.min.js"></script>
            <script src="../../js/jquery.backstretch.min.js"></script>
            <script src="../../js/wow.min.js"></script>
            <script src="../../js/retina-1.1.0.min.js"></script>
            <script src="../../js/waypoints.min.js"></script>
            <script src="../../js/scripts.js"></script>


    </body>
</html>
