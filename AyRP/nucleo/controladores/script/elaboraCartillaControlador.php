<?php

	$perfil = new perfiles_examenDAO();

	$idPerfil=$_POST['idPerfil'];

	$data1= $perfil->obtener_perfil($idPerfil);

	$data2= $perfil->obtener_materias($idPerfil);

	$data3=array();

	if($data1 != null and $data2 != null){

		$cantMaterias = $data1[2];
		$opcionesPregunta = $data1[3];	

		for($i=0; $i<$cantMaterias; $i++){

			$data3[$i]=$data2[$i]['cant_preguntas'];

		}

		$preguntasPorMaterias=$data3;

		$datosCartilla=array(

			"perfil" =>array(

				"cantMaterias" => $cantMaterias,
				"opcionesPregunta" => $opcionesPregunta

			),

			"materias" => $data3

		);

		echo json_encode($datosCartilla);

	}

?>