<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Usuarios
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">

          <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">
          Agregar
          </button>

        </div>
        <div class="box-body">
         
         <table class="table table-bordered table-striped dt-responsive tablas">
          <thead style="background:black;color:white">
            <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>Usuario</th>
              <th>Departamento</th>
              <th>Último login</th>
              <th>Estado</th>
              <th>Foto</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>

          <?php

              $item = null;
              $valor = null;
              $usuarios = ControladorUsuarios::ctrMostrarUsuarios($item,$valor);

              foreach($usuarios as $key => $value) {

                //var_dump($value["id_usuario"]);

                echo ' <tr>
                <td>'.$value["id_usuario"].'</td>
                <td>Juan Carlos Sanchez</td>
                <td>'.$value["usuario"].'</td>
                <td>Administracion</td>
                <td>'.$value["ulogeo"].'</td>
                <td><button class="btn btn-success btn-xs">Activo</button></td>';

                if($value["avatar"] != "") {

                  echo '<td><img src="'.$value["avatar"].'" alt="avatar" class="img-thumbnail" width="40px"></td>';

                } else {
                  
                  echo '<td><img src="vistas/img/usuarios/default/anonymous.png" alt="Juan" class="img-thumbnail" width="40px"></td>';

                }
                
                echo '<td>
                  <div class="btn-group">
                    <button class="btn btn-warning btnEditarUsuario" idUsuario="'.$value["id_usuario"].'" data-toggle="modal" data-target="#modalEditarUsuario"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
  
                  </div>
                </td>
              </tr>';

              }

          ?>
           
          </tbody>
         </table>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
         
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Ventana Modal -->

  <!-- Modal Agregar -->
  <div id="modalAgregarUsuario" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

           
            <!-- ID Usuario -->

          
           <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="id_usuario" placeholder="Ingresar ID Usuario">

              </div>

            </div>

         
            <!-- ID Rol -->
          <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-users"></i></span> 

                <select class="form-control input-lg" name="id_roles">
                  
                  <option value="">Rol</option>

                  <option value="ADM">ADM</option>

                  <option value="SUP">SUP</option>

                  <option value="SDO">SDO</option>

                </select>

              </div>

            </div>


             <!-- ID Empleado -->
             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="id_emp" placeholder="Ingresar ID Empleado">

              </div>

            </div>


            <!-- Usuario -->
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="usuario" placeholder="Ingresar nombre" required>

              </div>

            </div>


            <!-- Contraseña -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="password" class="form-control input-lg" name="password" placeholder="Ingresar contraseña">

              </div>

            </div>


             <!-- Activo -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="text" class="form-control input-lg" name="activo" placeholder="Ingresar Estado">

              </div>

            </div>

            <!-- Fecha Inicio -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="text" class="form-control input-lg" name="finicio" placeholder="Ingresar Fecha Inicio">

              </div>

            </div>

            <!-- Fecha Final -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="text" class="form-control input-lg" name="ffinal" placeholder="Ingresar Fecha Final">

              </div>

            </div>


             <!-- Fecha Logeo -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="text" class="form-control input-lg" name="ulogeo" placeholder="Ingresar Fecha Logeo">

              </div>

            </div>

            <!-- ENTRADA PARA SUBIR FOTO -->

             <div class="form-group">
              
              <div class="panel">SUBIR FOTO</div>

              <input type="file" class="nuevaFoto" name="nuevaFoto">

              <p class="help-block">Peso máximo de la foto 5MB</p>

              <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">

            </div>

             
           

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar usuario</button>

        </div>

        <?php
          $crearUsuario = new ControladorUsuarios();
          $crearUsuario->ctrCrearUsuario();
        ?>

      </form>

    </div>

  </div>

</div>



<!-- Modal Actualizar -->
<div id="modalEditarUsuario" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

           
            <!-- ID Usuario -->

          
           <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" id="editarid_usuario" name="editarid_usuario" value="">

              </div>

            </div>

         
            <!-- ID Rol -->
          <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-users"></i></span> 

                <select class="form-control input-lg" name="editarid_roles">
                  
                  <option value="" id="editarPerfil"></option>

                  <option value="ADM">ADM</option>

                  <option value="SUP">SUP</option>

                  <option value="SDO">SDO</option>

                </select>

              </div>

            </div>


             <!-- ID Empleado -->
             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" id="editarid_emp" name="editarid_emp" value="">

              </div>

            </div>


            <!-- Usuario -->
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" id="editarusuario" name="editarusuario" value="" required readonly>

              </div>

            </div>


            <!-- Contraseña -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="password" class="form-control input-lg" id="editarpassword" name="editarpassword" placeholder="Nueva Contraseña">

                <input type="hidden" id="passwordActual" name="passwordActual">

              </div>

            </div>


             <!-- Activo -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="text" class="form-control input-lg" id="editaractivo" name="editaractivo" value="">

              </div>

            </div>

            <!-- Fecha Inicio -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="text" class="form-control input-lg" id="editarfinicio" name="editarfinicio" value="">

              </div>

            </div>

            <!-- Fecha Final -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="text" class="form-control input-lg" id="editarffinal" name="editarffinal" value="">

              </div>

            </div>


             <!-- Fecha Logeo -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="text" class="form-control input-lg" id="editarulogeo" name="editarulogeo" value="">

              </div>

            </div>

            <!-- ENTRADA PARA SUBIR FOTO -->

             <div class="form-group">
              
              <div class="panel">SUBIR FOTO</div>

              <input type="file" class="nuevaFoto" name="editarFoto">

              <p class="help-block">Peso máximo de la foto 5MB</p>

              <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">

              <input type="hidden" name="fotoActual" id="fotoActual">

            </div>

             
           

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Modificar usuario</button>

        </div>

        <?php
          $editarUsuario = new ControladorUsuarios();
          $editarUsuario->ctrEditarUsuario();
        ?>

      </form>

    </div>

  </div>

</div>