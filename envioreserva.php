<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$titulo = 'envio de reserva';

include_once './config/Conexion.php';
include_once './config/Redireccion.php';
include_once './config/config.php';
include_once './model/Usuarios.php';
//include_once 'plantillas/documento-declaracion.inc.php';
//include_once 'plantillas/navbar.inc.php';
include_once './controller/ReservasControl.php';
include_once 'app/ValidadorRecuperacion.inc.php';
require 'phpmailer/Exception.php';// probar si no sirve sacar la carpeta
require 'phpmailer/PHPMailer.php';//esta igual
require 'phpmailer/SMTP.php';//esta igual


$idreserva = $_POST['idreserva'];
$idparqueadero = $_POST['idp'];
$nombrep = $_POST['nombress'];
$email = $_SESSION['email'];
$idusu = $_SESSION['id_usuario'];
$nombre_usu = $_SESSION['nombre_usuario'];
//echo "id reserva: " . $idreserva . "id parqueadero ". $idparqueadero . "nombre". $nombrep;
//echo "nombre" . $nombre_usu . "id" . $idusu . "email". $email;

$cambio = RepositorioReserva::modificart_idp(Conexion::obtener_conexion(),$idreserva,$idparqueadero);

if($cambio){
    $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->SMTPDebug = 0;                                       // Enable verbose debug output
            $mail->isSMTP();                                            // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';                             // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                                     // Enable SMTP authentication
            $mail->Username = 'softrentapp@gmail.com';                  // SMTP username
            $mail->Password = 'noledigo';                               // SMTP password
            $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                          // TCP port to connect to
            //Recipients
            $mail->setFrom('softrentapp@gmail.com', 'reserva de transportes Rentapp Software');
            $mail->addAddress($email, $nombre_usu);     
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
            $mail->Subject = 'datos de la reserva de Easy travel';
            $mail->Body = $nombre_usu . ' mediante este correo le informamos acerca de su reserva' .
                    $idreserva . 'para mas informacion vaya a la seccion de reservas de easy travel';
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
                                <p>el correo se ha enviado a: <b><?php echo $email ?></b>, <b><?php echo $nombre_usu ?></b></p>
                                <br> 
                                <p><a href="<?php echo SERVIDOR ?>">volver a la pagina principal</a> gracias por usar Easy travel</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        } catch (Exception $e) {
            echo "error al enviar el mensaje: {$mail->ErrorInfo}";
        }

}else{
    echo 'ups algo paso';
}


?>
