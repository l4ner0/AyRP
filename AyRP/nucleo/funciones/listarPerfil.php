<?php

	function listarPerfilConrolador(){

		$perfil = new perfiles_examenDAO();

		$data= $perfil->obtener_ultimo_perfil($_SESSION['id_usuario']);
	
		if($data != null){

			$_SESSION['nombrePerfil'] = $data[1];
			$_SESSION['cant_materias'] = $data[2];
			$_SESSION['opciones_pregunta'] = $data[3];
			$_SESSION['fecha'] = $data[4];

			$data2= $perfil->obtener_materias($data[0]);


			if($data2 != null){

				$_SESSION['materiasUltimoPerfil']=$data2;

			}else{


				$_SESSION['materiasUltimoPerfil']=null;

			}
			
		}else{

			$_SESSION['nombrePerfil'] = "";
			$_SESSION['cant_materias'] = "";
			$_SESSION['opciones_pregunta'] = "";
			$_SESSION['fecha'] = "";
			$_SESSION['materiasUltimoPerfil']=null;

		}

		$data3= $perfil->obtener_perfiles($_SESSION['id_usuario']);

		if($data3 != null){

			$_SESSION['listaPerfiles']=$data3;

		}else{
			$_SESSION['listaPerfiles']=null;
		}

	}

?>