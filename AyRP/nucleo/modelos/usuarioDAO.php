<?php

require_once("entidad/usuario.php");


class usuarioDAO{
	
	
	public function inicio_sesion($correo,$password){
		$db = new Conexion();
		$data=array();
		$email=$db->real_escape_string($correo);
		$pass=md5($password);
		$sql=$db->query("SELECT * FROM usuario WHERE correo='$email' AND password='$pass' LIMIT 1;");

		if($db->rows($sql) > 0){

			$data=$db->recorrer($sql);

		}else{

			$data=null;
		}

		$db->liberar($sql);
		$db->close();

		return $data;
		
	}

	public function registro_usuario($ap_paterno,$ap_materno,$nombres,$nick,$correo,$pass,$keyreg){

		$db = new Conexion();
		$data =array();;

		$ap=$db->real_escape_string($ap_paterno);
		$am=$db->real_escape_string($ap_materno);
		$nom=$db->real_escape_string($nombres);
		$nick=$db->real_escape_string($nick);
		$correo=$db->real_escape_string($correo);
		$pass=md5($pass);

		$validar_registro=$this->validar_registro($correo);
		if($validar_registro){

			$db->query("INSERT INTO usuario (nick, nombres, ap_paterno, ap_materno, correo, password, key_reg) VALUES ('$nick','$nom','$ap','$am','$correo','$pass','$keyreg');");

			$sql=$db->query("SELECT *  FROM usuario  WHERE correo= '$correo';");
			
			$data=$db->recorrer($sql);


		}else{

			$data=null;

		}

		$db->liberar($sql);
		$db->close();

		return $data;

	}

	public function validar_registro($correo){

		$db = new Conexion();

		$correo=$db->real_escape_string($correo);

		$respuesta=false;

		$sql=$db->query("SELECT id_usuario FROM usuario WHERE correo='$correo' LIMIT 1;");

		if($db->rows($sql) == 0){

			$respuesta=true;

		}

		$db->liberar($sql);
		$db->close();

		return $respuesta;
	}


	public function activar_cuenta($keyreg){

		$db = new Conexion();

		$respuesta=false;
		$key="";

		$sql=$db->query("SELECT * FROM usuario WHERE key_reg='$keyreg' LIMIT 1;");

		$id_usuario=$db->recorrer($sql)[0];

		if($db->rows($sql) > 0){

			$db->query("UPDATE usuario SET key_reg='$key' WHERE id_usuario='$id_usuario' LIMIT 1;");

			$respuesta = true;
		}

		$db->liberar($sql);
		$db->close();

		return $respuesta;
	}

}

?>	