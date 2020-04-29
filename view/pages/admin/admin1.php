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

        <title>index</title>

        <!--Script de la ventana modal-->
        <script type="text/javascript">$('#myModal').on('shown.bs.modal', function () {
                $('#myInput').trigger('focus')
            })</script>

    </head>
    <body>

        <!--Ventana modal para login-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" align="center" id="login">Ingresar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Usuario/e-mail">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
                            </div>
                            <div class="form-group form-check">

                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Recordar</label>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Mostrar contraseña</label>

                            </div>

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
                            <button type="submit" class="btn btn-success">Entrar</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!--/ Ventana modal para login-->

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
                        <li><a class="nav-link scroll-link" href="#top-content">Home</a></li>
                        <li><a class="nav-link scroll-link" href="#services">Servicios</a></li>
                        <li><a class="nav-link scroll-link" href="#portfolio">Portafolio</a></li>
                        <li><a class="nav-link scroll-link" href="#testimonials">Team</a></li>
                        <li><a class="nav-link scroll-link" href="#blog">Blog</a></li>
                        <li><a class="nav-link scroll-link" href="#footer">Contáctenos</a></li>
                        <Botón de login>
                            <li>
                                <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#exampleModal">Ingresar</button>
                            </li>
                    </ul>
                    <div class="navbar-text navbar-right">
                        <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.twiter.com"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.intagram.com"><i class="fa fa-instagram"></i></a>
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
                                <a href="index.html"></a>
                            </div>
                            <h1 class="wow fadeInLeftBig">Administrador</h1>
                            <div class="description wow fadeInLeftBig">
                                <p>
                                    Holooooooooooooooooon
                                </p>
                            </div>
                            <div class="top-big-link wow fadeInUp">
                                <a class="btn btn-primary btn-link-1" href="https://azmind.com">Download it</a>
                                <a class="btn btn-primary btn-link-2 scroll-link" href="#services">Learn more</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="backstretch" style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; height: 778px; width: auto; z-index: -999998; position: absolute;">
                <img style="" src="../../img/backgrounds/1.jpg">
            </div>
        </div>

        <!-- Services -->
        <div class="services-container section-container">
            <div class="container">
                <div class="row">
                    <div class="col services section-description wow fadeIn">
                        <h2>Nuestro servicios</h2>
                        <div class="divider-1 wow fadeInUp"><span></span></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 services-box wow fadeInUp">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="services-box-icon">
                                    <i class="fas fa-magic"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3>Branding</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 services-box wow fadeInDown">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="services-box-icon">
                                    <i class="fas fa-cog"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3>Web design</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 services-box wow fadeInUp">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="services-box-icon">
                                    <i class="fab fa-twitter"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3>Social media</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Great support -->
        <div class="great-support-container section-container section-container-gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 great-support section-description wow fadeIn">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-7 great-support-box wow fadeInLeft">
                        <div class="great-support-box-text great-support-box-text-left">
                            <h3>Try our great support!</h3>
                            <p class="medium-paragraph">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                Ut wisi enim ad minim veniam, quis nostrud.
                                Exerci tation ullamcorper suscipit <span class="colored-text">lobortis nisl</span> ut aliquip ex ea commodo consequat.
                                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                Ut wisi enim ad minim veniam, quis nostrud.
                                Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-5 great-support-box great-support-box-phone wow fadeInUp">
                        <img src="../../img/devices/iphone.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- More services -->
        <div class="more-services-container section-container">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12 more-services section-description wow fadeIn">
                        <h2>More services</h2>
                        <div class="divider-1 wow fadeInUp"><span></span></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 more-services-box wow fadeInLeft">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="more-services-box-icon">
                                    <i class="fa fa-paperclip"></i>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <h3>Ut wisi enim ad minim</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                    Ut wisi enim ad minim veniam, quis nostrud.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 more-services-box wow fadeInLeft">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="more-services-box-icon">
                                    <i class="fa fa-pencil"></i>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <h3>Sed do eiusmod tempor</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                    Ut wisi enim ad minim veniam, quis nostrud.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 more-services-box wow fadeInLeft">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="more-services-box-icon">
                                    <i class="fa fa-cloud"></i>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <h3>Quis nostrud exerci tat</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                    Ut wisi enim ad minim veniam, quis nostrud.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 more-services-box wow fadeInLeft">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="more-services-box-icon">
                                    <i class="fa fa-google"></i>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <h3>Minim veniam quis nostrud</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                    Ut wisi enim ad minim veniam, quis nostrud.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Call to action -->
        <div class="call-to-action-container section-container section-container-image-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 call-to-action section-description wow fadeInLeftBig">
                        <p>
                            Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                            aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 section-bottom-button wow fadeInUp">
                        <a class="btn btn-link-1 scroll-link" href="#top-content">Download now</a>
                    </div>
                </div>
            </div>
            <div class="backstretch" style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; height: 320px; width: auto; z-index: -999998; position: absolute;">
                <img style="" src="../../img/backgrounds/1.jpg">
            </div>
        </div>
        <!-- Portfolio -->
        <div class="portfolio-container section-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 portfolio section-description wow fadeIn">
                        <h2>Más servicios</h2>
                        <div class="divider-1 wow fadeInUp"><span></span></div>
                        <p>We've completed 537 projects since we started back in 2010. Check them out!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 portfolio-box wow fadeInUp">
                        <div class="portfolio-box-image">
                            <img src="../../img/portfolio/1.jpg" alt="" data-at2x="../../img/portfolio/1.jpg">
                        </div>
                        <h3><a href="#">Acme branding</a> <i class="fa fa-angle-right"></i></h3>
                        <div class="portfolio-box-date"><i class="fa fa-calendar-o"></i> January 2015</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                    </div>
                    <div class="col-sm-4 portfolio-box wow fadeInDown">
                        <div class="portfolio-box-image">
                            <img src="../../img/portfolio/2.jpg" alt="" data-at2x="../../img/portfolio/2.jpg">
                        </div>
                        <h3><a href="#">WordPress design</a> <i class="fa fa-angle-right"></i></h3>
                        <div class="portfolio-box-date"><i class="fa fa-calendar-o"></i> March 2015</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                    </div>
                    <div class="col-sm-4 portfolio-box wow fadeInUp">
                        <div class="portfolio-box-image">
                            <img src="../../img/portfolio/3.jpg" alt="" data-at2x="../../img/portfolio/3.jpg">
                        </div>
                        <h3><a href="#">Created 150 flyers</a> <i class="fa fa-angle-right"></i></h3>
                        <div class="portfolio-box-date"><i class="fa fa-calendar-o"></i> August 2015</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 section-bottom-button wow fadeInUp">
                        <a class="btn btn-link-1" href="#">Load more</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Team -->
        <div class="testimonials-container section-container section-container-image-bg">
            <div class="container">
                <div class="row">
                    <div class="col testimonials section-description wow fadeIn"></div>
                </div>
                <div class="row">
                    <div class="col-md-10 offset-md-1 testimonial-list wow fadeInUp">

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                                <div class="testimonial-image">
                                    <img src="../../img/team/1.jpg" alt="team-1" data-at2x="../../img/team/1.jpg">
                                </div>
                                <div class="testimonial-text">
                                    <p>
                                        "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                        Lorem ipsum dolor sit amet, consectetur..."<br>
                                        <a href="#">Lorem Ipsum, dolor.co.uk</a>
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                                <div class="testimonial-image">
                                    <img src="../../img/team/2.jpg" alt="team-2" data-at2x="../../img/team/2.jpg">
                                </div>
                                <div class="testimonial-text">
                                    <p>
                                        "Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                                        ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                                        lobortis nisl ut aliquip ex ea commodo consequat..."<br>
                                        <a href="#">Minim Veniam, nostrud.com</a>
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                                <div class="testimonial-image">
                                    <img src="../../img/team/3.jpg" alt="team-3" data-at2x="../../img/team/3.jpg">
                                </div>
                                <div class="testimonial-text">
                                    <p>
                                        "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                        Lorem ipsum dolor sit amet, consectetur..."<br>
                                        <a href="#">Lorem Ipsum, dolor.co.uk</a>
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                                <div class="testimonial-image">
                                    <img src="../../img/team/4.jpg" alt="team-4" data-at2x="../../img/team/4.jpg">
                                </div>
                                <div class="testimonial-text">
                                    <p>
                                        "Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                                        ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                                        lobortis nisl ut aliquip ex ea commodo consequat..."<br>
                                        <a href="#">Minim Veniam, nostrud.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
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
                        </ul>

                    </div>
                </div>
            </div>
            <div class="backstretch" style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; height: 510px; width: auto; z-index: -999998; position: absolute;">
                <img style="" src="../../img/backgrounds/1.jpg">
            </div>
        </div>

        <!-- Blog -->
        <div class="blog-container section-container">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12 blog section-description wow fadeIn">
                        <h2>From the blog</h2>
                        <div class="divider-1 wow fadeInUp"><span></span></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 blog-box wow fadeInLeft">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="blog-box-image">
                                    <img src="../../img/blog/1.jpg" alt="" data-at2x="../../img/blog/1.jpg">
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <h3><a href="#">Ut wisi enim ad minim</a> <i class="fa fa-angle-right"></i></h3>
                                <div class="blog-box-date"><i class="fa fa-calendar-o"></i> 17 September 2015</div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 blog-box wow fadeInLeft">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="blog-box-image">
                                    <img src="../../img/blog/2.jpg" alt="" data-at2x="../../img/blog/2.jpg">
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <h3><a href="#">Sed do eiusmod tempor</a> <i class="fa fa-angle-right"></i></h3>
                                <div class="blog-box-date"><i class="fa fa-calendar-o"></i> 13 August 2015</div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 blog-box wow fadeInLeft">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="blog-box-image">
                                    <img src="../../img/blog/3.jpg" alt="" data-at2x="../../img/blog/3.jpg">
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <h3><a href="#">Quis nostrud exerci tat</a> <i class="fa fa-angle-right"></i></h3>
                                <div class="blog-box-date"><i class="fa fa-calendar-o"></i> 26 July 2015</div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 blog-box wow fadeInLeft">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="blog-box-image">
                                    <img src="../../img/blog/4.jpg" alt="" data-at2x="../../img/blog/4.jpg">
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <h3><a href="#">Minim veniam quis nostrud</a> <i class="fa fa-angle-right"></i></h3>
                                <div class="blog-box-date"><i class="fa fa-calendar-o"></i> 09 June 2015</div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 section-bottom-button wow fadeInUp">
                        <a class="btn btn-link-1" href="#">Visit the blog</a>
                    </div>
                </div>

            </div>
        </div>

        <!-- Footer -->
        <footer class="footer-container">

            <div class="container">
                <div class="row">

                    <div class="col-md-6 footer-left">
                        <h3>Contáctenos</h3>
                        <div class="contact-form">
                            <form role="form" action="../../contact.php" method="post">
                                <div class="form-group">
                                    <label class="sr-only" for="contact-email">Email</label>
                                    <input type="text" name="email" placeholder="Email..." class="contact-email form-control" id="contact-email">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="contact-subject">Subject</label>
                                    <input type="text" name="subject" placeholder="Subject..." class="contact-subject form-control" id="contact-subject">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="contact-message">Message</label>
                                    <textarea name="message" placeholder="Message..." class="contact-message form-control" id="contact-message"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Send message</button>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-5 offset-md-1 footer-right">
                        <h3>Siguenos</h3>
                        <div class="footer-social">
                            <a href="https://www.facebook.com"><i class="fa fa-facebook-f"></i></a>
                            <a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
                        </div>
                        <div class="footer-copyright">
                            &copy; Maren One Page Bootstrap Template <br>Download it for free on <a href="https://azmind.com">AZMIND</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="footer-bottom">
                <a class="scroll-link" href="#top-content"><i class="fa fa-chevron-up"></i></a>
            </div>

        </footer>


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


    </body>
</html>

