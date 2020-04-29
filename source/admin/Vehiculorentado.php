<?php  include("conex.php");
$id_usuario = $_POST["btn"]; ?>
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

   

    <title>index</title>

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
						<li><a href="admin.php">Home</a>
              
            </li>
						<li><a  href="vehiculos.php">Vehiculos</a><ul>
              <li><a href="autos.php">Automovil</a></li>
              <li><a href="motos.php">Motocicletas</a></li>
              <li><a href="bicis.php">Bicicletas</a></li>
              <li><a href="patinetas.php">Patinetas</a></li>
            </ul></li>
						<li><a class="nav-link scroll-link" href="#portfolio">Parqueaderos</a><ul>
<?php
   
 $res = mysqli_query($conexion, "SELECT id_pq, nombre_pq FROM parqueaderos");
                while($usuario = mysqli_fetch_array($res)){   
                 ?>
              <li><a href="parqueadero.php?id=<?php echo $usuario[0];?>"><?php echo $usuario[1]; ?></a></li>
            <?php } ?>
            </ul></li>

						<li><a href="mantenimiento.php">Mantenimiento</a></li>
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
   
 $res = mysqli_query($conexion, "SELECT a.id_vh, a.placa_vh, a.modelo_vh, a.color_vh, b.vehiculo, a.puestos_vh, a.transmision_vh, a.combustible_vh, a.kilometraje_vh, a.estado_vh, a.valorDia_vh, a.seguro_vh, a.observaciones_vh, c.fechaRecibido, c.fechaDevolucion, c.valor_res, c.id_res FROM vehiculos a, tipoVehiculos b, reservas c where a.tipo_vh=b.tipo_vh and a.id_vh='$id_usuario' and a.id_vh=c.id_vh");
                while($usuario = mysqli_fetch_array($res)){
                  
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
        <td class="lalign"><?php echo $usuario[0]; ?></td>
       
        <td><?php echo $usuario[1]; ?></td>
        <td><?php echo $usuario[2]; ?></td>
        <td><?php echo $usuario[3]; ?></td>
         <td><?php echo $usuario[4]; ?></td> 
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
        <td class="lalign"><?php echo $usuario[5]; ?></td>
       
        <td><?php echo $usuario[6]; ?></td>
        <td><?php echo $usuario[7]; ?></td>
        <td><?php echo $usuario[8]; ?></td>
         <td><?php echo $usuario[9]; ?></td> 
      </tr>
    </tbody>
     <thead>
      <tr>
        <th><span>ValorxDia</span></th>
        <th><span>Seguro</span></th>
        <th><span>Observaciones</span></th>
        <th><span>Fecha de entrega</span></th>
        <th><span>Fecha de devolución</span></th>
        
      </tr>
    </thead>
    <tbody>     
      <tr>
        <td class="lalign"><?php echo $usuario[10]; ?></td>
       
        <td><?php echo $usuario[11]; ?></td>
        <td><?php echo $usuario[12]; ?></td>
        <td><?php echo $usuario[13]; ?></td>
        <td><?php echo $usuario[14]; ?></td>
        <td></td>
      </tr>
    </tbody>
         <thead>
      <tr>
        <th><span>Costo</span></th>
        
        <th><span>Acción</span></th>
        <th><span></span></th>
        <th><span></span></th>
        <th><span></span></th>
      </tr>
    </thead>
    <tbody>     
      <tr>
        <td><?php echo $usuario[15]; ?></td>
       
         <td><form action="vervehiculo.php" method="post">
         <button class="btn" value="<?php echo $usuario['id_vh']; ?>"> Localizar <span class="arrow">❯</span></button>
        </form></td> 
      </tr>
    </tbody>
  </table>

 </div> 
<br><?php
$id_res=$usuario[16];
 ?>

      <?php
   
 $res1 = mysqli_query($conexion, "SELECT a.talla_eq, a.color_eq, a.descripcion, b.cantidad FROM  equipos a, equipoReserva b where a.id_eq=b.id_eq and b.id_res='$id_res'");
                if($usuario1 = mysqli_fetch_array($res1)){
                  
                 ?>
<br><br><br><br>
 <div id="wrapper">
  <h1>Equipo</h1>
  
  <table id='keywords' cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>Talla</span></th>
        <th><span>Color</span></th>
        <th><span>Descripción</span></th>
        <th><span>Cantidad</span></th>
       
      </tr>
    </thead>
    <tbody>

      <tr>
        <td class="lalign"><?php echo $usuario1[0]; ?></td>
       
        <td><?php echo $usuario1[1]; ?></td>
        <td><?php echo $usuario1[2]; ?></td>
        <td><?php echo $usuario1[3]; ?></td>
      </tr> 
    </tbody>
  </table>
 </div> 
<br>
<?php } ?>

  <?php  } ?>

  



    <!-- Footer -->
    <footer class="footer-container">
<br><br><br>
        <div class="container">
            <div class="row">

              

                <div class="col-md-5 offset-md-1 footer-right">
                    <h3>Siguenos</h3>
                    <div class="footer-social">
                        <a href="https://www.facebook.com"><i class="fa fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
                    </div>
                    <div class="footer-copyright">
                        &copy; Maren One Page Bootstrap Template <br>Download it for free on <a href="https://azmind.com">AZMIND</a>
                    </div>
                </div>

            </div>
        </div>

        <div class="footer-bottom">
            <a class="scroll-link" href="#top-content"><i class="fa fa-chevron-up"></i></a>
        </div>

    </footer>


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
