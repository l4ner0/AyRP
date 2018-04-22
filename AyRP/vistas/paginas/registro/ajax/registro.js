function goReg(){

	var resultHTML;
	var ap = __('reg_ap').value;
	var am = __('reg_am').value;
	var nom = __('reg_nombres').value;
	var nick = __('reg_nick').value;
	var correo = __('reg_correo').value;
	var pass = __('reg_pass').value;
	var pass2 = __('reg_pass2').value;
	var tyc=__('reg_tyc').checked ? true : false;
	
	var url="ajax.php?mode=reg";
	
	if(ap != "" && am != ""  && nom != ""  && nick != ""  && correo != "" && pass != "" && pass2 != ""){

		if (pass == pass2) {

			if(tyc){

				$.ajax({

				type:"post",
				url: url,
				data : {ap_paterno:ap,ap_materno:am,nombres:nom,nick:nick,correo:correo,pass:pass},		

				}).done(function(resp){

	                if(resp != 1){

	                 __('estadoRegistro').innerHTML=resp;

	                }else{

	                	resultHTML='<div class="alert alert-dismissible alert-success">';
						resultHTML+='<button type="button" class="close" data-dismiss="alert">&times;</button>';
						resultHTML+='<h4 class="alert-heading">Ya estas registrado :-)</h4>';
						resultHTML+='<p class="mb-0">Te estamos redireccionando</p>';
						resultHTML+='</div>';

						__('estadoRegistro').innerHTML=resultHTML;

	                    location.href='./?view=inicio';

	                }
	            });

			}else{

				resultHTML='<div class="alert alert-dismissible alert-danger">';
				resultHTML+='<button type="button" class="close" data-dismiss="alert">&times;</button>';
				resultHTML+='<h4 class="alert-heading">Error!</h4>';
				resultHTML+='<p class="mb-0">Acepte los términos y condiciones </p>';
				resultHTML+='</div>';

				__('estadoRegistro').innerHTML=resultHTML;

			}

		}else{

			resultHTML='<div class="alert alert-dismissible alert-danger">';
				resultHTML+='<button type="button" class="close" data-dismiss="alert">&times;</button>';
				resultHTML+='<h4 class="alert-heading">Error!</h4>';
				resultHTML+='<p class="mb-0">Las contraseñas no coinciden </p>';
				resultHTML+='</div>';

				__('estadoRegistro').innerHTML=resultHTML;

		}
		

	}else{

			resultHTML='<div class="alert alert-dismissible alert-danger">';
			resultHTML+='<button type="button" class="close" data-dismiss="alert">&times;</button>';
			resultHTML+='<h4 class="alert-heading">Error!</h4>';
			resultHTML+='<p class="mb-0">LLene todos los datos porfavor </p>';
			resultHTML+='</div>';

		__('estadoRegistro').innerHTML=resultHTML;

	}

	
}

function runScriptReg(e){

	if(e.keyCode == 13){
		goReg();
	}
}