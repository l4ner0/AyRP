<?php

	if(isset($_SESSION['id_usuario'])){

			if($_SESSION['keyreg'] == ""){

				if( !isset($_SESSION['elegirPerfil']) or $_SESSION['elegirPerfil'] == "no"){

					listarPerfilConrolador();
				}

				include("vistas/paginas/perfiles/perfiles.php");

			}else{

				include("activarControlador.php");
			}
			
		}else{
			include("vistas/paginas/login/login.php");
		}

?>