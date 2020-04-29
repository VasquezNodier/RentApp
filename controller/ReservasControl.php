<?php

class ReservasControl {

    public static function guaradar($conexion, $reserva) {

        $insertado = false;

        if ($conexion) {
            try {

                $sql = "insert into reservas (id_res , id_vh, id_user, fechaRecibido, fechaDevolucion, valor_res, id_pi, id_pf) VALUES ('',:b,:c,:d,:e,:f,:g,:h)";
                $sentencia = $conexion->prepare($sql);

//                $a = $reserva->getId_res();
                $b = $reserva->getId_vh();
                $c = $reserva->getId_user();
                $d = $reserva->getFecharecibido();
                $e = $reserva->getFechadevolucion();
                $f = $reserva->getValor_res();
                $g = $reserva->getId_pi();
                $h = $reserva->getId_pf();


//                $sentencia->bindParam(':a', $a, PDO::PARAM_STR);
                $sentencia->bindParam(':b', $b, PDO::PARAM_STR);
                $sentencia->bindParam(':c', $c, PDO::PARAM_STR);
                $sentencia->bindParam(':d', $d, PDO::PARAM_STR);
                $sentencia->bindParam(':e', $e, PDO::PARAM_STR);
                $sentencia->bindParam(':f', $f, PDO::PARAM_STR);
                $sentencia->bindParam(':g', $g, PDO::PARAM_STR);
                $sentencia->bindParam(':h', $h, PDO::PARAM_STR);

                $insertado = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
            return $insertado;
        }
    }

    public static function traerreserva($conexion, $idvh) {

        $reserva = [];

        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM reservas where id_vh= :vh";
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':vh', $idvh, PDO::PARAM_STR);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $reserva[] = new Reservas(
                                $fila['id_res'], 
                                $fila['id_vh'], 
                                $fila['id_user'], 
                                $fila['fechaRecibido'], 
                                $fila['fechaDevolucion'], 
                                $fila['valor_res'], 
                                $fila['id_pi'], 
                                $fila['id_pf']);
                    }
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $reserva;
    }

}
