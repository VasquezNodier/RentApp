<?php

class TarjetaPersonalizada {
    
    private $idtarjeta;
    private $idusuario;
    private $cupo;
    private $clave;
    
    function __construct($idtarjeta, $idusuario, $cupo, $clave) {
        $this->idtarjeta = $idtarjeta;
        $this->idusuario = $idusuario;
        $this->cupo = $cupo;
        $this->clave = $clave;
    }
    
    function getIdtarjeta() {
        return $this->idtarjeta;
    }

    function getIdusuario() {
        return $this->idusuario;
    }

    function getCupo() {
        return $this->cupo;
    }

    function getClave() {
        return $this->clave;
    }

    function setIdtarjeta($idtarjeta) {
        $this->idtarjeta = $idtarjeta;
    }

    function setIdusuario($idusuario) {
        $this->idusuario = $idusuario;
    }

    function setCupo($cupo) {
        $this->cupo = $cupo;
    }

    function setClave($clave) {
        $this->clave = $clave;
    }




}