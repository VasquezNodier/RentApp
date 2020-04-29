
<?php  
        include_once ('../../../config/Conexion.php');
        Conexion::abrir_conexion();
    
$id_usuario = $_POST["btn"];
    ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBHqF2Cl4_hdmoFu1pw2GI0UJmnWylRnqE&sensor=false&language=es&libraries=geometry"></script>
    <link rel="stylesheet" href="../../css/tablas.css"> 
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
</head>
<body>
     <div class="top-content" style="position: relative; z-index: 0; background: none;">
 <div id="wrapper"> 
        <div id="mapa" style="width: 1105px; height: 600px;">
          
        </div></div><form action="Vehiculorentado.php" method="post">
         <button class="btn" name="btn" value="<?php echo $id_usuario; ?>"> Volver <span class="arrow">❯</span></button>
        </form></div>
        <script type="text/javascript">
            var g_coordenadas = [[7.117845, -73.111369],
                [7.117206, -73.111219],
                [7.116737, -73.111069],
                [7.116312, -73.110918],
                [7.115801, -73.110811],
                [7.115375, -73.110827],
                [7.115215, -73.11079],
                [7.115077, -73.110763],
                [7.114885, -73.110725],
                [7.114693, -73.110656],
                [7.114576, -73.110693],
                [7.11448, -73.110677],
                [7.114363, -73.110661],
                [7.114246, -73.110634],
                [7.114023, -73.110607],
                [7.113863, -73.110602],
                [7.113725, -73.110532],
                [7.113618, -73.110484],
                [7.11348, -73.1105],
                [7.113363, -73.110409],
                [7.113373, -73.110709],
                [7.113333, -73.110719],
                [7.113334, -73.110729],
                [7.113335, -73.110739],
                [7.113336, -73.110740],
                [7.113337, -73.110741]];

            function moverMarker(marker, cont) {
                var latLngAux = g_coordenadas[cont];
                var latLng = new google.maps.LatLng(latLngAux[0], latLngAux[1]);
                marker.setPosition(latLng);
                if (cont < g_coordenadas.length - 1) {
                    setTimeout(function () {
                        cont++;
                        moverMarker(marker, cont);
                    }, 500);
                }

            }

            var divMapa = document.getElementById('mapa');
            navigator.geolocation.getCurrentPosition(fn_ok, fn_mal);
            function fn_mal() {
                console.log("Error");
            }
            function fn_ok(rta) {
                var lat = rta.coords.latitude;
                var lon = rta.coords.longitude;
                var gLatLon = new google.maps.LatLng(lat, lon);
                var objConfig = {
                    zoom: 12,
                    center: gLatLon
                };
                //aca va el punto rojo usuario
                var gMapa = new google.maps.Map(divMapa, objConfig);
                var image = {
                    url: 'componentes/img/icon.png', //ruta de la imagen
                    size: new google.maps.Size(40, 60), //tamaño de la imagen
                    origin: new google.maps.Point(0, 0), //origen de la iamgen
                    //el ancla de la imagen, el punto donde esta marcando, en nuestro caso el centro inferior.
                    anchor: new google.maps.Point(20, 60)
                };
                var objConfigMarker = {
                    position: gLatLon,
                    map: gMapa,
                    title: "usuario"
                };
                var gMarker = new google.maps.Marker(objConfigMarker);
                var texto = '<h4>nombre del lugar:';
                var informacion = new google.maps.InfoWindow({
                    content: texto
                });
                google.maps.event.addListener(gMarker, 'click',
                        function () {
                            informacion.open(gMapa, gMarker);
                            moverMarker(gMarker, 0);
                        });
            }

        </script>
       
</body>
</html>