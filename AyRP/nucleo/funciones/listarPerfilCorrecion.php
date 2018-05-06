<?php

	function listarPerfilCorrecion(){

		$perfil = new perfiles_examenDAO();

		$data3= $perfil->obtener_perfiles($_SESSION['id_usuario']);

		if($data3 != null){

			$_SESSION['listaPerfiles']=$data3;

		}else{
			$_SESSION['listaPerfiles']=null;
		}

	}

?>