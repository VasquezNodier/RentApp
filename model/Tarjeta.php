<?php

class Tarjeta {
    
    private $idtarjeta;
    private $idusuario;
    private $cupo;
    private $clavetarjeta;
    
    function __construct($idtarjeta, $idusuario, $cupo, $clavetarjeta) {
        $this->idtarjeta = $idtarjeta;
        $this->idusuario = $idusuario;
        $this->cupo = $cupo;
        $this->clavetarjeta = $clavetarjeta;
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

    function getClavetarjeta() {
        return $this->clavetarjeta;
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

    function setClavetarjeta($clavetarjeta) {
        $this->clavetarjeta = $clavetarjeta;
    }



    
}