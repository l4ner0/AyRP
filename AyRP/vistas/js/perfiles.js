$(document).on('click', '.number-spinner button', function () {    
      var btn = $(this),
        oldValue = btn.closest('.number-spinner').find('input').val().trim(),
        newVal = 0;
      
      if (btn.attr('data-dir') == 'up') {
        newVal = parseInt(oldValue) + 1;
      } else {
        if (oldValue > 1) {
          newVal = parseInt(oldValue) - 1;
        } else {
          newVal = 0;
        }
      }
      btn.closest('.number-spinner').find('input').val(newVal);
    });

 function __(id){
      return document.getElementById(id);
    }

    function subir(){

      var cantMaterias;
      cantMaterias = parseInt(__('cantMaterias').value);
      cantMaterias=cantMaterias+1;
      materias(cantMaterias)
     
    }

    function bajar(){
      var cantMaterias;
      
      cantMaterias = parseInt(__('cantMaterias').value);
      cantMaterias=cantMaterias-1;
       materias(cantMaterias)
    }

    function materias(numMaterias){

      var HTML;
      HTML="<br>";
      numMaterias = parseInt(numMaterias);

      for (var i = 1; i <= numMaterias; i++) {
        HTML+='<div class="form-group">';
        HTML+='<div class="row">';
        HTML+='<div class="col-md-6">';
        HTML+='<label for="materia'+i+'">Materia Nº'+i+':</label>';
        HTML+=' <input type="text" class="form-control" placeholder="Ingresa el nombre de la materia" id="materia'+i+'">';
        HTML+='</div>'; 
        HTML+='<div class="col-md-6">';
        HTML+=' <label>Nº preguntas</label>';  
        HTML+='  <div class="input-group number-spinner">'
        HTML+='    <span class="input-group-btn">'
        HTML+='      <button class="btn btn-default" onclick=" return false" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>'
        HTML+='    </span>'
        HTML+='    <input type="text" class="form-control text-center" value="0" id="nPregMat'+i+'">'
        HTML+='    <span class="input-group-btn">'
        HTML+='     <button class="btn btn-default" onclick=" return false" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>'
        HTML+='    </span>'
        HTML+='  </div>'
        HTML+='</div>';  
        HTML+='</div>'; 
        HTML+='</div>';  
      }

      __('materias').innerHTML=HTML;  

    }

    function crearPerfil(){
      var resultHTML="";

               

                
                  
              
      

      resultHTML+='          <div class="col-md-7">';
      resultHTML+='      <br><br>';
      resultHTML+='      <div class="box box-primary">';
      resultHTML+='        <div class="box-header with-border">';
      resultHTML+='          <h3 class="box-title">Crear Perfil</h3>';
      resultHTML+='        </div>';
      resultHTML+='        <form role="form">';
      resultHTML+='          <div id="alerta_perfil">';
      resultHTML+='          </div>';
      resultHTML+='          <div class="box-body">';
      resultHTML+='            <div class="form-group">';
      resultHTML+='              <label for="nombre_perfil">Nombre del Perfil</label>';
      resultHTML+='              <input type="text" class="form-control" id="nombre_perfil" placeholder="Ingrese un nombre">';
      resultHTML+='            </div>';
      resultHTML+='            <div class="form-group">';
      resultHTML+='              <label for="cantidad_materias">Cantidad de Materias</label>';
      resultHTML+='              <div class="input-group number-spinner">';
      resultHTML+='                <span class="input-group-btn" onclick="bajar()">'
      resultHTML+='                  <button class="btn btn-default" onclick=" return false" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>';
      resultHTML+='                </span>';
      resultHTML+='                <input type="text" class="form-control text-center" value="0" id="cantMaterias">';
      resultHTML+='                <span class="input-group-btn" onclick="subir()">';
      resultHTML+='                  <button class="btn btn-default" onclick=" return false" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>';
      resultHTML+='                </span>';
      resultHTML+='              </div>';
      resultHTML+='             <div id="materias"></div>';
      resultHTML+='           </div>';
      resultHTML+='            <div class="form-group">';
      resultHTML+='              <label for="exampleInputPassword1">Opciones por Pregunta</label>';
      resultHTML+='              <div class="input-group number-spinner">';
      resultHTML+='                <span class="input-group-btn">';
      resultHTML+='                 <button class="btn btn-default" onclick=" return false" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>';
      resultHTML+='               </span>';
      resultHTML+='               <input type="text" class="form-control text-center" value="0" id="cantOpPre">';
      resultHTML+='                <span class="input-group-btn">';
      resultHTML+='                 <button class="btn btn-default" onclick=" return false" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>';
      resultHTML+='                </span>';
      resultHTML+='              </div>';
      resultHTML+='            </div>';
      resultHTML+='          </div>';
      resultHTML+='          <!-- /.box-body -->';
      resultHTML+='          <div class="box-footer">';
      resultHTML+='            <input type="button" href="?view=perfiles" class="btn btn-primary" onclick="nuevoPerfil()" value="Crear"></input>';
      resultHTML+='            <a role="button" href="?view=perfiles" class="btn btn-primary pull-right">Salir</a>';
      resultHTML+='          </div>';
      resultHTML+='        </form>';
      resultHTML+='      </div>';
      resultHTML+='    </div>';




       __('Manejo_Perfiles').innerHTML=resultHTML;


    }