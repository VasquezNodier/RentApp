<?php
include_once ('../../../config/Conexion.php');
include_once ('../../../model/Parqueaderos.php');
include_once ('../../../controller/ParqueaderoControl.php');
include_once ('../../../controller/ReservasControl.php');
include_once ('../../../model/Reservas.php');
Conexion::abrir_conexion();

$reservas = ReservasControl::traerreserva(Conexion::obtener_conexion(), 7);
?>
<tr>
 
    <?php
    if (count($reservas)) {
        foreach ($reservas as $reserva) {
            ?>
            <td><?php echo $reserva->getFecharecibido(); ?></td>
            <td><?php echo $reserva->getFechadevolucion(); ?></td>
            <td><?php echo $reserva->getValor_res(); ?></td>
            <?php
        }
    }
    ?>