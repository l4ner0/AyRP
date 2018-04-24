<?php
	
	require("nucleo/modelos/perfiles_examenDAO.php");

	$perfil = new perfiles_examenDAO();
	
	$nombrePerfil=strtolower($_POST['nombrePerfil']) ;
	$cantMaterias=$_POST['cantMaterias'];
	$nomMateria=$_POST['nomMateria'];
	$nPregMat=$_POST['nPregMat'];
	$cantOpPre=$_POST['cantOpPre'];

	$id_usuario=$_SESSION['id_usuario'];

	$respuesta=$perfil->ingreso_perfil($nombrePerfil,$cantMaterias,$cantOpPre,$nomMateria,$nPregMat,$id_usuario);

	if($respuesta== 1){

		echo 1;

	}else{

		echo '<div class="alert alert-danger alert-dismissible">
	      	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	      	<h4><i class="icon fa fa-ban"></i> Error!</h4>
	      	No se pudo añadir el perfil, puede ser que ya exista o que halla algun error con la conexion de la base de datos.
	      	</div>';
	}

	

	
?>