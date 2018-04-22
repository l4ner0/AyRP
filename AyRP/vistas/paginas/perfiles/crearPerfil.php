          <div class="col-md-7">
            <br><br>
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Crear Perfil</h3>
              </div>
              <form role="form">
                <div class="box-body">
                  <div class="form-group">
                    <label for="nombre_perfil">Nombre del Perfil</label>
                    <input type="text" class="form-control" id="nombre_perfil" placeholder="Ingrese un nombre">
                  </div>
                  <div class="form-group">
                    <label for="cantidad_materia">Cantidad de Materias</label>
                    <div class="input-group number-spinner" id="cantidad_materia">
                      <span class="input-group-btn" onclick="bajar()">
                        <button class="btn btn-default" onclick=" return false" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                      </span>
                      <input type="text" class="form-control text-center" value="0" id="cantMaterias">
                      <span class="input-group-btn" onclick="subir()">
                        <button class="btn btn-default" onclick=" return false" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                      </span>
                    </div>
                    <div id="materias"></div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Opciones por Pregunta</label>
                    <div class="input-group number-spinner">
                      <span class="input-group-btn">
                        <button class="btn btn-default" onclick=" return false" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                      </span>
                      <input type="text" class="form-control text-center" value="0" id="cantOpPre">
                      <span class="input-group-btn">
                        <button class="btn btn-default" onclick=" return false" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                      </span>
                    </div>
                  </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <a role="button" href="?view=perfiles" class="btn btn-primary">Crear</a>
                </div>
              </form>
            </div>
          </div>
