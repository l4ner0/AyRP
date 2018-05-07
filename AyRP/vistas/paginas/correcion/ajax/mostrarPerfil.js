  function elaboraCartilla(){

      var idPerfil=document.getElementById("perfiles").value;

      if(idPerfil != -1){
        var url="ajax.php?mode=elaboraCartilla";

        $.ajax({

          type:"post",
          url:url,
          data:{idPerfil:idPerfil},
          dataType:"JSON",

          success:function(data){

            var cantMaterias=data.perfil.cantMaterias;
            var letrasOpriones=["A","B","C","D","E"];
            var nPregxMat=data.materias;
            var cantOp=data.perfil.opcionesPregunta;
            var preguntasPorFila=0;
            var preguntasTotales=0;
            var colm1="";
            var colm2="";
            var colm3="";
            for(var i=0; i<cantMaterias; i++){

              preguntasTotales = preguntasTotales+parseInt(nPregxMat[i]);

            }

            preguntasPorFila=Math.ceil(preguntasTotales/3);


             for(var i=1; i<=preguntasTotales; i++){

              if(i>0 && i<=preguntasPorFila*1){

                colm1+='<label>';
                colm1+=i+')';
                colm1+='</label>';
                colm1+='\n';

                for(var k = 1; k <= cantOp; k++){

                  colm1+='<label>';
                  colm1+='\n';
                  colm1+='<label>'+letrasOpriones[k-1]+'</label>';
                  colm1+='\n';
                  colm1+='<input  type="radio" name="p'+i+'" class="minimal">';
                  colm1+='</label>';
                  colm1+='\n';
                  }
                   colm1+='<br>';

              }else if(i>preguntasPorFila*1 && i<=preguntasPorFila*2){

                colm2+='<label>';
                colm2+=i+')';
                colm2+='</label>';
                colm2+='\n';

                for(var k = 1; k <= cantOp; k++){

                  colm2+='<label>';
                  colm2+='\n';
                  colm2+='<label>'+letrasOpriones[k-1]+'</label>';
                  colm2+='\n';
                  colm2+='<input  type="radio" name="p'+i+'" class="minimal">';
                  colm2+='</label>';
                  colm2+='\n';
                  }
                   colm2+='<br>';

              }else{

                colm3+='<label>';
                colm3+=i+')';
                colm3+='</label>';
                colm3+='\n';

                for(var k = 1; k <= cantOp; k++){

                  colm3+='<label>';
                  colm3+='\n';
                  colm3+='<label>'+letrasOpriones[k-1]+'</label>';
                  colm3+='\n';
                  colm3+='<input  type="radio" name="p'+i+'" class="minimal">';
                  colm3+='</label>';
                  colm3+='\n';
                  }
                   colm3+='<br>';

              }  

             }

            __("tipoFormulario").innerHTML="Claves de Respuesta";
            __("colm1").innerHTML=colm1;
            __("colm2").innerHTML=colm2;
            __("colm3").innerHTML=colm3;
            __("botonCorrecion").innerHTML='<button type="button"  id="cancelarClaves" class="btn btn-primary" >Cancelar</button>';
            __("botonCorrecion").innerHTML+='<button type="button"  id="btnClaveRespuesta" class="btn btn-primary pull-right" >Enviar</button>';

            $('input').iCheck({
              checkboxClass: 'icheckbox_minimal-blue',
              radioClass: 'iradio_minimal-blue'
            });

          }

        })
      }else{
        __("tipoFormulario").innerHTML="";
        __("colm1").innerHTML="";
        __("colm2").innerHTML="";
         __("colm3").innerHTML="";
           __("botonCorrecion").innerHTML='';
            __("botonCorrecion").innerHTML+='';
      } 
     
  }