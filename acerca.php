<!DOCTYPE html>
<HTML>
  <head>
    <title>MediWeb</title>
  </head>
  <body>
    
    <div id="una capa">
   
        <?php
include './config/connection.php';


?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php include './config/site_css_links.php'; ?>
  <title>Control de Pacientes</title>


</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->

    <?php

    include './config/header.php';
    include './config/sidebar.php';
    ?>


    
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-12">
            <center>
            <img class="img-responsive" src="./user_images/UPNFM.png" width="15%" height= "15%" >
              <h1>Universidad Pedagogica Nacional Francisco Morazán</h1>
              </center>
              <br>
              <h2>Integrantes:</h2>

            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <div class="row">
            <div class="col-md-3">
              <center> 
            <img class="img-responsive" src="./user_images/be.png" width="75%" height= "75%" >
            <button id="boton" type="button">Belkis Chicas</button>
              </center>
            </div>
            
            <div class="col-md-3">
              <center>
            <img class="img-responsive" src="./user_images/sa.png" width="80%" height= "80%" >
              <button id="boton" type="button">Santiago Cardoza</button>
              </center>
            </div>
            <div class="col-md-3">
              <center>
              <img class="img-responsive" src="./user_images/br.png" width="80%" height= "80%" >
              <button id="boton" type="button">Bryan Trochez</button>
              </center>
            </div>
            <div class="col-md-3">
              <center>
            <img class="img-responsive" src="./user_images/ro.png" width="78%" height= "78%" >
            <button id="boton" type="button">Rossel Pacheco</button>
              </center>
            </div>
        </div>
     
    
        <<div class="content-wrapper">
      <!-- Content Header (Page header) -->
    
       
         
            <div class="col-sm-8">
            <div class="col-md-16">
            <center>
            <img class="img-responsive" src="./user_images/l.png" width="40%" height= "40%" >
            <h1>Con la colaboracion del:</h1>
              <h1>Ing. Lener Abiel Reyes Murillo Titular de la clase de:</h1>
              <br>
          
              </center>
              <marquee bgcolor="#006699" behavior="alternate" direction="right">
<b><font color="#FFFFCC" size="5">PROGRAMACION DE BASE DE DATOS</font></b>
</marquee>

            </div>
          </div>
        </div><!-- /.container-fluid -->

      <!-- /.content -->
    </div>

    <!-- /.content-wrapper -->

    
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <?php include './config/site_js_links.php'; ?>
  <script>
    $(function() {
      showMenuSelected("#mnu_dashboard", "");
    })
  </script>
</body>
</html>
  </body>  
</HTML>