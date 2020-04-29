<?php

class EquipoReserva{

  private $id_equipoReserva;
  private $id_eq;
  private $id_res;
  private $cantidad;

  function __construct($id_equipoReserva, $id_eq, $id_res, $cantidad) {
      $this->id_equipoReserva = $id_equipoReserva;
      $this->id_eq = $id_eq;
      $this->id_res = $id_res;
      $this->cantidad = $cantidad;
  }
  
  function getId_equipoReserva() {
      return $this->id_equipoReserva;
  }

  function getId_eq() {
      return $this->id_eq;
  }

  function getId_res() {
      return $this->id_res;
  }

  function getCantidad() {
      return $this->cantidad;
  }

  function setId_equipoReserva($id_equipoReserva) {
      $this->id_equipoReserva = $id_equipoReserva;
  }

  function setId_eq($id_eq) {
      $this->id_eq = $id_eq;
  }

  function setId_res($id_res) {
      $this->id_res = $id_res;
  }

  function setCantidad($cantidad) {
      $this->cantidad = $cantidad;
  }




}


?>
