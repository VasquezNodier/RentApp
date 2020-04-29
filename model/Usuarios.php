<?php

class Usuarios {
  private $id_user;
  private $nombres_user;
  private $edad_user;
  private $sexo_user;
  private $tipo_user;
  private $tel_user;
  private $dir_user;
  private $correo_user;
  private $pswd_user;

  function __construct($id_user, $nombres_user, $edad_user, $sexo_user, $tipo_user, $tel_user, $dir_user, $correo_user, $pswd_user) {
      $this->id_user = $id_user;
      $this->nombres_user = $nombres_user;
      $this->edad_user = $edad_user;
      $this->sexo_user = $sexo_user;
      $this->tipo_user = $tipo_user;
      $this->tel_user = $tel_user;
      $this->dir_user = $dir_user;
      $this->correo_user = $correo_user;
      $this->pswd_user = $pswd_user;
  }
  
  function getId_user() {
      return $this->id_user;
  }

  function getNombres_user() {
      return $this->nombres_user;
  }

  function getEdad_user() {
      return $this->edad_user;
  }

  function getSexo_user() {
      return $this->sexo_user;
  }

  function getTipo_user() {
      return $this->tipo_user;
  }

  function getTel_user() {
      return $this->tel_user;
  }

  function getDir_user() {
      return $this->dir_user;
  }

  function getCorreo_user() {
      return $this->correo_user;
  }

  function getPswd_user() {
      return $this->pswd_user;
  }

  function setId_user($id_user) {
      $this->id_user = $id_user;
  }

  function setNombres_user($nombres_user) {
      $this->nombres_user = $nombres_user;
  }

  function setEdad_user($edad_user) {
      $this->edad_user = $edad_user;
  }

  function setSexo_user($sexo_user) {
      $this->sexo_user = $sexo_user;
  }

  function setTipo_user($tipo_user) {
      $this->tipo_user = $tipo_user;
  }

  function setTel_user($tel_user) {
      $this->tel_user = $tel_user;
  }

  function setDir_user($dir_user) {
      $this->dir_user = $dir_user;
  }

  function setCorreo_user($email_user) {
      $this->correo_user = $email_user;
  }

  function setPswd_user($pswd_user) {
      $this->pswd_user = $pswd_user;
  }
  
  }
