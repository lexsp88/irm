<div class="content-wrapper">

    <section class="content-header">

        <h1>

            Administrar empleados

        </h1>

        <ol class="breadcrumb">

            <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

            <li class="active">Empleados</li>

        </ol>

    </section>

    <section class="content">

        <div class="box">
            <div class="box-header with-border">
                <div class="form-group">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Administrador</label>
                            <select class="form-control">
                                <option value="Seleccione">Seleccione</option>
                                <option>Administrador 1</option>
                                <option>Administrador 2</option>
                                <option>Administrador 3</option>
                                <option>Administrador 4</option>
                            </select>
                       

                            <label>Cliente</label>
                            <select class="form-control">
                                <option value="Seleccione">Seleccione</option>
                                <option>Obra 1</option>
                                <option>Obra 2</option>
                                <option>Obra 3</option>
                                <option>Obra 4</option>
                            </select>
                   

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

                            <button type="button" class="btn btn-primary pull-left" data-toggle="modal"
                                data-target="#modalAgregarEmpleado">
                                Agregar Empleado



                                <button type="submit" class="btn btn-primary">Buscar</button>
                    
                        </div>
                    </div>
                </div>




                <div class="box-body">
                    <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
                        <thead>
                            <tr>
                                <th>ID IRM</th>
                                <th>Nombre</th>
                                <th>Puesto</th>
                                <th>Obra</th>
                                <th><a href="info-emp"> Foto </a></th>
                                <th>Estado</th>
                                <th>Acciones</th>

                            </tr>
                        </thead>

                        <tbody>
                        </tbody>

                    </table>

                </div>

            </div>
        </div>

    </section>

</div>



<!--=====================================
MODAL AGREGAR EMPLEADO
======================================-->

<div id="modalAgregarEmpleado" class="modal fade" role="dialog">

    <div class="modal-dialog">

        <div class="modal-content">

            <form role="form" method="post" enctype="multipart/form-data">


                <!--=====================================
                      CABEZA DEL MODAL
                      ======================================-->

                <div class="modal-header" style="background:#3c8dbc; color:white">

                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <h4 class="modal-title">AGREGAR EMPLEADO</h4>

                </div>

                <!--=====================================
                CUERPO DEL MODAL
                ======================================-->

                <div class="modal-body">

                    <div class="box-body">


                        <!-- ENTRADA PARA EL NOMBRE -->

                        <div class="col-md-6 form-group ">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                                <input type="text" class="form-control form-control-sm" name="nuevoNombre"
                                    placeholder="Nombre" id="nuevoNombre" required>

                            </div>

                        </div>

                        <!-- ENTRADA PARA EL APELLIDO PATERNO-->

                        <div class="col-md-6 form-group">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                                <input type="text" class="form-control form-control-sm" name="nuevoApellidoP"
                                    placeholder="Apellido Paterno" id="nuevoApellidoP" required>

                            </div>

                        </div>

                        <!-- ENTRADA PARA EL APELLIDO MATERNO -->

                        <div class="col-md-6 form-group">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                                <input type="text" class="form-control form-control-sm" name="nuevoApellidoM"
                                    placeholder="Apellido Materno" id="nuevoApellidoM" required>

                            </div>

                        </div>




                        <!-- ENTRADA PARA EL ALIAS -->

                        <div class="col-md-6 form-group">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                                <input type="text" class="form-control form-control-sm" name="nuevoAlias"
                                    placeholder="Alias (Sobre Nombre)" id="nuevoAlias" required>

                            </div>

                        </div>

                        <!-- ENTRADA PARA LA TIPO SANGRE -->

                        <div class="col-md-6 form-group">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-key"></i></span>

                                <select class="form-control form-control-sm" name="nuevoTipoS" required>
                                    <?php
                                      $tabla = "tipo_sangre";

                                      $respuesta = ModeloCatalogo::mdlCatalogo($tabla, $item, $valor);

                                    ?>
                                    <option value="">Tipo de Sangre</option>
                                    <?php foreach ($respuesta as $opciones): ?>

                                    <option value="<?php echo $opciones['id_tipo_sangre']?>">
                                        <?php echo $opciones['descripcion'] ?>
                                    </option>

                                    <?php endforeach?>

                                </select>


                            </div>

                        </div>

                        <!-- ENTRADA PARA Estado Civil -->

                        <div class="col-md-6 form-group">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-key"></i></span>

                                <select class="form-control form-control-sm" name="nuevoEstadoC" required>
                                    <?php
                                      $tabla = "estado_civil";

                                      $respuesta = ModeloCatalogo::mdlCatalogo($tabla, $item, $valor);

                                    ?>
                                    <option value="">Estado Civil</option>
                                    <?php foreach ($respuesta as $opciones): ?>

                                    <option value="<?php echo $opciones['id_ecivil']?>">
                                        <?php echo $opciones['descripcion'] ?>
                                    </option>

                                    <?php endforeach?>

                                </select>


                            </div>

                        </div>
                        <!-- ENTRADA PARA Edad -->

                        <div class="col-md-4 form-group">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                                <input type="text" class="form-control form-control-sm" name="nuevaEdad"
                                    placeholder="Edad" id="nuevaEdad" required>
                            </div>

                        </div>

                        <!-- ENTRADA PARA CLAVE ELECTOR -->

                        <div class="col-md-8 form-group">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                                <input type="text" class="form-control form-control-sm" name="nuevaCE"
                                    placeholder="Clave Elector" id="nuevaCE" required>
                            </div>

                        </div>
                        <!-- ENTRADA PARA FECHA -->

                        <div class="col-md-6 form-group">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>

                                <input type="text" class="form-control form-control-sm" name="fechaNacimiento"
                                    placeholder="Nacimiento( yyyy-mm-dd)" id="fechaNacimiento" required>
                            </div>

                        </div>

                        <!-- ENTRADA PARA LA ESPECIALIDAD -->

                        <div class="col-md-6  form-group">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-key"></i></span>

                                <input type="text" class="form-control form-control-sm" name="nuevaEspecialidad"
                                    placeholder="Ingresa especialidad" id="nuevaEspecialidad" required>

                            </div>

                        </div>
                        <!-- ENTRADA PARA EL SEXO-->
                        <div class="col-md-6 form-group">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-users"></i></span>

                                <select class="form-control form-control-sm" name="nuevoSexo" required>

                                    <option value="">Selecionar sexo</option>

                                    <option value="F">Femenino</option>

                                    <option value="M">Masculino</option>

                                </select>

                            </div>

                        </div>
                        <!-- ENTRADA PARA LA OBRA -->

                        <div class="col-md-6 form-group">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-key"></i></span>

                                <select class="form-control form-control-sm" name="nuevaObraEmp" required>
                                    <?php
                                      $tabla = "obras";

                                      $respuesta = ModeloCatalogo::mdlCatalogo($tabla, $item, $valor);

                                    ?>
                                    <option value="">Selecionar Obra</option>
                                    <?php foreach ($respuesta as $opciones): ?>

                                    <option value="<?php echo $opciones['id_obra']?>"><?php echo $opciones['nombre'] ?>
                                    </option>

                                    <?php endforeach?>

                                </select>


                            </div>

                        </div>

                        <!-- ENTRADA PARA EL DEPARTAMENTO -->

                        <div class="col-md-6 form-group">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                <select class="form-control form-control-sm" name="nuevoDepartamento" required>
                                    <?php
                                      $tabla = "depto";

                                      $respuesta = ModeloCatalogo::mdlCatalogo($tabla, $item, $valor);

                                    ?>
                                    <option value="">Selecionar Departamento</option>
                                    <?php foreach ($respuesta as $opciones): ?>

                                    <option value="<?php echo $opciones['id_depto']?>">
                                        <?php echo $opciones['desc_depto'] ?></option>

                                    <?php endforeach?>

                                </select>

                            </div>

                        </div>

                        <!-- ENTRADA PARA EL PUESTO -->
                        <div class="col-md-6 form-group">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-users"></i></span>

                                <select class="form-control form-control-sm" name="nuevoPuesto" required>
                                    <?php
                                      $tabla = "cargos";

                                      $respuesta = ModeloCatalogo::mdlCatalogo($tabla, $item, $valor);

                                    ?>
                                    <option value="">Selecionar puesto</option>
                                    <?php foreach ($respuesta as $opciones): ?>

                                    <option value="<?php echo $opciones['id_cargos']?>">
                                        <?php echo $opciones['descripcion'] ?></option>

                                    <?php endforeach?>

                                </select>

                            </div>

                        </div>

                        <!-- ENTRADA PARA EL SUELDO -->

                        <div class="col-md-6  form-group">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-money"></i></span>

                                <input type="text" class="form-control form-control-sm" name="nuevoSueldo"
                                    placeholder="Sueldo Nomina" id="nuevoSueldo" required>

                            </div>

                        </div>
                        <!-- ENTRADA PARA EL SUELDO 2-->

                        <div class="col-md-6  form-group">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-money"></i></span>

                                <input type="text" class="form-control form-control-sm" name="nuevoSueldo2"
                                    placeholder="Bono" id="nuevoSueldo" required>

                            </div>

                        </div>





                        <!-- ENTRADA PARA EL NSS -->

                        <div class="col-md-6 form-group">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-key"></i></span>

                                <input type="text" class="form-control form-control-sm" name="nuevoNss"
                                    placeholder="Ingresa N.S.S." id="nuevoNss" required>

                            </div>

                        </div>



                        <!-- ENTRADA PARA EL RFC -->

                        <div class="col-md-6  form-group">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-key"></i></span>

                                <input type="text" class="form-control form-control-sm" name="nuevoRfc"
                                    placeholder="Ingresa R.F.C." id="nuevoRfc" required>

                            </div>

                        </div>

                        <!-- ENTRADA PARA EL CURP -->

                        <div class="col-md-6 form-group">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-key"></i></span>

                                <input type="text" class="form-control form-control-sm" name="nuevoCurp"
                                    placeholder="Ingresa C.U.R.P." id="nuevoCurp" required>

                            </div>

                        </div>

                        <!-- ENTRADA PARA EL CATEGORIA -->

                        <div class="col-md-6 form-group">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-key"></i></span>

                                <input type="text" class="form-control form-control-sm" name="nuevoCategoria"
                                    placeholder="Categoria" id="nuevoCategoria" required>

                            </div>

                        </div>
                        <!-- ENTRADA PARA EL CODIGO POSTAL -->

                        <div class="col-md-6  form-group">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-key"></i></span>

                                <input type="text" class="form-control form-control-sm" name="nuevoCp"
                                    placeholder="Ingresa Codigo Postal" id="nuevoCp" required>

                            </div>

                        </div>

                        <!-- ENTRADA PARA EL ESTADO -->
                        <div class="col-md-6  form-group">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-users"></i></span>

                                <select id="estados" class="form-control form-control-sm" name="nuevoEstado" required>
                                    <?php
                                      $tabla = "estados";

                                      $respuesta = ModeloCatalogo::mdlCatalogo($tabla, $item, $valor);

                                    ?>
                                    <option value="">Selecionar Estado</option>
                                    <?php foreach ($respuesta as $opciones): ?>

                                    <option value="<?php echo $opciones['id_estado']?>">
                                        <?php echo rtrim($opciones['nombre']) ?></option>

                                    <?php endforeach?>

                                </select>

                            </div>

                        </div>

                        <!-- ENTRADA PARA EL MUNICIPIO -->
                        <div class="col-md-6  form-group">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-users"></i></span>

                                <select id="municipios" class="form-control form-control-sm" name="nuevoMunicipio"
                                    required>
                                </select>

                            </div>

                        </div>

                        <!-- ENTRADA PARA LA LOCALIDAD -->
                        <div class="col-md-6  form-group">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-key"></i></span>

                                <select id="localidades" class="form-control form-control-sm" name="nuevaLocalidad"
                                    required>
                                </select>

                            </div>

                        </div>

                        <!-- ENTRADA PARA EL CALLE -->

                        <div class="col-md-9 form-group">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-key"></i></span>

                                <input type="text" class="form-control form-control-sm" name="nuevoCalle"
                                    placeholder="Ingresa Calle" id="nuevoCalle" required>

                            </div>

                        </div>

                        <!-- ENTRADA PARA EL NUMERO -->

                        <div class=" col-md-3  form-group">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-key"></i></span>

                                <input type="text" class="form-control form-control-sm" name="nuevoNumero"
                                    placeholder="#" id="nuevoNumero" required>

                            </div>

                        </div>




                        <!-- ENTRADA PARA EL CORREO -->

                        <div class="col-md-6 form-group">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-key"></i></span>

                                <input type="email" class="form-control form-control-sm" name="nuevoCorreo"
                                    placeholder="Ingresa correo" id="nuevoCorreo" required>

                            </div>

                        </div>

                        <!-- ENTRADA PARA EL TELEFONO -->

                        <div class="col-md-6 form-group">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-key"></i></span>

                                <input type="text" class="form-control form-control-sm" name="nuevoTelefono"
                                    placeholder="Ingresa telefono" id="nuevoTelefono" required>

                            </div>

                        </div>

                        <!-- ENTRADA PARA EL BANCO -->

                        <div class="col-md-4 form-group">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-key"></i></span>

                                <input type="text" class="form-control form-control-sm" name="nuevoBanco"
                                    placeholder="Banco" id="nuevoBanco" required>

                            </div>

                        </div>

                        <!-- ENTRADA PARA EL CUENTA -->

                        <div class="col-md-8 form-group">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-key"></i></span>

                                <input type="text" class="form-control form-control-sm" name="nuevoCuenta"
                                    placeholder="Cuenta" id="nuevoCuenta" required>

                            </div>

                        </div>

                        <!-- ENTRADA PARA EL CLABE -->

                        <div class="col-md-12  form-group">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-key"></i></span>

                                <input type="text" class="form-control form-control-sm" name="nuevoClabe"
                                    placeholder="Ingresa Clabe" id="nuevoClabe" required>

                            </div>

                        </div>

                        <!-- ENTRADA PARA EL PERSONA EMERGENCIA -->

                        <div class="col-md-6  form-group">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-key"></i></span>

                                <input type="text" class="form-control form-control-sm" name="nuevoPerEmer"
                                    placeholder="Persona Emergencia" id="nuevoPerEmer" required>

                            </div>

                        </div>

                        <!-- ENTRADA PARA EL TEL EMERGENCIA -->

                        <div class="col-md-6  form-group">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-key"></i></span>

                                <input type="text" class="form-control form-control-sm" name="nuevoTelEMer"
                                    placeholder="Cel. Emergencias" id="nuevoTelEMer" required>

                            </div>

                        </div>

                        <!-- ENTRADA PARA FECHA CONTRATO -->

                        <div class="col-md-12 form-group">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>

                                <input type="text" class="form-control form-control-sm" name="fechaContrato"
                                    placeholder="Contrato( yyyy-mm-dd)" id="fechaContrato" required>
                            </div>

                        </div>
                        <!-- ENTRADA PARA PASAPORTE -->

                        <div class="col-md-7  form-group">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-key"></i></span>

                                <input type="text" class="form-control form-control-sm" name="nuevoPasaporte"
                                    placeholder="Num. Pasaporte" id="nuevoPasaporte" required>

                            </div>

                        </div>

                        <!-- ENTRADA PARA Vigencia -->

                        <div class="col-md-5 form-group">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>

                                <input type="text" class="form-control form-control-sm" name="fechaVigencia"
                                    placeholder="Vigencia" id="fechaVigencia" required>
                            </div>

                        </div>

                        <!-- ENTRADA PARA ALERGIAS-->
                        <div class="col-md-12 mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">ALEGIAS</label>
                            <textarea class="form-control" id="empAlergias" name="empAlergias" rows="3"></textarea>
                        </div>

                        <!-- ENTRADA PARA OBSERVACIONES-->
                        <div class="col-md-12 mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">OBSERVACIONES</label>
                            <textarea class="form-control" id="empObservaciones" name="empObservaciones"
                                rows="3"></textarea>
                        </div>

                        <!-- ENTRADA PARA PADECIMIENTOS-->
                        <div class="col-md-12 mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">PADECIMIENTOS</label>
                            <textarea class="form-control" id="empPadecimientos" name="empPadecimientos"
                                rows="3"></textarea>
                        </div>

                        <!-- ENTRADA PARA SUBIR INE-->

                        <div class="col-md-12 mb-3">
                            <label for="formFileSm" class="form-label">SUBIR INE</label>
                            <input class="form-control form-control-sm" name="nuevaINE" id="nuevaINE" type="file">
                        </div>
                        <!-- ENTRADA PARA SUBIR FOTO-->

                        <div class="col-md-12 mb-3">
                            <label for="formFileSm" class="form-label">SUBIR FOTO</label>
                            <input class="form-control form-control-sm" name="nuevaFOTO" id="nuevaFOTO" type="file">
                        </div>

                        <!-- ENTRADA PARA SUBIR ACTA-->

                        <div class="col-md-12 mb-3">
                            <label for="formFileSm" class="form-label">SUBIR ACTA DE NACIMIENTO</label>
                            <input class="form-control form-control-sm" name="nuevaACTA" id="nuevaACTA" type="file">
                        </div>

                        <!-- ENTRADA PARA SUBIR CURP-->

                        <div class="col-md-12 mb-3">
                            <label for="formFileSm" class="form-label">SUBIR CURP</label>
                            <input class="form-control form-control-sm" name="nuevaCURP" id="nuevaCURP" type="file">
                        </div>

                        <!-- ENTRADA PARA SUBIR RFC-->

                        <div class="col-md-12 mb-3">
                            <label for="formFileSm" class="form-label">SUBIR RFC</label>
                            <input class="form-control form-control-sm" name="nuevaRFC" id="nuevaRFC" type="file">
                        </div>


                        <!-- ENTRADA PARA SUBIR DC3-->

                        <div class="col-md-12 mb-3">
                            <label for="formFileSm" class="form-label">SUBIR DC3</label>
                            <input class="form-control form-control-sm" name="nuevaDC3" id="nuevaDC3" type="file">
                        </div>

                        <!-- ENTRADA PARA SUBIR  MED-->

                        <div class="col-md-12 mb-3">
                            <label for="formFileSm" class="form-label">CERTIFICADO MEDICO</label>
                            <input class="form-control form-control-sm" name="nuevaCMED" id="nuevaCMED" type="file">
                        </div>

                        <!-- ENTRADA PARA SUBIR ANTI-->

                        <div class="col-md-12 mb-3">
                            <label for="formFileSm" class="form-label">SUBIR ANTIDOPING</label>
                            <input class="form-control form-control-sm" name="nuevaANTI" id="nuevaANTI" type="file">
                        </div>



                    </div>
                </div>
                <!--=====================================
                  PIE DEL MODAL
                  ======================================-->

                <div class="modal-footer">

                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

                    <button type="submit" class="btn btn-primary">Guardar empleado</button>


                </div>
                <?php

                    $crearEmpleado = new ControladorEmpleados();
                    $crearEmpleado -> ctrCrearEmpleado();

                ?>

            </form>

        </div>

    </div>

</div>