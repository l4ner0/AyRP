<?php
	
	/*Habilitando variables de session*/

	session_start();

	/*Constantes  APP*/

	define("APP_TITLE","AyRP");
	define("APP_URL","http://localhost/AyRP/");
	

	/*Constantes para las vistas*/

	define("HTML_DIR","html/");
	define('APP_COPY','&copy; '.date('Y',time()).' Hecho por <b>Almsaeed Studio</b> y modificado por <b>l4ner0</b>');


	/*Constantes para conexión*/

	define('DB_HOST','localhost');
	define('DB_USER','root');
	define('DB_PASS','');
	define('DB_NAME','ayrp');

	/*Constantes para PHPMailer*/

	define('PHPMAILER_HOST','smtp.gmail.com');
	define('PHPMAILER_USER','diegourbina1284@gmail.com');
	define('PHPMAILER_PASS','pidwyknpwuohgzlj');
	define('PHPMAILER_PORT',587);

	/*Archivos para PHPMailer*/

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'nucleo/libs/phpMail/PHPMailer/src/Exception.php';
	require 'nucleo/libs/phpMail/PHPMailer/src/PHPMailer.php';
	require 'nucleo/libs/phpMail/PHPMailer/src/SMTP.php';


	/*Clases requeridos*/
	
	require("nucleo/modelos/perfiles_examenDAO.php");
	require_once("nucleo/funciones/listarPerfil.php");
	require_once("nucleo/funciones/listarPerfilCorrecion.php");
	require_once('nucleo/modelos/conexion/class.Conexion.php');
	require('nucleo/funciones/correoTemplate.php');
	require('nucleo/funciones/enviarCorreo.php');

?>