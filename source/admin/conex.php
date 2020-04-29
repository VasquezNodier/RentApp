<?php

$servidor = "localhost";
$basededatos = "rentapp";
$usuario = "root";
$password = "";

$conexion = mysqli_connect( $servidor, $usuario, "" );
$db = mysqli_select_db( $conexion, $basededatos );

?>
