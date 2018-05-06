<?php

	if($_POST){

		require_once('nucleo/nucleo.php');

		switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
			case 'login':
				require_once ('nucleo/controladores/script/loginControlador.php');
				break;

			case 'reg':
				require_once ('nucleo/controladores/script/registroControlador.php');
				break;

			case 'crearPerfil':
				require_once ('nucleo/controladores/script/crearPerfilesControlador.php');
				break;

			case 'elegirPerfil':
				require_once ('nucleo/controladores/script/elegirPerfilesControlador.php');
				break;

			case 'eliminarPerfil':
				require_once ('nucleo/controladores/script/eliminarPerfilesControlador.php');
				break;

			case 'editarPerfil':
				require_once ('nucleo/controladores/script/editarPerfilesControlador.php');
				break;	

			case 'elaboraCartilla':
				require_once ('nucleo/controladores/script/elaboraCartillaControlador.php');
				break;		

			default:
				header ('location: index.php');
				break;
		}
	}else{
		
		header ('location: index.php');
	}

?>