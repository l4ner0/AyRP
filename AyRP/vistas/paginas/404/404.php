
<?php
  
  if(isset($_SESSION['id_usuario'])){

     include("vistas/paginas/general/head.php");

    include("vistas/paginas/general/header.php");

    include("vistas/paginas/general/sidebar.php");

    echo '
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <div id="MENU">
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MENU DE NAVEGACION</li>
            <li class=" active treeview">
             <a href="#" onclick="botonInicio()">
               <i class="fa fa-dashboard"></i> <span>Inicio</span>
             </a>
           </li>
          <li class="treeview">
            <a href="#"  onclick="botonPerfil()">
              <i class="fa fa-list-ol"></i> <span>Perfiles</span>
            </a>
          </li>
        </ul>
      </div>
    </section>
    <!-- /.sidebar -->
  </aside>
   <section class="container">';

  }else{
     echo '<!DOCTYPE html>
          <html lang="es" >
          <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>Error 404</title> 
          </head>
          <body>
          <link href="https://fonts.googleapis.com/css?family=Anton|Passion+One|PT+Sans+Caption" rel="stylesheet" type="text/css">';
  } 
   
 ?>

  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
  <link rel="stylesheet" href="<?php echo HTML_DIR; ?>dist/css/404.css">
  


        <!-- Error Page -->
            <div class="error">
                <div class="container-floud">
                    <div class="col-xs-12 ground-color text-center">
                        <div class="container-error-404">
                            <div class="clip"><div class="shadow"><span class="digit thirdDigit"></span></div></div>
                            <div class="clip"><div class="shadow"><span class="digit secondDigit"></span></div></div>
                            <div class="clip"><div class="shadow"><span class="digit firstDigit"></span></div></div>
                            <div class="msg">OH!<span class="triangle"></span></div>
                        </div>
                        <h2 class="h1">Lo Sentimos! No encontramos la página</h2>
                    </div>
                </div>
            </div>
        <!-- Error Page -->

    <?php

    if(isset($_SESSION['id_usuario'])){
      echo ' </section>';
      echo '</div>';
      echo '<br>';
      echo '<br>';
      echo '<br>';
      echo '<br>';
      echo '<br>';
      echo '<br>';
      echo '<br>';
      echo '<br>';
      echo '<br>';
      echo '<br>';
      echo '<br>';
      echo '<script  src="vistas/js/404.js"></script>';
       include("vistas/paginas/general/footer.php");

    }else{

      echo '<script  src="vistas/js/404.js"></script>';

    }

    ?>
</body>
</html>
