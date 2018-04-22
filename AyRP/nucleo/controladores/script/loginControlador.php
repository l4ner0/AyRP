<?php

require("nucleo/modelos/usuarioDAO.php");


 	$usuario = new usuarioDAO();

 	$data =$usuario->inicio_sesion(strtolower($_POST['correo']), $_POST['password']);

 	if($data != null){

 		$_SESSION['id_usuario']=$data[0];
 		$_SESSION['nick_usuario']=$data[2];
 		$_SESSION['nombre_usuario']=$data[3];
 		$_SESSION['ap_usuario']=$data[4];
 		$_SESSION['am_usuario']=$data[5];
 		$_SESSION['correo']=$data[6];
 		$_SESSION['keyreg']=$data[10];
 		echo 1;

 	}else{
 		
 		echo '<div class="alert alert-dismissible alert-danger">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Error</strong> Las credenciales son incorrectas.
				  </div>';
 	}


	

?>