<?php

class Equipos{

  private $id_eq;
  private $talla_eq;
  private $color_eq;
  private $descripcion;

  function __construct($id_eq, $talla_eq, $color_eq, $descripcion) {
      $this->id_eq = $id_eq;
      $this->talla_eq = $talla_eq;
      $this->color_eq = $color_eq;
      $this->descripcion = $descripcion;
  }
  
  function getId_eq() {
      return $this->id_eq;
  }

  function getTalla_eq() {
      return $this->talla_eq;
  }

  function getColor_eq() {
      return $this->color_eq;
  }

  function getDescripcion() {
      return $this->descripcion;
  }

  function setId_eq($id_eq) {
      $this->id_eq = $id_eq;
  }

  function setTalla_eq($talla_eq) {
      $this->talla_eq = $talla_eq;
  }

  function setColor_eq($color_eq) {
      $this->color_eq = $color_eq;
  }

  function setDescripcion($descripcion) {
      $this->descripcion = $descripcion;
  }



}


?>
