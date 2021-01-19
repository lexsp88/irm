<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar Clientes
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Clientes</li>
    
    </ol>

  </section>

  <section class="content">

                

     <div class="box">

      <div class="box-header with-border">

         <div class="form-group">
                  <label>Obra</label>
                  <select class="form-control">
                    <option value="Seleccione">Seleccione</option>
                    <option>Obra 1</option>
                    <option>Obra 2</option>
                    <option>Obra 3</option>
                    <option>Obra 4</option>
                  </select>
                </div>       

         <div class="modal-footer">

         <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCliente">
          
          Agregar Cliente

        </button>

          <button type="submit" class="btn btn-primary">Buscar</button>

        </div>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Foto</th>
           <th>Nombre</th>
           <th>Estructura Juridica</th>
           <th>RFC</th>
           <th>Domicilio</th>
           <th>Correo</th>
           <th>Telefono</th>
           <th>Pagos</th>
           <th>Status</th>
           <th>Descripcion</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>

        <tr>
           
        <?php

$item = null;
$valor = null;

$clientes = ControladorClientes::ctrMostrarClientes($item, $valor);

foreach ($clientes as $key => $value){
 
  echo ' <tr>
          <td>'.($key+1).'</td>
          <td><img src="'.$value["foto_cli"].'" alt="imagen_cliente" width="100" height="100"></td>
          <td>'.$value["nombre_cli"].'</td>
          <td>'.$value["estr_juridica"].'</td>
          <td>'.$value["rfc_cli"].'</td>
          <td>'.$value["calle_cli"]. " " .$value["num_call_cli"]. " " .$value["c_p_cli"]. " " .$value["id_localidades"].'</td>          
          <td>'.$value["correo_cli"].'</td>
          <td>'.$value["tel_cli"].'</td>
          <td>'.$value["banco_cli"]." " . $value["clabe_cli"] . " " . $value["cuenta_cli"].'</td>
          <td>'.$value["baja_cli"].'</td>
          <td>'.$value["desc_cli"].'</td>
          <td>

            <div class="btn-group">
                
              <button class="btn btn-warning btnEditarUsuario" idCliente="'.$value["id_cliente"].'" data-toggle="modal" data-target="#modalEditarCliente"><i class="fa fa-pencil"></i></button>

              <button class="btn btn-danger btnEliminarUsuario" idCliente="'.$value["id_cliente"].'" fotoCliente="'.$value["foto_cli"].'" cliente="'.$value["nombre_cli"].'"><i class="fa fa-times"></i></button>

            </div>  

          </td>

        </tr>';
        }


        ?> 


        </tbody>

       </table>

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR CLIENTE
======================================-->

<div id="modalAgregarCliente" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar Cliente</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoNombreCliente" placeholder="Ingresar nombre" id="nuevoNombreCliente" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL ESTRUCTURA JURIDICA -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoEstructuraJuridica" placeholder="Ingresa estructura juridica"  required>

              </div>

            </div>



            <!-- ENTRADA PARA EL RFC -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoRfc" placeholder="Ingresa R.F.C." id="nuevoRfc" required>

              </div>

            </div>
            

            <!-- ENTRADA PARA EL CALLE -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoCalle" placeholder="Ingresa Calle" id="nuevoCalle" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL NUMERO -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoNumero" placeholder="Ingresa Numero de calle" id="nuevoNumero" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL CODIGO POSTAL -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoCp" placeholder="Ingresa Codigo Postal" id="nuevoCp" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL LOCALIDADES -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoIdLocalidades" placeholder="Ingresa Localidad" id="nuevoIdLocalidades" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL CORREO -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="email" class="form-control input-lg" name="nuevoCorreo" placeholder="Ingresa correo" id="nuevoCorreo" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL TELEFONO -->

            <div class="form-group">

              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresa telefono" id="nuevoTelefono" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL BANCO -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoBanco" placeholder="Ingresa banco" id="nuevoBanco" required>

              </div>

            </div>
                        
            <!-- ENTRADA PARA EL CLABE -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoClabe" placeholder="Ingresa clabe" id="nuevoClabe" required>

              </div>

            </div>
           
            <!-- ENTRADA PARA EL CUENTA -->

            <div class="form-group">

              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoCuenta" placeholder="Ingresa Cuenta" id="nuevoCuenta" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL BAJA CLIENTE -->

            <div class="form-group">

              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoBajaCli" placeholder="Ingresa Status Cliente" id="nuevoBajaCli" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL DESCRIPCION CLIENTE -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoDescCli" placeholder="Ingresa Descripcion Cliente" id="nuevoDescCli" required>

              </div>

            </div>



            <!-- ENTRADA PARA SELECCIONAR SU PERFIL -->



            <!-- ENTRADA PARA SUBIR FOTO--> 

             <div class="form-group">
              
              <div class="panel">SUBIR FOTO</div>

              <input type="file" class="nuevaFoto" name="nuevaFoto2">

              <p class="help-block">Peso máximo de la foto 2MB</p>

              <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar Cliente</button>

        </div>

        <?php

          $crearCliente = new ControladorClientes();
          $crearCliente -> ctrCrearCliente();

        ?>

      </form>

    </div>

  </div>

</div>

<!--=====================================
MODAL AGREGAR CLIENTE
======================================-->

<div id="modalEditarCliente" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar Cliente</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="editarNombreCliente" placeholder="Ingresar nombre" id="editarNombreCliente" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL ESTRUCTURA JURIDICA -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" name="editarEstructuraJuridica" placeholder="Ingresa estructura juridica"  required>

              </div>

            </div>



            <!-- ENTRADA PARA EL RFC -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" name="editarRfc" placeholder="Ingresa R.F.C." id="nuevoRfc" required>

              </div>

            </div>
            

            <!-- ENTRADA PARA EL CALLE -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" name="editarCalle" placeholder="Ingresa Calle" id="nuevoCalle" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL NUMERO -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" name="editarNumero" placeholder="Ingresa Numero de calle" id="nuevoNumero" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL CODIGO POSTAL -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" name="editarCp" placeholder="Ingresa Codigo Postal" id="nuevoCp" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL LOCALIDADES -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" name="editarIdLocalidades" placeholder="Ingresa Localidad" id="nuevoIdLocalidades" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL CORREO -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="email" class="form-control input-lg" name="editarCorreo" placeholder="Ingresa correo" id="nuevoCorreo" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL TELEFONO -->

            <div class="form-group">

              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" name="editarTelefono" placeholder="Ingresa telefono" id="nuevoTelefono" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL BANCO -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" name="editarBanco" placeholder="Ingresa banco" id="nuevoBanco" required>

              </div>

            </div>
                        
            <!-- ENTRADA PARA EL CLABE -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" name="editarClabe" placeholder="Ingresa clabe" id="nuevoClabe" required>

              </div>

            </div>
           
            <!-- ENTRADA PARA EL CUENTA -->

            <div class="form-group">

              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" name="editarCuenta" placeholder="Ingresa Cuenta" id="nuevoCuenta" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL BAJA CLIENTE -->

            <div class="form-group">

              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" name="editarBajaCli" placeholder="Ingresa Status Cliente" id="nuevoBajaCli" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL DESCRIPCION CLIENTE -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" name="editarDescCli" placeholder="Ingresa Descripcion Cliente" id="nuevoDescCli" required>

              </div>

            </div>



            <!-- ENTRADA PARA SELECCIONAR SU PERFIL -->



            <!-- ENTRADA PARA SUBIR FOTO--> 

             <div class="form-group">
              
              <div class="panel">SUBIR FOTO</div>

              <input type="file" class="nuevaFoto" name="editarFoto">

              <p class="help-block">Peso máximo de la foto 2MB</p>

              <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar Cliente</button>

        </div>

        <?php

            $editarCliente = new ControladorClientes();
            $editarCliente -> ctrEditarCliente();


        ?>

      </form>

    </div>

  </div>

</div>


<?php

  $borrarCliente = new ControladorClientes();
  $borrarCliente -> ctrBorrarCliente();

?> 
