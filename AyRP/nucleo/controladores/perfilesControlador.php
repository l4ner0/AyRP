<?php

	if(isset($_SESSION['id_usuario'])){

			if($_SESSION['keyreg'] == ""){

				require("nucleo/modelos/perfiles_examenDAO.php");

				$perfil = new perfiles_examenDAO();

				$data= $perfil->obtener_ultimo_perfil();
	
				if($data != null){

					$_SESSION['nombrePerfil'] = $data[1];
					$_SESSION['cant_materias'] = $data[2];
					$_SESSION['opciones_pregunta'] = $data[3];
					$_SESSION['fecha'] = $data[4];

					$data2= $perfil->obtener_materias($data[0]);

					$data3= $perfil->obtener_perfiles();

					if($data2 != null){

						$_SESSION['materiasUltimoPerfil']=$data2;

					}

					if($data3 != null){

						$_SESSION['listaPerfiles']=$data3;
					}

				}else{

					$_SESSION['nombrePerfil'] = "";
					$_SESSION['cant_materias'] = "";
					$_SESSION['opciones_pregunta'] = "";
					$_SESSION['fecha'] = "";

				}

				include("vistas/paginas/perfiles/perfiles.php");

			}else{

				include("activarControlador.php");
			}
			
		}else{
			include("vistas/paginas/login/login.php");
		}

?>