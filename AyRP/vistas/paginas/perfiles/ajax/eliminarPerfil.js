
function eliminarPerfil(idPerfil){

	var url="ajax.php?mode=eliminarPerfil";

	var respuesta=confirm("Seguro que deseas eliminar el perfil");

	if(respuesta){
		
		$.ajax({

 			type:"post",
 			url:url,
 			data:{idPerfil:idPerfil},

 		}).done(function(resp){

 			if(resp == 1){
 				
 				 location.href='./?view=perfiles';

 			}else{

 				alert(resp);

 			}
 			 

 		});		
	}

}