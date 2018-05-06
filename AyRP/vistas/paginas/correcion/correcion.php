<?php
  include("vistas/paginas/general/head.php");
?>
<link rel="stylesheet" href="../../plugins/iCheck/all.css">
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  
  <?php
    include("vistas/paginas/general/header.php");
  ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php
    include("vistas/paginas/general/sidebar.php");
    
    $_SESSION['elegirPerfil']="no";
  ?>
   <div id="MENU">
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MENU DE NAVEGACION</li>
            <li class=" active treeview"  onclick="botonInicio()">
             <a href="#">
               <i class="fa fa-dashboard"></i> <span>Inicio</span>
             </a>
           </li>
          <li class="treeview">
            <a href="#"  onclick="botonPerfil()">
              <i class="fa fa-list-ol"></i> <span>Perfiles</span>
            </a>
          </li>
           <li class="  reeview" >
            <a href="#" onclick="botonCorrecion()">
              <i class="fa fa-edit"></i> <span>Correción</span>
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
        Correción
        <small>Panel de Correción</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-edit"></i> Correción</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="container">
      <br><br>
      <div class="row">
        <div class="col-md-4">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Información del Simulacro</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Universidad</label>
                  <input type="input" class="form-control" id="exampleInputEmail1" placeholder="Nombre de la universidad">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Año Examen</label>
                  <input type="input" class="form-control" id="exampleInputPassword1" placeholder="2018-I 2018-II ...">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Perfiles de Formulario</label>
                  <div class="form-group">
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected" onclick="elaboraCartilla()">Elije un perfil</option>
                      <?php
                        if(isset($_SESSION['listaPerfiles']) and $_SESSION['listaPerfiles'] != null){

                          $listaPerfiles = $_SESSION['listaPerfiles'];

                          
                          for($i=count($listaPerfiles)-1; $i >= 0 ; $i--){

                             echo ' <option onclick="elaboraCartilla('.$listaPerfiles[$i]['id_perfil'].')">'.strtoupper($listaPerfiles[$i]['nombre_perfil']).'</option>';

                            }
                        }
                      ?>
                    </select>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
            </form>
          </div>
        </div>
        <div class="col-md-8">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title" id="tipoFormulario"></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="row">
                  <div class="col-md-4">
                    <div id="colm1">
                    
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div id="colm2">
                    
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div id="colm3">
                    
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer" id="botonCorrecion">
                
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
    include("vistas/paginas/general/footer.php");
  ?>
  <script src="vistas/paginas/correcion/ajax/mostrarPerfil.js"></script>
  <script src="vistas/paginas/correcion/ajax/correcion.js"></script>
  <script src="<?php echo HTML_DIR; ?>plugins/iCheck/icheck.min.js"></script>
</body>
</html>
