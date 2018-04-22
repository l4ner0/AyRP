
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
            <li class="  treeview">
             <a href="#" onclick="botonInicio()">
               <i class="fa fa-dashboard"></i> <span>Inicio</span>
             </a>
           </li>
          <li class=" active treeview">
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

                <div class="box-tools pull-right">
                  <ul class="pagination pagination-sm inline">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&raquo;</a></li>
                  </ul>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
                <ul class="todo-list">
                  <li>
                    <!-- drag handle -->
                    <span >
                          <i class="fa fa-ellipsis-v"></i>
                          <i class="fa fa-ellipsis-v"></i>
                        </span>
                   
                    <!-- todo text -->
                    <span class="text"><a href="#" style="color:black;" >Perfil UNMSM</a></span>
                    <!-- Emphasis label -->
                    <small class=" pull-right label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                    <!-- General tools such as edit or delete-->
                    <div class="tools">
                      <i class="fa fa-edit"></i>
                      <i class="fa fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                        <span>
                          <i class="fa fa-ellipsis-v"></i>
                          <i class="fa fa-ellipsis-v"></i>
                        </span>
                 
                    <span class="text"><a href="#" style="color:black;" >Perfil UNFV</a></span>
                    <small class=" pull-right label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                    <div class="tools">
                      <i class="fa fa-edit"></i>
                      <i class="fa fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                        <span>
                          <i class="fa fa-ellipsis-v"></i>
                          <i class="fa fa-ellipsis-v"></i>
                        </span>
               
                    <span class="text"><a href="#" style="color:black;" >Perfil UNAC</a></span>
                    <small class=" pull-right label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                    <div class="tools">
                      <i class="fa fa-edit"></i>
                      <i class="fa fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                        <span>
                          <i class="fa fa-ellipsis-v"></i>
                          <i class="fa fa-ellipsis-v"></i>
                        </span>
                   
                    <span class="text"><a href="#" style="color:black;" >Perfil UNI</a></span>
                    <small class=" pull-right label label-success"><i class="fa fa-clock-o"></i> 3 days</small>
                    <div class="tools">
                      <i class="fa fa-edit"></i>
                      <i class="fa fa-trash-o"></i>
                    </div>
                  </li>
                </ul>
              </div>
              <!-- /.box-body -->
              <div class="box-footer clearfix no-border">
                <button type="button" class="btn btn-default pull-right" onclick="crearPerfil()"><i class="fa fa-plus" ></i> Nuevo Perfil</button>
              </div>
            </div>
            <!-- /.box -->
        </div>
          <?php
        echo '<div id="Manejo_Perfiles">
          <div class="col-md-7">
              <br><br>
             <!-- Widget: user widget style 1 -->
             <div class="box box-widget widget-user">
               <!-- Add the bg color to the header using any of the bg-* classes -->
               <div class="widget-user-header bg-aqua-active">
                 <h3 class="widget-user-username">PERFIL UNFV</h3>
                 <h5 class="widget-user-desc">Datos Informativos</h5>
               </div>
               <div class="widget-user-image">
                <img class="img-circle" src="vistas/paginas/perfiles/img/examen.jpg" width="128" height="128" >
              </div>
               <div class="box-footer">
                 <div class="row">
                   <div class="col-sm-4 border-right">
                     <div class="description-block">
                       <h5 class="description-header">5</h5>
                       <span class="description-text">MATERIAS</span>
                     </div>
                     <!-- /.description-block -->
                   </div>
                   <!-- /.col -->
                   <div class="col-sm-4 border-right">
                     <div class="description-block">
                       <h5 class="description-header">5</h5>
                       <span class="description-text">OPCIONES POR PREGUNTA</span>
                     </div>
                     <!-- /.description-block -->
                   </div>
                   <!-- /.col -->
                   <div class="col-sm-4">
                     <div class="description-block">
                       <h5 class="description-header">21/04/2018</h5>
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
                  <li><a><i class="fa fa-caret-right"></i> Conocimientos Matemáticos <span class="pull-right label label-primary">31 preguntas</span></a></li>
                  <li><a><i class="fa fa-caret-right"></i> Razonamiento Verbal <span class="pull-right label label-primary">5 preguntas</span></a></li>
                  <li><a><i class="fa fa-caret-right"></i> Historia <span class="pull-right label label-primary">12 preguntas</span></a></li>
                  <li><a><i class="fa fa-caret-right"></i> Física <span class="pull-right label label-primary">12 preguntas</span></a></li>
                  <li><a><i class="fa fa-caret-right"></i> Química <span class="pull-right label label-primary">5 preguntas</span></a></li>
                </ul>
               </div>
             </div>
             <!-- /.widget-user -->
          </div>
        </div>'
        ?>
      </div>
          
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
   <?php
    include("vistas/paginas/general/footer.php");
  ?>
</body>
</html>
