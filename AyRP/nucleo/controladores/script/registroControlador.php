<?php
	require("nucleo/modelos/usuarioDAO.php");

	$usuario = new usuarioDAO();

	$ap= $_POST['ap_paterno'];
	$am= $_POST['ap_materno'];
	$nom=$_POST['nombres'];
	$nick= $_POST['nick'];
	$correo=strtolower($_POST['correo']);
	$pass=$_POST['pass'];
	$keyreg=md5(time());

	$respuesta=$usuario->registro_usuario($ap,$am,$nom,$nick,$correo,$pass,$keyreg);

	if($respuesta[0] != ""){

		$link=APP_URL.'?view=activar&key='.$keyreg;
		
		enviarCorreo($correo, $nom, $link );

		$_SESSION['id_usuario']=$respuesta[0];
		$_SESSION['nick_usuario']=$respuesta[2];
 		$_SESSION['nombre_usuario']=$respuesta[3];
 		$_SESSION['ap_usuario']=$respuesta[4];
 		$_SESSION['am_usuario']=$respuesta[5];
 		$_SESSION['correo']=$respuesta[6];
 		$_SESSION['keyreg']=$respuesta[10];

		echo 1;

	}else{

		echo'<div class="alert alert-dismissible alert-danger">
			 <button type="button" class="close" data-dismiss="alert">&times;</button>
			 <strong>Error!</strong> El  email ingresado ya existe.
			 </div>';
	}
?>