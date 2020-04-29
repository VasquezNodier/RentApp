<?php

  class Mantenimientos{

    private $id_mant;
    private $id_vh;
    private $tipo_mant;
    private $fecha;
    private $observaciones;

    function __construct($id_mant, $id_vh, $tipo_mant, $fecha, $observaciones) {
        $this->id_mant = $id_mant;
        $this->id_vh = $id_vh;
        $this->tipo_mant = $tipo_mant;
        $this->fecha = $fecha;
        $this->observaciones = $observaciones;
    }
    
    function getId_mant() {
        return $this->id_mant;
    }

    function getId_vh() {
        return $this->id_vh;
    }

    function getTipo_mant() {
        return $this->tipo_mant;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getObservaciones() {
        return $this->observaciones;
    }

    function setId_mant($id_mant) {
        $this->id_mant = $id_mant;
    }

    function setId_vh($id_vh) {
        $this->id_vh = $id_vh;
    }

    function setTipo_mant($tipo_mant) {
        $this->tipo_mant = $tipo_mant;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setObservaciones($observaciones) {
        $this->observaciones = $observaciones;
    }



  }


?>
