<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include_once ('../../../controller/ControlSesion.php');
include_once '../../../controller/VehiculosContol.php';
include_once ('../../../model/Reservas.php');
include_once ('../../../config/Conexion.php');
include_once ('../../../controller/ReservasControl.php');
include_once ('../../../config/Redireccion.php');
require ('../../../phpmailer/Exception.php');
require ('../../../phpmailer/PHPMailer.php');
require ('../../../phpmailer/SMTP.php');

$idpari = $_GET['a'];
$idpf = $_GET['b'];
$fechai = $_GET['c'];
$fechaf = $_GET['d'];
$idauto = $_GET['e'];
$costo = $_GET['f'];

$diff = (strtotime($fechaf) - strtotime($fechai)) / 24 / 3600;
$dias = $diff + 1;
$costot = $costo * $dias;

if (isset($_POST['pagar'])) {
    if (ControlSesion::sesion_iniciada()) {
        Conexion::abrir_conexion();
        $id_user = $_SESSION['id_user'];
        $nombre_user = $_SESSION['nombres_user'];
        $email =$_SESSION['email_user'];

        $ale = rand(3, 15);
        $reserva = new Reservas('', $idauto, $_SESSION['id_user'], $fechai, $fechaf, $costot, $idpari, $idpf);
        $resultado = ReservasControl::guaradar(Conexion::obtener_conexion(), $reserva);
        if ($resultado) {
//            $estad = Reservado; 
             VehiculosControl::modifestado(Conexion::obtener_conexion(), $idauto, 'Reservado');

            $mail = new PHPMailer(true);
            try {
                //Server settings
                $mail->SMTPDebug = 0;                                       // Enable verbose debug output
                $mail->isSMTP();                                            // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';                             // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                                     // Enable SMTP authentication
                $mail->Username = 'softrentapp@gmail.com';                  // SMTP username
                $mail->Password = 'noledigo15';                               // SMTP password
                $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587;                                          // TCP port to connect to
                //Recipients
                $mail->setFrom('softrentapp@gmail.com', 'reserva de transportes Rentapp Software');
                $mail->addAddress($email, $nombre_user);
                //// Add a recipient
                //    $mail->addAddress('ellen@example.com');               // Name is optional
                //    $mail->addReplyTo('info@example.com', 'Information');
                //    $mail->addCC('cc@example.com');
                //    $mail->addBCC('bcc@example.com');
                // Attachments
                //    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                //    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Reserva de vehículo RentApp';
                $mail->Body = $nombre_user . ' mediante este correo le informamos acerca de su reserva ' .
                        $email. ' para mas informacion vaya a la seccion de reservas de easy travel ';
//    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                ?>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> correo enviado
                                </div>
                                <div class="panel-body text-center">
                                    <p>el correo se ha enviado a: <b><?php echo $email ?></b>, <b><?php echo $nombre_user ?></b></p>
                                    <br> 
                                    <p><a href="<?php echo SERVIDOR ?>">volver a la pagina principal</a> gracias por usar RentApp</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            } catch (Exception $e) {
                echo "error al enviar el mensaje: {$mail->ErrorInfo}";
            }
        } else {
            echo 'ups no se ha podido guardar la reserva';
        }
    }
}
?>
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

        <!-- Top menu -->
        <div class="navbar" style="height: 60px; width: 100% ">
            <nav class="navbar navbar-expand-md navbar-dark fixed-top navbar-no-bg" role="navigation">
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
                            <?php
                            if (ControlSesion::sesion_iniciada()) {
                                ?>
                                <li class="nav-link">cliente: <?php echo $_SESSION['nombres_user'] ?></li>
                                <?php
                            }
                            ?>

                            <!--<li><a class="nav-link scroll-link" href="#footer">Contáctenos</a>-->
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div>
            <br>
            <div class="row">
                <div class="col">
                    <form class="px-4 py-3" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
                        <div class="form-group">
                            <label for="exampleDropdownFormEmail1">Saldo en tarjeta</label>
                            <select class = "form-control" name="tarjeta">
                                <option value="123">id tarjeta: 123 con $500000</option>
                                <option value="124">id tarjeta: 124 con $500000</option>
                                <option value="125">id tarjeta: 125 con $600000</option>
                                <option value="126">id tarjeta: 126 con $300000</option>
                                <option value="127">id tarjeta: 127 con $900000</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleDropdownFormPassword1">El costo total de la reserva</label>
                            <input value="<?php echo $costot; ?>" class="form-control" readonly="readonly" id="exampleDropdownFormPassword1" >
                        </div>

                        <button type="submit" name="pagar" class="btn btn-primary">Pagar</button>
                    </form>
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


