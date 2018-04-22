<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AyRP</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo HTML_DIR; ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo HTML_DIR; ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo HTML_DIR; ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo HTML_DIR; ?>dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo HTML_DIR; ?>plugins/iCheck/square/blue.css">

  <script src="vistas/js/getId.js"></script>
  <script src="vistas/paginas/registro/ajax/registro.js"></script>


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <b>A</b>yRP
  </div>
  <div id="estadoRegistro"></div>
  <div class="register-box-body">
    <p class="login-box-msg">Registra una nueva cuenta</p>

    <form onkeypress="return runScriptReg(event)">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" id="reg_ap" placeholder="Apellidos Paternos">
        <span class="glyphicon glyphicon-user form-control-feedback" ></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" id="reg_am" placeholder="Apellidos Maternos">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" id="reg_nombres" placeholder="Nombres">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" id="reg_nick" placeholder="Nickname">
        <span class="glyphicon glyphicon-user form-control-feedback" ></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" id="reg_correo" placeholder="Correo">
        <span class="glyphicon glyphicon-envelope form-control-feedback" ></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" id="reg_pass" placeholder="Contraseña">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" id="reg_pass2" placeholder="Repita Contraseña">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" id="reg_tyc"> Acepto los <a href="#">terminos y condiciones</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-12">
          <br>
          <input type="button" class="btn btn-primary btn-block btn-flat" value="Registrarse" onclick="goReg()"></input>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <br>
    <a href="?view=login" class="text-center">Ya tengo una cuenta</a>
  </div>
  <!-- /.form-box -->

</div>


<script src="<?php echo HTML_DIR; ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo HTML_DIR; ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo HTML_DIR; ?>plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
