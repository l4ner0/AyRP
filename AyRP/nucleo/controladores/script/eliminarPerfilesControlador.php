<?php
	
	$perfil = new perfiles_examenDAO();

	$idPerfil=$_POST['idPerfil'];

	$perfil->eliminar_perfil($idPerfil);

	echo 1;

	
	

?>