<?php

	class usuario{

		private $id_usuario;
		private $foto_usuario;
		private $nick;
		private $nombres;
		private $ap_paterno;
		private $ap_materno;
		private $correo;
		private $password;
		private $permiso;
		private $estado_cuenta;
		private $key_reg;


		public function __construct(){

			$this->id_usuario=0;
			$this->foto_usuario="";
			$this->nick="";
			$this->nombres="";
			$this->ap_paterno="";
			$this->ap_materno="";
			$this->correo="";
			$this->password="";
			$this->permiso=0;
			$this->estado_cuenta=0;
			$this->key_reg=0;
		}


		public function getId_usuario(){
			return $this->id_usuario;
		}

		public function setId_usuario($id_usuario){
			 $this->id_usuario=$id_usuario;
		}

		public function getFoto_usuario(){
			return $this->foto_usuario;
		}

		public function setFoto_usuario($foto_usuario){
			 $this->foto_usuario=$foto_usuario;
		}

		public function getNick(){
			return $this->nick;
		}

		public function setNick($nick){
			 $this->nick=$nick;
		}

		public function getNombres(){
			return $this->nombres;
		}

		public function setNombres($nombres){
			 $this->nombres=$nombres;
		}

		public function getAp_paterno(){
			return $this->ap_paterno;
		}

		public function setAp_paterno($ap_paterno){
			 $this->ap_paterno=$ap_paterno;
		}

		public function getAp_materno(){
			return $this->ap_materno;
		}

		public function setAp_materno($ap_materno){
			 $this->ap_materno=$ap_materno;
		}

		public function getCorreo(){
			return $this->correo;
		}

		public function setCorreo($correo){
			 $this->correo=$correo;
		}

		public function getPassword(){
			return $this->password;
		}

		public function setPassword($password){
			 $this->password=$password;
		}

		public function getPermiso(){
			return $this->permiso;
		}

		public function setPermiso($permiso){
			 $this->permiso=$permiso;
		}

		public function getEstado_cuenta(){
			return $this->estado_cuenta;
		}

		public function setEstado_cuenta($estado_cuenta){
			 $this->estado_cuenta=$estado_cuenta;
		}

		public function getKey_reg(){
			return $this->key_reg;
		}

		public function setKey_reg($key_reg){
			 $this->key_reg=$key_reg;
		}

	}

?>