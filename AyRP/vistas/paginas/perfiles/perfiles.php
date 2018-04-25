
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
            <li class="  treeview" onclick="botonInicio()">
             <a href="#">
               <i class="fa fa-dashboard"></i> <span>Inicio</span>
             </a>
           </li>
          <li class=" active treeview" >
            <a href="#" onclick="botonPerfil()">
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
        Perfiles
        <small>Panel de Creación</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-list-ol"></i> Perfiles</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="container">

      <div class="row">
        <div class="col-md-5">
          <br>
          <br>
                <!-- TO DO List -->
            <div class="box box-primary">
              <div class="box-header">
                <i class="ion ion-clipboard"></i>

                <h3 class="box-title">Lista de perfiles</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
                <ul class="todo-list">
                  
                  <?php 

                    if(isset($_SESSION['listaPerfiles']) and $_SESSION['listaPerfiles'] != null){

                      $listaPerfiles = $_SESSION['listaPerfiles'];

                      
                      for($i=count($listaPerfiles)-1; $i >= 0 ; $i--){

                         echo '<li>
                                  <!-- drag handle -->
                                  <span >
                                        <i class="fa fa-ellipsis-v"></i>
                                        <i class="fa fa-ellipsis-v"></i>
                                      </span>
                                 
                                  <!-- todo text -->
                                  <span class="text"><a href="#" onclick="elegirPerfil('.$listaPerfiles[$i]['id_perfil'].')" style="color:black;" >Perfil '.strtoupper($listaPerfiles[$i]['nombre_perfil']).'</a></span>
                                  <!-- Emphasis label -->
                                  <small class=" pull-right label label-danger">'.$listaPerfiles[$i]['fecha'].'</small>
                                  <!-- General tools such as edit or delete-->
                                  <div class="tools">
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash-o"></i>
                                  </div>
                                </li>';
                        }

                    }

                  ?>
                </ul>
              </div>
              <!-- /.box-body -->
              <div class="box-footer clearfix no-border">
                <button type="button" class="btn btn-default pull-right" onclick="crearPerfil()"><i class="fa fa-plus" ></i> Nuevo Perfil</button>
              </div>
            </div>
            <!-- /.box -->
        </div>
        <div id="Manejo_Perfiles">
          <div class="col-md-7">
              <br><br>
             <!-- Widget: user widget style 1 -->
             <div class="box box-widget widget-user">
               <!-- Add the bg color to the header using any of the bg-* classes -->
               <div class="widget-user-header bg-aqua-active">
                 <h3 class="widget-user-username"><?php echo "PERFIL ".strtoupper($_SESSION['nombrePerfil']);?></h3>
                 <h5 class="widget-user-desc">Datos Informativos</h5>
               </div>
               <div class="widget-user-image">
                <img class="img-circle" src="vistas/paginas/perfiles/img/examen.jpg" width="128" height="128" >
              </div>
               <div class="box-footer">
                 <div class="row">
                   <div class="col-sm-4 border-right">
                     <div class="description-block">
                       <h5 class="description-header"><?php  echo $_SESSION['cant_materias']; ?></h5>
                       <span class="description-text">MATERIAS</span>
                     </div>
                     <!-- /.description-block -->
                   </div>
                   <!-- /.col -->
                   <div class="col-sm-4 border-right">
                     <div class="description-block">
                       <h5 class="description-header"><?php  echo $_SESSION['opciones_pregunta']; ?></h5>
                       <span class="description-text">OPCIONES POR PREGUNTA</span>
                     </div>
                     <!-- /.description-block -->
                   </div>
                   <!-- /.col -->
                   <div class="col-sm-4">
                     <div class="description-block">
                       <h5 class="description-header"><?php  echo $_SESSION['fecha']; ?></h5>
                       <span class="description-text">FECHA DE CREACIÓN</span>
                     </div>
                     <!-- /.description-block -->
                   </div>
                   <!-- /.col -->
          
                 </div>
                 <br>
                 <div class="box-header with-border">
                  <i class="fa fa-mortar-board"></i>
                <h3 class="box-title"><b>MATERIAS</b></h3>
              </div>
                 <!-- /.row -->
                 <ul class="nav nav-stacked ">
                 <?php

                    if(isset($_SESSION['materiasUltimoPerfil'])){

                      $materias = $_SESSION['materiasUltimoPerfil'];

                      
                        for($i=0; $i < count($materias); $i++){

                           echo ' <li><a><i class="fa fa-caret-right"></i>'.$materias[$i]['nombre_materia'].'<span class="pull-right label label-primary">'.$materias[$i]['cant_preguntas'].' preguntas</span></a></li>';

                        }
                    }
                  ?>
                  
                </ul>
               </div>
             </div>
             <!-- /.widget-user -->
          </div>
        </div>
        
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script src="vistas/paginas/perfiles/ajax/nuevoPerfil.js"></script>
  <script src="vistas/paginas/perfiles/ajax/elegirPerfil.js"></script>
   <?php
    include("vistas/paginas/general/footer.php");
  ?>
</body>
</html>
