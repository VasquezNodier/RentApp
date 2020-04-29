<?php

class VehiculosControl {

    public static function traervehiculosById($conexion, $idparq) {

        $vehiculo = [];

        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM vehiculos WHERE parqueadero = :vh "; //AND estado_vh = :es
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':vh', $idparq, PDO::PARAM_STR);
//                $sentencia -> bindParam(':vh' , 'Disponible' , PDO::PARAM_STR);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $vehiculo[] = new Vehiculos(
                                $fila['id_vh'], 
                                $fila['placa_vh'], 
                                $fila['modelo_vh'], 
                                $fila['color_vh'], 
                                $fila['tipo_vh'], 
                                $fila['puestos_vh'], 
                                $fila['transmision_vh'], 
                                $fila['combustible_vh'], 
                                $fila['kilometraje_vh'], 
                                $fila['estado_vh'], 
                                $fila['valorDia_vh'], 
                                $fila['seguro_vh'], 
                                $fila['observaciones_vh'], 
                                $fila['parqueadero']);
                    }
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $vehiculo;
    }

    public static function modifestado($conexion, $idvh, $estado) {
        $estadomodif = false;
        if (isset($conexion)) {
            try {
                $sql = "UPDATE vehiculos SET estado_vh = '$estado' WHERE id_vh = :vh ";
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':vh', $idvh, PDO::PARAM_STR);
                $estadomodif = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
    }

    public static function traervehiculos($conexion) {

        $vehiculo = [];

        if (isset($conexion)) {
            try {
                $estado = "Disponible";
                $sql = "SELECT * FROM vehiculos";
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':vh', $idparq, PDO::PARAM_STR);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $vehiculo[] = new Vehiculos(
                                $fila['id_vh'], 
                                $fila['placa_vh'], 
                                $fila['modelo_vh'], 
                                $fila['color_vh'], 
                                $fila['tipo_vh'], 
                                $fila['puestos_vh'], 
                                $fila['transmision_vh'], 
                                $fila['combustible_vh'], 
                                $fila['kilometraje_vh'], 
                                $fila['estado_vh'], 
                                $fila['valorDia_vh'], 
                                $fila['seguro_vh'], 
                                $fila['observaciones_vh'], 
                                $fila['parqueadero']);
                    }
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $vehiculo;
    }

    public static function traervehiculosportipo($conexion, $tipo) {

        $vehiculo = [];

        if (isset($conexion)) {
            try {
                $estado = "Disponible";
                $sql = "SELECT * FROM vehiculos where tipo_vh=:vh";
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':vh', $tipo, PDO::PARAM_STR);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $vehiculo[] = new Vehiculos(
                                $fila['id_vh'], $fila['placa_vh'], $fila['modelo_vh'], $fila['color_vh'], $fila['tipo_vh'], $fila['puestos_vh'], $fila['transmision_vh'], $fila['combustible_vh'], $fila['kilometraje_vh'], $fila['estado_vh'], $fila['valorDia_vh'], $fila['seguro_vh'], $fila['observaciones_vh'], $fila['parqueadero']);
                    }
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $vehiculo;
    }

    public static function traervehiculosreservados($conexion, $estado) {

        $vehiculo = [];

        if (isset($conexion)) {
            try {

                $sql = "SELECT * FROM vehiculos where estado_vh = :vh";
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':vh', $estado, PDO::PARAM_STR);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $vehiculo[] = new Vehiculos(
                                $fila['id_vh'], 
                                $fila['placa_vh'], 
                                $fila['modelo_vh'], 
                                $fila['color_vh'], 
                                $fila['tipo_vh'], 
                                $fila['puestos_vh'], 
                                $fila['transmision_vh'], 
                                $fila['combustible_vh'], 
                                $fila['kilometraje_vh'], 
                                $fila['estado_vh'], 
                                $fila['valorDia_vh'], 
                                $fila['seguro_vh'], 
                                $fila['observaciones_vh'], 
                                $fila['parqueadero']);
                    }
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $vehiculo;
    }

    public static function traervehiculosporid($conexion, $id) {

        $vehiculo = [];

        if (isset($conexion)) {
            try {
                $estado = "Disponible";
                $sql = "SELECT * FROM vehiculos where id_vh=:vh";
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':vh', $id, PDO::PARAM_STR);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $vehiculo[] = new Vehiculos(
                                $fila['id_vh'], $fila['placa_vh'], $fila['modelo_vh'], $fila['color_vh'], $fila['tipo_vh'], $fila['puestos_vh'], $fila['transmision_vh'], $fila['combustible_vh'], $fila['kilometraje_vh'], $fila['estado_vh'], $fila['valorDia_vh'], $fila['seguro_vh'], $fila['observaciones_vh'], $fila['parqueadero']);
                    }
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $vehiculo;
    }

    public static function traervehiculosact($conexion, $idv) {

        $actualizado = false;

        if ($conexion) {
            try {

                $sql = "UPDATE vehiculos SET estado_vh='Mantenimiento' WHERE id_vh=:b ";
                $sentencia = $conexion->prepare($sql);

//                $sentencia->bindParam(':a', $a, PDO::PARAM_STR);
                $sentencia->bindParam(':b', $idv, PDO::PARAM_STR);


                $actualizado = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
            return $actualizado;
        }
    }

    public static function traervehiculosreservadospq($conexion, $estado, $idpq) {

        $vehiculo = [];

        if (isset($conexion)) {
            try {

                $sql = "SELECT * FROM vehiculos where estado_vh = :vh and parqueadero = :bh";
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':vh', $estado, PDO::PARAM_STR);
                $sentencia->bindParam(':bh', $idpq, PDO::PARAM_STR);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $vehiculo[] = new Vehiculos(
                                $fila['id_vh'], $fila['placa_vh'], $fila['modelo_vh'], $fila['color_vh'], $fila['tipo_vh'], $fila['puestos_vh'], $fila['transmision_vh'], $fila['combustible_vh'], $fila['kilometraje_vh'], $fila['estado_vh'], $fila['valorDia_vh'], $fila['seguro_vh'], $fila['observaciones_vh'], $fila['parqueadero']);
                    }
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $vehiculo;
    }

    public static function traervehiculosactest($conexion, $idv, $estado, $pq) {

        $actualizado = false;

        if ($conexion) {
            try {

                $sql = "UPDATE vehiculos SET estado_vh= :b, parqueadero= :c WHERE id_vh=:a ";
                $sentencia = $conexion->prepare($sql);

//                $sentencia->bindParam(':a', $a, PDO::PARAM_STR);
                $sentencia->bindParam(':a', $idv, PDO::PARAM_STR);
                $sentencia->bindParam(':b', $estado, PDO::PARAM_STR);
                $sentencia->bindParam(':c', $pq, PDO::PARAM_STR);


                $actualizado = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
            return $actualizado;
        }
    }

}

?>
