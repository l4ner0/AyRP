<?php

	
		if(isset($_SESSION['id_usuario'])){

			if($_SESSION['keyreg'] == ""){

				listarPerfilConrolador();

				listarPerfilCorrecion();

				include("vistas/paginas/correcion/correcion.php");
			}else{

				include("activarControlador.php");
			}
			
		}else{
			include("vistas/paginas/login/login.php");
		}
		

?>