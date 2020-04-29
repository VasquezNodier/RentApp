<?php

  class Parqueaderos {

    private $id_pq, $nombre_pq, $tel_pq, $dir_pq, $long_pq, $lati_pa;

    function __construct($id_pq, $nombre_pq, $tel_pq, $dir_pq, $long_pq, $lati_pa) {
        $this->id_pq = $id_pq;
        $this->nombre_pq = $nombre_pq;
        $this->tel_pq = $tel_pq;
        $this->dir_pq = $dir_pq;
        $this->long_pq = $long_pq;
        $this->lati_pa = $lati_pa;
    }
    
    function getId_pq() {
        return $this->id_pq;
    }

    function getNombre_pq() {
        return $this->nombre_pq;
    }

    function getTel_pq() {
        return $this->tel_pq;
    }

    function getDir_pq() {
        return $this->dir_pq;
    }

    function getLong_pq() {
        return $this->long_pq;
    }

    function getLati_pa() {
        return $this->lati_pa;
    }

    function setId_pq($id_pq) {
        $this->id_pq = $id_pq;
    }

    function setNombre_pq($nombre_pq) {
        $this->nombre_pq = $nombre_pq;
    }

    function setTel_pq($tel_pq) {
        $this->tel_pq = $tel_pq;
    }

    function setDir_pq($dir_pq) {
        $this->dir_pq = $dir_pq;
    }

    function setLong_pq($long_pq) {
        $this->long_pq = $long_pq;
    }

    function setLati_pa($lati_pa) {
        $this->lati_pa = $lati_pa;
    }




  }


 ?>
