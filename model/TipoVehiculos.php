<?php
  
  class TipoVehiculos {

    private $tipo_vh;
    private $vehiculo_vh;

    function __construct($tipo_vh, $vehiculo_vh) {
        $this->tipo_vh = $tipo_vh;
        $this->vehiculo_vh = $vehiculo_vh;
    }
    
    function getTipo_vh() {
        return $this->tipo_vh;
    }

    function getVehiculo_vh() {
        return $this->vehiculo_vh;
    }

    function setTipo_vh($tipo_vh) {
        $this->tipo_vh = $tipo_vh;
    }

    function setVehiculo_vh($vehiculo_vh) {
        $this->vehiculo_vh = $vehiculo_vh;
    }



  }

?>
