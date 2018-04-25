function nuevoPerfil(){

	var HTML="";
	var nomMateria=[];
	var nPregMat=[];
	var nombrePerfil = __('nombre_perfil').value;
	var cantMaterias = __('cantMaterias').value;
	var cantOpPre=__('cantOpPre').value;
	var estado;

	var url="ajax.php?mode=crearPerfil";

	if (nombrePerfil != "" && cantMaterias != 0 && cantOpPre !=0) {

		for(var i = 1; i <= cantMaterias; i++){

			nomMateria[i]=__('materia'+i).value;
			nPregMat[i]=__('nPregMat'+i).value;
		}

		for(var i = 1; i <= cantMaterias; i++){

			if(nomMateria[i] == "" || nPregMat[i] == 0){

				estado = false;

			}else{

				estado=true;

			}

			
		}
		
		if (estado) {

			$.ajax({

				type:"post",
				url: url,
				data:{nombrePerfil:nombrePerfil, cantMaterias:cantMaterias, nomMateria:nomMateria, nPregMat:nPregMat, cantOpPre:cantOpPre},

			}).done(function(resp){

					if(resp != 1){

						__('alerta_perfil').innerHTML=resp;

					}else{

						HTML+='<div class="alert alert-success alert-dismissible">';
				      	HTML+='<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
				      	HTML+='<h4><i class="icon fa fa-check"></i> Listo!</h4>';
				      	HTML+='Se ha añadido un nuevo perfil';
				      	HTML+='</div>';

						__('alerta_perfil').innerHTML=HTML;

						__('DATOS').innerHTML=resp;

						 location.href='./?view=perfiles';

					}
				}

			);	

		}else{

			HTML+='<div class="alert alert-danger alert-dismissible">';
	      	HTML+='<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
	      	HTML+='<h4><i class="icon fa fa-ban"></i> Error!</h4>';
	      	HTML+='Hay espacios en blanco.';
	      	HTML+='</div>';

	      	__('alerta_perfil').innerHTML=HTML;

		}
	
		

	}else{

		HTML+='<div class="alert alert-danger alert-dismissible">';
      	HTML+='<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
      	HTML+='<h4><i class="icon fa fa-ban"></i> Error!</h4>';
      	HTML+='Hay espacios en blanco.';
      	HTML+='</div>';

      	__('alerta_perfil').innerHTML=HTML;

	}

	

	
}