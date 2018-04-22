<?php
	
	require('nucleo/nucleo.php');

	if(isset($_GET['view'])){

		if (file_exists('nucleo/controladores/'.strtolower($_GET['view']).'Controlador.php')) {

			include('nucleo/controladores/'.strtolower($_GET['view']).'Controlador.php');
		}else{
			include('nucleo/controladores/errorControlador.php');
		}
	}else{
		include('nucleo/controladores/indexControlador.php');
	}

?>