<?php  
        include_once '../../../controller/VehiculosContol.php';
        include_once '../../../model/Vehiculos.php';       
        include_once ('../../../model/Parqueaderos.php');
        include_once ('../../../controller/ParqueaderoControl.php');
        include_once ('../../../config/Conexion.php');
        include_once ('../../../controller/ReservasControl.php');
        include_once ('../../../model/Reservas.php');
        include_once ('../../../controller/controlTipo.php');
        include_once ('../../../model/TipoVehiculos.php');
        include_once ('../../../controller/controlmantenimiento.php');
        include_once ('../../../model/Mantenimientos.php');
        $id = $_POST["btn"];
        $estado="Ocupado";
        $pq=0;
        Conexion::abrir_conexion();
        $parqueaderoo = ParqueaderoControl::traerparqueaderos(Conexion::obtener_conexion());
        $vehiculos = VehiculosControl::traervehiculosporid(Conexion::obtener_conexion(), $id);
        
    if(isset($_POST['btn1'])){
          $idv=$_POST['btn1'];
        $resultado = VehiculosControl::traervehiculosactest(Conexion::obtener_conexion(), $idv, $estado, $pq);
        if($resultado){
            header("Location: vehiculoEntrega.php");
        }else{
            echo 'ups no se ha podido guardar la reserva';
        }
    
}

         ?>
<!DOCTYPE html> <!---->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA_Compatible" content="IE=edge"><!--Permite al navegador establecer un modo de compatibilidad-->
    <meta name="format-detection" content="telephone=no"/><!-- Desactivar la detección automática de números de teléfono -->
    <meta name="viewport" content="width=device-width, initial-scale = 1, , shrink-to-fit=no"> <!--Se ajusta al tamaño de la pantalla-->
    <link rel="icon" href="" type="image/x-icon"> <!--Icono de la pestaña-->

    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600">
    <link rel="stylesheet" href="../../fonts/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <!--link rel="stylesheet" href="../../css/bootstrap.min.css"-->
    <link rel="stylesheet" href="../../css/animate.css">
    <link rel="stylesheet" href="../../css/form-elements.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/mediaqueries.css">

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="../../img/icon/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../img/icon/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../img/icon/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../img/icon/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../../img/icon/apple-touch-icon-57-precomposed.png">

   

    <title>Vehiculos</title>

<link rel="stylesheet" href="../../css/tablas.css">   
<script src="../../js/tablas.js"></script>
    


  
  </head>
  <body>
    <!-- Loader -->
    <div class="loader">
      <div class="loader-img"></div>
    </div>
      <!-- Top menu -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top navbar-no-bg" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="nav">
            <li><a href="parqueadero.php">Vehiculos</a>
            </li>
            <li><a href="vehiculoEntrega.php">Vehiculos Por Entregar</a></li>
             <li><a href="vehiculorecepcion.php">Vehiculos Por Recibir</a></li>
           </ul>
          <div class="navbar-text navbar-right">
            <Botón de login>
            <li>
              <button type="button" class="btn btn-outline-light" data-toggle="modal" >Salir</button>
            </li>
          </div>
        </div>
      </div>
    </nav>
    <!-- Top content -->
    <div class="top-content" style="position: relative; z-index: 0; background: none;">

    <br><br><br><br>
       <?php
   
  if (count($vehiculos)) {
           foreach ($vehiculos as $vehiculo) {
                
                    $idt=$vehiculo->getTipo_vh();
                    $idm=$vehiculo->getId_vh();
                 ?>
 <div id="wrapper">  
  <table id='keywords' cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>ID</span></th>
        <th><span>Placas</span></th>
        <th><span>Modelo</span></th>
        <th><span>Color</span></th>
        <th><span>Tipo</span></th>
      </tr>
    </thead>
    <tbody>     
      <tr>
        <td><?php echo $vehiculo->getId_vh(); ?></td>
       
        <td><?php echo $vehiculo->getPlaca_vh(); ?></td>
        <td><?php echo $vehiculo->getModelo_vh(); ?></td>
        <td><?php echo $vehiculo->getColor_vh(); ?></td>
        <?php
              $tipovehiculos = tipoControl::tipoauto(Conexion::obtener_conexion(), $idt);
              if (count($tipovehiculos)) {
           foreach ($tipovehiculos as $tipo) {
              ?>
         <td><?php echo $tipo->getVehiculo_vh(); ?></td> 
           <?php  } }?>
      </tr>
    </tbody>
     <thead>
      <tr>
        <th><span>Puestos</span></th>
        <th><span>transmision</span></th>
        <th><span>Combustible</span></th>
        <th><span>Kilometraje</span></th>
        <th><span>Estado</span></th>
      </tr>
    </thead>
    <tbody>     
      <tr>
        <td><?php echo $vehiculo->getPuestos_vh(); ?></td>
       
        <td><?php echo $vehiculo->getTransmisi0n_vh(); ?></td>
        <td><?php echo $vehiculo->getCombustible_vh(); ?></td>
        <td><?php echo $vehiculo->getKilometraje_vh(); ?></td>
         <td><?php echo $vehiculo->getEstado_vh(); ?></td> 
      </tr>
    </tbody>
     <thead>
      <tr>
        <th><span>ValorxDia</span></th>
        <th><span>Seguro</span></th>
        <th><span>Observaciones</span></th>
        <th><span>Parqueadero</span></th>
        <th><span></span></th>
      
        
      </tr>
    </thead>
    <tbody>     
      <tr>
        <td><?php echo $vehiculo->getValorDia_vh(); ?></td>
       
        <td><?php echo $vehiculo->getSeguro_vh(); ?></td>
        <td><?php echo $vehiculo->getObservaciones_vh(); ?></td>
      <?php
      $idpq=$vehiculo->getParqueadero();
 $parqueaderos = ParqueaderoControl::traerparqueaderosporid(Conexion::obtener_conexion(), $idpq);  
 if (count($parqueaderos)) {
 foreach ($parqueaderos as $parqueadero) {
                                                                ?>
        <td><?php echo $parqueadero->getNombre_pq(); ?></td>
      <?php  } }?>
        <td><form method="post" action="<?php $_SERVER['PHP_SELF']?>">
         <button class="btn" name="btn1" value="<?php echo $vehiculo->getId_vh(); ?>">Entregar</button>
        </form></td>

      </tr>
    </tbody>

  </table>

 </div> 
<br>

<?php  } }?>

<br><br><br><br>




  
   
       


  



   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Javascript -->

     <script src="../../js/jquery-3.2.1.min.js"></script>
     <script src="../../js/jquery-migrate-3.0.0.min.js"></script>
     <script src="../../js/jquery.backstretch.min.js"></script>
     <script src="../../js/wow.min.js"></script>
     <script src="../../js/retina-1.1.0.min.js"></script>
     <script src="../../js/waypoints.min.js"></script>
     <script src="../../js/scripts.js"></script>
     <script src="../../js/tablas.js"></script>


  </body>
</html>
