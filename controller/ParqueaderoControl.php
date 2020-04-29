<?php
//include_once('../model/Parqueaderos.php');
class ParqueaderoControl {

    public static function traerparqueaderos($conexion) {

        $parqueadero2 = [];
        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM parqueaderos";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $parqueadero2[] = new Parqueaderos($fila['id_pq'], $fila['nombre_pq'], $fila['tel_pq'],$fila['dir_pq'], $fila['long_pq'], $fila['lati_pa']);
                    }
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $parqueadero2;
    }

    public static function traerparqueaderosporid($conexion, $idpq) {

        $parqueadero = [];

        if (isset($conexion)) {

            try {


                $sql = "SELECT * FROM parqueaderos where id_pq= :vh";
                $sentencia = $conexion->prepare($sql);
                $sentencia -> bindParam(':vh' , $idpq , PDO::PARAM_STR);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $parqueadero[] = new Parqueaderos($fila['id_pq'], $fila['nombre_pq'], $fila['tel_pq'],$fila['dir_pq'], $fila['long_pq'], $fila['lati_pa']);
                    }
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $parqueadero;
    }

}
