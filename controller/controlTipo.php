<?php

class tipoControl {

    

            public static function tipoauto($conexion, $idt) {

        $tipos = [];

        if (isset($conexion)) {
            try {
                
                $sql = "SELECT * FROM tipoVehiculos where tipo_vh= :vh"; 
                $sentencia = $conexion->prepare($sql);
                $sentencia -> bindParam(':vh' , $idt , PDO::PARAM_STR);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {                        
                        $tipos[] = new TipoVehiculos(
                                $fila['tipo_vh'], 
                                $fila['vehiculo']);
                    }
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $tipos;
    }

}
