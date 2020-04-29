
<?PHP
include_once ("../../config/Conexion.php");
include_once ("../../model/Usuarios.php");
include_once ("../../controller/ControlSesion.php");
include_once ("../../controller/UserControl.php");
include_once ('../../config/Redireccion.php');

if (isset($_POST['enviar'])) {
    $usuarioo = $_POST['user'];
    $passs = $_POST['pass'];
    Conexion::abrir_conexion();
    $usuario = UserControl::obtener_usuarioo(Conexion::obtener_conexion(), $usuarioo, $passs);

    if (!empty($usuario)) {
        ControlSesion::iniciar_sesion($usuario->getId_user(), $usuario->getNombres_user(), $usuario->getTipo_user(), $usuario->getCorreo_user());
        $tipo = $_SESSION['tipo_user'];
        if (strcmp($tipo, "1") === 0) {
            Redireccion::redirigir(RUTA_USUARIO);
        } else if (strcmp($tipo, "2") === 0) {
            Redireccion::redirigir(RUTA_ADMINISTRADOR);
        } else {
            Redireccion::redirigir(RUTA_PARQUEADERO);
        }
    }
}
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
        <!--<link rel="stylesheet" href="../fonts/css/font-awesome.min.css">-->
        <!--link rel="stylesheet" href="../css/bootstrap.min.css"-->

        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/animate.css">
        <link rel="stylesheet" href="../css/form-elements.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/mediaqueries.css">

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="../img/icon/favicon.png">
        
        <title>index</title>

        <!--Script de la ventana modal-->
        <script type="text/javascript">
            $('#myModal').on('shown.bs.modal',
                    function () {
                        $('#myInput').trigger('focus');
                    }
            );</script>

        <!--Script de FontsAwesom-->
        <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" crossorigin="anonymous"></script>

    </head>
    <body>

        <!--Ventana modal para login-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"  id="login">Ingresar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1" name="user" aria-describedby="emailHelp" placeholder="Usuario/e-mail">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="exampleInputPassword1" name="pass" placeholder="Contraseña">
                            </div>
                            <!--                            <div class="form-group form-check">
                            
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Recordar</label>
                                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Mostrar contraseña</label>
                            
                                                        </div>-->

                            <div class="text-center p-t-115">
                                <span class="txt1">
                                    No tienes una cuenta?
                                </span>
                                <a class="txt2" href="signup.html">
                                    Registrarme
                                </a>
                            </div>
                            <div class="text-center p-t-115">
                                <a class="txt1" href="#">
                                    ¡Olvidé mi contraseña!
                                </a>
                            </div>
                            <button type="submit" name="enviar" class="btn btn-success" >Entrar</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!--/ Ventana modal para login-->

        <!--Ventana modal para mapa-->
<!--        <div class="modal fade bd-example-modal-xl" id="exampleModalMap" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header" >
                        <h5 class="modal-title" align="center" id="map">Mapa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="mapirris" class="column" style="padding:10px; height:460px"></div>
                    </div>
                </div>
            </div>
        </div>
        div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                ...
            </div>
        </div>
    </div>-->

    <!--/ Ventana modal para mapa-->

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
                <ul class="navbar-nav mr-auto">
                    <li><a class="nav-link scroll-link" href="#top-content">Inicio</a></li>
                    <li><a class="nav-link scroll-link" href="#services">Servicios</a></li>
                    <!--li><a class="nav-link scroll-link" href="#portfolio">Portafolio</a></li-->
                    <li><a class="nav-link scroll-link" href="#testimonials">Equipo</a></li>
                    <li><a class="nav-link scroll-link" href="#maps">Puntos de Atención</a></li>
                    <li><a class="nav-link scroll-link" href="#footer">Contáctenos</a></li>
                    <!--Botón de login-->
                    <li>
                        <button type="button" class="btn btn-outline-light" data-toggle="modal"  data-target="#exampleModal" data-backdrop="false"> 
                            Ingresar
                        </button>
                    </li>
                </ul>
                <div class="navbar-text navbar-right">
                    <a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.twiter.com"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.intagram.com"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Top content -->
    <div class="top-content" style="position: relative; z-index: 0; background: none;">

        <!--div class="top-content"-->
        <div class="inner-bg">
            <div class="container">

                <div class="row">
                    <div class="col-md-8 offset-md-2 text">
                        <div class="logo wow fadeInDown">
                            <a href="index.php"></a>
                        </div>
                        <h1 class="wow fadeInLeftBig">Alquiler de transportes</h1>
                        <div class="description wow fadeInLeftBig">
                            <p>
                                Bienvenido al mejor servicio de alquiler de vehiculos para mejorar la manera en la que realizas tus labores.
                            </p>
                        </div>
                        <div class="top-big-link wow fadeInUp">
                            <!--a class="btn btn-primary btn-link-1" href="https://azmind.com">Download it</a-->
                            <a class="btn btn-primary btn-link-2 scroll-link" href="#services">Conocer más</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="backstretch" style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; height: 778px; width: auto; z-index: -999998; position: absolute;">
            <img style="width: auto; height: auto;" src="../img/backgrounds/1.jpg">
        </div>

        <!--div class="backstretch" style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; height: 628px; width: 613px; z-index: -999998; position: absolute;">
          <img style="position: absolute; margin: 0px; padding: 0px; border: medium none; width: 942px; height: 628px; max-height: none; max-width: none; z-index: -999999; left: -164.5px; top: 0px;" src="assets/img/backgrounds/1.jpg">
        </div>

        <div class="backstretch" style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; height: 778px; width: 1349px; z-index: -999998; position: absolute;">
          <img style="position: absolute; margin: 0px; padding: 0px; border: medium none; width: 1349px; height: 899.333px; max-height: none; max-width: none; z-index: -999999; left: 0px; top: -60.6667px;"
          src="assets/img/backgrounds/1.jpg">
        </div>
    </div-->

        <!-- Services -->
        <div class="services-container section-container" >
            <div class="container">
                <div class="row">
                    <div class="col services section-description wow fadeIn">
                        <h2>Nuestro servicios</h2>
                        <div class="divider-1 wow fadeInUp"><span></span></div>
                    </div>
                </div>

                <div class="row">

                    <div class="col services-box wow fadeInUp" align="center">
                        <div class="row" >
                            <div class="col">
                                <div class="services-box-icon">
                                    <i class="fas fa-car"></i>
                                </div>
                                <h3 align="center">Automóviles</h3>
                                <p align="center">Nuestros automóviles son especiales y cumplen con las condiciones de seguridad requeridas para el transporte.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col services-box wow fadeInDown">
                        <div class="row">
                            <div class="col">
                                <div class="services-box-icon">
                                    <i class="fas fa-motorcycle"></i>
                                </div>
                                <h3 align="center">Motocicletas</h3>
                                <p align="center">Nuestras motocicletas tienen diferentes cilindrajes para que puedas disfutar un poco más, si te gusta la velocidad.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col services-box wow fadeInUp">
                        <div class="row">
                            <div class="col">
                                <div class="services-box-icon">
                                    <i class="fas fa-bicycle"></i>
                                </div>
                                <h3 align="center">Bicicletas</h3>
                                <p align="center">¿Quieres disfrutar de una salida con tus amigos? Tu mejor opción es una bici. Además cuidamos nuestro planeta.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col services-box wow fadeInUp">
                        <div class="row">
                            <div class="col">
                                <div class="services-box-icon">
                                    <i class="fas fa-skating"></i>
                                </div>
                                <h3 align="center">Patines</h3>
                                <p align="center">Especiales para recorridos cortos y vivir una nueva experiencias, no ocupan mucho espacio y son muy funcionales.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team -->
        <div class="testimonials-container section-container section-container-image-bg">
            <div class="backstretch" style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; height: 560px; width: auto; z-index: -999998; position: absolute;">
                <img style="" src="../img/backgrounds/1.jpg">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col testimonials section-description wow fadeIn"></div>
                </div>
                <div class="row">
                    <div class="col-md-10 offset-md-1 testimonial-list wow fadeInUp">

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">

                                <div class="row">
                                    <div class="col testimonial-image ">
                                        <img src="../img/team/1.jpg" alt="team-1" data-at2x="../img/team/1.jpg">
                                        <a href="#"><h3>Nodier Alexander Vasquez Pavas</h3></a>
                                    </div>
                                    <div class="col testimonial-image">
                                        <img src="../img/team/2.jpg" alt="team-2" data-at2x="../img/team/2.jpg">
                                        <a href="#"><h3>Jerson Arciniegas Niño</h3></a>                            </div>

                                    <div class="col testimonial-image">
                                        <img src="../img/team/3.jpg" alt="team-3" data-at2x="../img/team/3.jpg">
                                        <a href="#"><h3>Jhonatan Arciniegas Niño</h3></a>
                                    </div>
                                    <div class="testimonial-image">
                                        <img src="../img/team/4.jpg" alt="team-4" data-at2x="../img/team/4.jpg">
                                        <a href="#"><h3>Cristian Eduardo Prieto</h3></a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">

                                        <div class="testimonial-text">
                                            <p>
                                                Estudiantes de ingeniería de sistemas. Sexto semestre. <br>
                                                Universidad Autónoma de Bucaramanga <br>
                                                Ingeniería de software II <br>
                                            </p>
                                        </div>

                                    </div>


                                </div>

                            </div>

                        </div>
                        <!-- Nav tabs -->
                        <!--ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab3-tab" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab4-tab" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"></a>
                            </li>
                        </ul-->

                    </div>
                </div>
            </div>

        </div>

        <!-- Maps -->
        <div class="maps-container section-container" style="padding-Top: 50px">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12 maps section-description wow fadeIn">
                        <h2>Nuestros puntos de atención</h2>
                        <div class="divider-1 wow fadeInUp"><span></span></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 maps-box wow fadeInLeft">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="maps-box-image">
                                    <img src="../img/blog/1.jpg" alt="" data-at2x="../img/blog/1.jpg">
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <h3>Éxito Cabecera</h3>
                                <!--div class="maps-box-date"><i class="far fa-calendar"></i> 17 September 2015</div-->
                                <p>
                                    Calle 48 # 36 - 25
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 maps-box wow fadeInLeft">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="maps-box-image">
                                    <img src="../img/blog/2.jpg" alt="" data-at2x="../img/blog/2.jpg">
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <h3>Real de Minas</h3>
                                <!--div class="maps-box-date"><i class="far fa-calendar"></i> 13 August 2015</div-->
                                <p>
                                    Calle 60 # 1W - 20
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 maps-box wow fadeInLeft">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="maps-box-image">
                                    <img src="../img/blog/3.jpg" alt="" data-at2x="../img/blog/3.jpg">
                                </div>
                            </div>
                            <div class="col-sm-6 maps-box wow fadeInLeft">
                                <h3>La Isla</h3>
                                <!--div class="maps-box-date"><i class="far fa-calendar"></i> 26 July 2015</div-->
                                <p>
                                    Calle 56 # 22 - 25
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 maps-box wow fadeInLeft">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="maps-box-image">
                                    <img src="../img/blog/4.jpg" alt="" data-at2x="../img/blog/4.jpg">
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <h3>San francisco</h3>
                                <!--div class="maps-box-date"><i class="far fa-calendar"></i> 09 June 2015</div-->
                                <p>
                                    Calle 56 # 22 - 16
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!--                    <div class="row">
                                        <div class="col-sm-12 section-bottom-button wow fadeInUp">
                                            <a class="btn btn-link-1" href="#" data-toggle="modal" data-target="#exampleModalMap" >Mostrar en el mapa </a>
                                        </div>
                                    </div>-->

            </div>
        </div>

        <!-- Footer -->
        <footer class="footer-container">

            <div class="container">
                <div class="row">

                    <div class="col-md-6 footer-left">
                        <h3>Contáctenos</h3>
                        <div class="contact-form">
                            <form role="form" action="../contact.php" method="post">
                                <div class="form-group">
                                    <label class="sr-only" for="contact-email">Correo</label>
                                    <input type="text" name="email" placeholder="Email..." class="contact-email form-control" id="contact-email">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="contact-subject">Asunto</label>
                                    <input type="text" name="subject" placeholder="Subject..." class="contact-subject form-control" id="contact-subject">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="contact-message">Mensaje</label>
                                    <textarea name="message" placeholder="Message..." class="contact-message form-control" id="contact-message"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-5 offset-md-1 footer-right">
                        <h3>Síguenos</h3>
                        <div class="footer-social">
                            <a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="footer-copyright">
                            &copy; Proyecto realizado por estudiantes de ingeniería de sistemas <br>Universidad Autónoma de Bucaramanga 2019 
                        </div>
                    </div>

                </div>
            </div>

            <div class="footer-bottom">
                <a class="scroll-link" href="#top-content"><i class="fa fa-chevron-up"></i></a>
            </div>

        </footer>

        <script>
        function initMap() {
            var location = {lat: 7.093294, lng: -73.107440};
            var map = new google.maps.Map(
                    document.getElementById('mapirris'), {zoom: 13, center: location});
            addMarker({lat: 7.117871, lng: -73.116690});
            addMarker({lat: 7.060415, lng: -73.086678});
            addMarker({lat: 7.100618, lng: -73.128912});
            addMarker({lat: 7.093294, lng: -73.107440});

            function addMarker(coords) {
                var marker = new google.maps.Marker({position: coords, map: map});
            }

        }
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHqF2Cl4_hdmoFu1pw2GI0UJmnWylRnqE&callback=initMap">
        </script>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>

        <!-- Javascript -->
        <script src="../js/jquery-3.2.1.min.js"></script>
        <script src="../js/jquery-migrate-3.0.0.min.js"></script>
        <script src="../js/jquery.backstretch.min.js"></script>
        <script src="../js/wow.min.js"></script>
        <script src="../js/retina-1.1.0.min.js"></script>
        <script src="../js/waypoints.min.js"></script>
        <script src="../js/scripts.js"></script>


</body>
</html>

