<?php

  class Vehiculos{

    private $id_vh;
    private $placa_vh;
    private $modelo_vh;
    private $color_vh;
    private $tipo_vh;
    private $puestos_vh;
    private $transmisi0n_vh;
    private $combustible_vh;
    private $kilometraje_vh;
    private $estado_vh;
    private $valorDia_vh;
    private $seguro_vh;
    private $observaciones_vh;
    private $parqueadero;

    function __construct($id_vh, $placa_vh, $modelo_vh, $color_vh, $tipo_vh, $puestos_vh, $transmisi0n_vh, $combustible_vh, $kilometraje_vh, $estado_vh, $valorDia_vh, $seguro_vh, $observaciones_vh, $parqueadero) {
        $this->id_vh = $id_vh;
        $this->placa_vh = $placa_vh;
        $this->modelo_vh = $modelo_vh;
        $this->color_vh = $color_vh;
        $this->tipo_vh = $tipo_vh;
        $this->puestos_vh = $puestos_vh;
        $this->transmisi0n_vh = $transmisi0n_vh;
        $this->combustible_vh = $combustible_vh;
        $this->kilometraje_vh = $kilometraje_vh;
        $this->estado_vh = $estado_vh;  
        $this->valorDia_vh = $valorDia_vh;
        $this->seguro_vh = $seguro_vh;
        $this->observaciones_vh = $observaciones_vh;
        $this->parqueadero = $parqueadero;
    }
    
    function getId_vh() {
        return $this->id_vh;
    }

    function getPlaca_vh() {
        return $this->placa_vh;
    }

    function getModelo_vh() {
        return $this->modelo_vh;
    }

    function getColor_vh() {
        return $this->color_vh;
    }

    function getTipo_vh() {
        return $this->tipo_vh;
    }

    function getPuestos_vh() {
        return $this->puestos_vh;
    }

    function getTransmisi0n_vh() {
        return $this->transmisi0n_vh;
    }

    function getCombustible_vh() {
        return $this->combustible_vh;
    }

    function getKilometraje_vh() {
        return $this->kilometraje_vh;
    }

    function getEstado_vh() {
        return $this->estado_vh;
    }

    function getValorDia_vh() {
        return $this->valorDia_vh;
    }

    function getSeguro_vh() {
        return $this->seguro_vh;
    }

    function getObservaciones_vh() {
        return $this->observaciones_vh;
    }

    function getParqueadero() {
        return $this->parqueadero;
    }

    function setId_vh($id_vh) {
        $this->id_vh = $id_vh;
    }

    function setPlaca_vh($placa_vh) {
        $this->placa_vh = $placa_vh;
    }

    function setModelo_vh($modelo_vh) {
        $this->modelo_vh = $modelo_vh;
    }

    function setColor_vh($color_vh) {
        $this->color_vh = $color_vh;
    }

    function setTipo_vh($tipo_vh) {
        $this->tipo_vh = $tipo_vh;
    }

    function setPuestos_vh($puestos_vh) {
        $this->puestos_vh = $puestos_vh;
    }

    function setTransmisi0n_vh($transmisi0n_vh) {
        $this->transmisi0n_vh = $transmisi0n_vh;
    }

    function setCombustible_vh($combustible_vh) {
        $this->combustible_vh = $combustible_vh;
    }

    function setKilometraje_vh($kilometraje_vh) {
        $this->kilometraje_vh = $kilometraje_vh;
    }

    function setEstado_vh($estado_vh) {
        $this->estado_vh = $estado_vh;
    }

    function setValorDia_vh($valorDia_vh) {
        $this->valorDia_vh = $valorDia_vh;
    }

    function setSeguro_vh($seguro_vh) {
        $this->seguro_vh = $seguro_vh;
    }

    function setObservaciones_vh($observaciones_vh) {
        $this->observaciones_vh = $observaciones_vh;
    }

    function setParqueadero_vh($parqueadero_vh) {
        $this->parqueadero_vh = $parqueadero_vh;
    }    
  }

?>
