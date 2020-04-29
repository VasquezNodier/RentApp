<?php

  class Reservas {

    private $id_res;
    private $id_vh;
    private $id_user;
    private $fecharecibido;
    private $fechadevolucion;
    private $valor_res;
    private $id_pi;
    private $id_pf;
    
    function __construct($id_res, $id_vh, $id_user, $fecharecibido, $fechadevolucion, $valor_res, $id_pi, $id_pf) {
        $this->id_res = $id_res;
        $this->id_vh = $id_vh;
        $this->id_user = $id_user;
        $this->fecharecibido = $fecharecibido;
        $this->fechadevolucion = $fechadevolucion;
        $this->valor_res = $valor_res;
        $this->id_pi = $id_pi;
        $this->id_pf = $id_pf;
    }

    function getId_res() {
        return $this->id_res;
    }

    function getId_vh() {
        return $this->id_vh;
    }

    function getId_user() {
        return $this->id_user;
    }

    function getFecharecibido() {
        return $this->fecharecibido;
    }

    function getFechadevolucion() {
        return $this->fechadevolucion;
    }

    function getValor_res() {
        return $this->valor_res;
    }

    function getId_pi() {
        return $this->id_pi;
    }

    function getId_pf() {
        return $this->id_pf;
    }

        
    function setId_res($id_res) {
        $this->id_res = $id_res;
    }

    function setId_vh($id_vh) {
        $this->id_vh = $id_vh;
    }

    function setId_user($id_user) {
        $this->id_user = $id_user;
    }

    function setFecha_recibido($fecha_recibido) {
        $this->fecha_recibido = $fecha_recibido;
    }

    function setFecha_devolucion($fecha_devolucion) {
        $this->fecha_devolucion = $fecha_devolucion;
    }

    function setValor_res($valor_res) {
        $this->valor_res = $valor_res;
    }




  }


?>
