<?php

	$perfil = new perfiles_examenDAO();

	$idPerfil=$_POST['idPerfil'];

	$data=$perfil->obtener_perfil($idPerfil);

	if($data != null){

		$_SESSION['nombrePerfil'] = $data[1];
		$_SESSION['cant_materias'] = $data[2];
		$_SESSION['opciones_pregunta'] = $data[3];
		$_SESSION['fecha'] = $data[4];

		$data2= $perfil->obtener_materias($data[0]);

		if($data2 != null){

				$_SESSION['materiasUltimoPerfil']=$data2;

				$_SESSION['elegirPerfil']= 'si';

				echo 1;

			}else{


				$_SESSION['materiasUltimoPerfil']=null;

			}

	}

	

?>