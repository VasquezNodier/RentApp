<?php

class Mantenimiento{

    

            public static function traermantenimiento($conexion, $idm) {

        $mantenimientos = [];

        if (isset($conexion)) {
            try {
                
                $sql = "SELECT * FROM mantenimiento where id_vh = :vh"; 
                $sentencia = $conexion->prepare($sql);
                $sentencia -> bindParam(':vh' , $idm , PDO::PARAM_STR);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {                        
                        $mantenimientos[] = new Mantenimientos(
                                $fila['id_mant'],
                                $fila['id_vh'],
                                $fila['tipo_mant'],
                                $fila['fecha'], 
                                $fila['observaciones']);
                    }
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $mantenimientos;
    }

}
