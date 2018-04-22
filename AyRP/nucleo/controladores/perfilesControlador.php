<?php

	if(isset($_SESSION['id_usuario'])){

			if($_SESSION['keyreg'] == ""){

				include("vistas/paginas/perfiles/perfiles.php");
			}else{

				include("activarControlador.php");
			}
			
		}else{
			include("vistas/paginas/login/login.php");
		}

?>