
function elegirPerfil(idPerfil){

 	var url="ajax.php?mode=elegirPerfil";

 		$.ajax({

 			type:"post",
 			url:url,
 			data:{idPerfil:idPerfil},

 		}).done(function(resp){

 			if(resp == 1){
 				
 				 location.href='./?view=perfiles';

 			}else{

 			}
 			 

 		});		
 }
