<?php

	class perfiles_examenDAO{

		public function ingreso_perfil($nombrePerfil, $cantMaterias, $cantOpPre, $nomMateria, $nPregMat,$id_usuario){

			$db = new Conexion();

			$id_perfil;
			$nombrePerfil=$db->real_escape_string($nombrePerfil);
			$cantMaterias=$db->real_escape_string($cantMaterias);
			$cantOpPre=$db->real_escape_string($cantOpPre);
			$getdate = getdate();
			$fecha=$getdate['mday']."-".$getdate['mon']."-".$getdate['year'];

			for($i=1; $i<=$cantMaterias; $i++){

				$nomMateria[$i]=$db->real_escape_string($nomMateria[$i]);
				$nPregMat[$i]=$db->real_escape_string($nPregMat[$i]);		

			}

			if($this->validar_ingreso($nombrePerfil)){

				$db->query("INSERT INTO perfiles_examen (nombre_perfil, cant_materias, opciones_pregunta, fecha, id_usuario) VALUES ('$nombrePerfil','$cantMaterias','$cantOpPre', '$fecha', '$id_usuario');");

				$sql=$db->query("SELECT id_perfil FROM perfiles_examen WHERE nombre_perfil='$nombrePerfil' LIMIT 1;");

				$id_perfil=$db->recorrer($sql)[0]; 


				for($i=1; $i <= $cantMaterias; $i++){

					$db->query("INSERT INTO materias (nombre_materia, cant_preguntas, id_perfil) VALUES ('".$nomMateria[$i]."','".$nPregMat[$i]."', '$id_perfil');");
				}

				$db->liberar($sql);
				$db->close();

				return 1;

			}else{

				return 0;

			}

			

		}

		public function validar_ingreso($nombrePerfil){

			$db = new Conexion();

			$estado = false;

			$nombrePerfil=$db->real_escape_string($nombrePerfil);

			$sql=$db->query("SELECT id_perfil FROM perfiles_examen WHERE nombre_perfil='$nombrePerfil' LIMIT 1;");

			if($db->rows($sql) == 0){

				$estado = true;

			}

			$db->liberar($sql);
			$db->close();

			return $estado;
		}

		public function obtener_perfiles($idUsuario){

			$materias=null;

			$db = new Conexion();

			$sql=$db->query("SELECT * FROM perfiles_examen WHERE id_usuario='$idUsuario';");


			if($db->rows($sql) > 0){

				for($i=0; $i < $db->rows($sql); $i++){

					$data=$db->recorrer($sql);

					$materias[$i]= array(

						'id_perfil' => $data['id_perfil'],
						'nombre_perfil' => $data['nombre_perfil'],
						'cant_materias' => $data['cant_materias'],
						'opciones_pregunta' => $data['opciones_pregunta'],
						'fecha' => $data['fecha'],
						'id_usuario' => $data['id_usuario']

					);

				}
				
			}else{

				$data=null;

			}

			$db->liberar($sql);
			$db->close();
					
			return $materias;

		}

		public function obtener_perfil($idPerfil){

			$data=array();

			$db = new Conexion();

			$sql=$db->query("SELECT * FROM perfiles_examen WHERE id_perfil='$idPerfil';");

			if($db->rows($sql) > 0){

				$data=$db->recorrer($sql);

			}else{

				$data=null;

			}


			$db->liberar($sql);
			$db->close();
					
			return $data;

		}

		public function obtener_ultimo_perfil($idUsuario){

			$data=array();

			$db = new Conexion();

			$sql=$db->query("SELECT MAX(id_perfil) AS id_pefil FROM perfiles_examen WHERE id_usuario='$idUsuario';");

			if($db->rows($sql) > 0){

				$ultimoPerfil=$db->recorrer($sql)[0];

				$sql=$db->query("SELECT * FROM perfiles_examen WHERE id_perfil='$ultimoPerfil';");

				$data=$db->recorrer($sql);

			}else{

				$data=null;

			}


			$db->liberar($sql);
			$db->close();
					
			return $data;

		}

		public function obtener_materias($idPerfil){

			$db = new Conexion();

			$materias=null;

			$sql=$db->query("SELECT * FROM materias WHERE id_perfil='$idPerfil';");

			if($db->rows($sql) > 0){

				for($i=0; $i < $db->rows($sql); $i++){

					$data=$db->recorrer($sql);

					$materias[$i]= array(

						'id_materia' => $data['id_materia'],
						'nombre_materia' => $data['nombre_materia'],
						'cant_preguntas' => $data['cant_preguntas'],
						'id_perfil' => $data['id_perfil']

					);

				}

				

			}

			$db->liberar($sql);
			$db->close();

			return $materias;

		}
	}

?>