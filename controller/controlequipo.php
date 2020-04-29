<?php

class equipo {

    

            public static function equipos($conexion, $idr) {

        $equipos = [];

        if (isset($conexion)) {
            try {
                
                $sql = "SELECT * FROM equipos where id_eq= :vh"; 
                $sentencia = $conexion->prepare($sql);
                $sentencia -> bindParam(':vh' , $idr , PDO::PARAM_STR);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {                        
                        $equipos[] = new Equipos(
                                $fila['id_eq'], 
                                $fila['talla_eq'], 
                                $fila['color_eq'],
                                $fila['descripcion']);
                    }
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $equipos;
    }

}
