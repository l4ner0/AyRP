<?php
require("nucleo/modelos/usuarioDAO.php");
	
	if(isset($_SESSION['id_usuario'])){

		if(isset($_GET['key']) and $_GET['key'] != ""){

			$usuario = new usuarioDAO();

			if($usuario->activar_cuenta($_GET['key'])){

				$_SESSION['keyreg']="";

				header("Location: ?view=inicio");
			}

		}else{

			include("vistas/paginas/activar/index_activar.php");
		}
			
	}else{

		include("vistas/paginas/login/login.php");

	}

?>