
function goLogin(){

	var resultHTML;
	var correo = __('login_correo').value;
	var pass = __('login_pass').value;
	var sesion=__('login_sesion').checked ? true : false;
	
	var url="ajax.php?mode=login";

	if(correo != "" && pass != ""){

		$.ajax({

			type:"post",
			url: url,
			data : {correo:correo, password:pass, sesion:sesion},		

		}).done(function(resp){
                if(resp != 1){
                 __('estadoLogin').innerHTML=resp;
                }else{
                	resultHTML='<div class="alert alert-dismissible alert-success">';
					resultHTML+='<button type="button" class="close" data-dismiss="alert">&times;</button>';
					resultHTML+='<h4 class="alert-heading">Conectado :-)</h4>';
					resultHTML+='<p class="mb-0">Te estamos redireccionando</p>';
					resultHTML+='</div>';
				__('estadoLogin').innerHTML=resultHTML;
                    location.href='./?view=inicio';
                }
            });



	}else{

			resultHTML='<div class="alert alert-dismissible alert-danger">';
			resultHTML+='<button type="button" class="close" data-dismiss="alert">&times;</button>';
			resultHTML+='<h4 class="alert-heading">Error!</h4>';
			resultHTML+='<p class="mb-0">Hay espacios vacios</p>';
			resultHTML+='</div>';

		__('estadoLogin').innerHTML=resultHTML;

	}

	
}

function runScriptLogin(e){

	if(e.keyCode == 13){
		goLogin();
	}
}