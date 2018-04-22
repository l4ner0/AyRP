
<?php
  include("vistas/paginas/general/head.php");
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  
  <?php
    include("vistas/paginas/general/header.php");
  ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php
    include("vistas/paginas/general/sidebar.php");
  ?>
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
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Inicio
        <small>Panel de Inicio</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="container">
      <section class="content"> 
      <div class="jumbotron">
        <h1 class="display-3">Hola<?php echo " ".$_SESSION['nick_usuario']; ?></h1>
        <p class="lead">Bienvenido al Sistema para el Análisis y Registro de Puntaje</p>
        <hr class="my-4">
        <p>Con este sistema analizar tus simulacros de una manera comoda y rápido, por el momento contamos con opciones básicas, pero pronto añadiremos mas herramientas.</p>
      </div>
    </section>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
    include("vistas/paginas/general/footer.php");
  ?>

  
</body>
</html>
