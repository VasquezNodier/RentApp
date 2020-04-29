<?php

class equiposreserva {

    

            public static function equipores($conexion, $idres) {

        $equiposred = [];

        if (isset($conexion)) {
            try {
                
                $sql = "SELECT * FROM equipoReserva where id_res= :vh"; 
                $sentencia = $conexion->prepare($sql);
                $sentencia -> bindParam(':vh' , $idres , PDO::PARAM_STR);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {                        
                        $equiposred[] = new EquipoReserva(
                                $fila['id_equipoReserva'], 
                                $fila['id_eq'], 
                                $fila['id_res'],
                                $fila['cantidad']);
                    }
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $equiposred;
    }

}