<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
        Inicio
      
          
    </h1>

    </section>

  <!-- Main content -->
  <section class="content">

<div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-address-book-o"></i></span>

            <div class="info-box-content"><a href="clientes" style='text-decoration:none;color:black;(otros)'>CLIENTES</span>
              <?php
                $tabla = "clientes";
                $respuesta = ModeloClientes::mdlContarClientes($tabla);
              ?>
              <span class="info-box-number"><?php echo $respuesta ?></a></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-building-o"></i></span>

            <div class="info-box-content">
            <?php
                $tabla = "obras";
                $respuesta = ModeloObras::mdlContarObras($tabla);
              ?>
              <span class="info-box-text"><a href="obras" style='text-decoration:none;color:black;(otros)'>Obras</span>
              <span class="info-box-number"><?php echo $respuesta ?></a></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
            <?php
                $tabla = "empleados";
                $respuesta = ModeloEmpleados::mdlContarEmpleados($tabla);
              ?>
              <span class="info-box-text"><a href="empleados" style='text-decoration:none;color:black;(otros)'>Empleados</span>
              <span class="info-box-number"><?php echo $respuesta ?></a></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-money"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><a href="gastos" style='text-decoration:none;color:black;(otros)'>Gastos</span>
              <span class="info-box-number">$2,000</a></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
   

<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Reporte mensual</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                
              </div>
            </div>
<!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                  <p class="text-center">
                    <strong>Gastos: 1-Enero-2021 - 31-Enero-2021</strong>
                  </p>

                  <div class="chart">
                    <!-- Sales Chart Canvas -->
                    <canvas id="salesChart" style="height: 180px;"></canvas>
                  </div>
                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <p class="text-center">
                    <strong>Gastos obra</strong>
                  </p>

                  <div class="progress-group">
                    <span class="progress-text">Plaza San Juan</span>
                    <span class="progress-number"><b>600,00</b>/10,000,000</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-yellow" style="width: 60%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Marina</span>
                    <span class="progress-number"><b>300,000</b>/10,000,000</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-green" style="width: 30%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Zapata</span>
                    <span class="progress-number"><b>10,000,000</b>/10,000,000</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-red" style="width: 100%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Send Inquiries</span>
                    <span class="progress-number"><b>250</b>/500</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                    <h5 class="description-header">$35,210.43</h5>
                    <span class="description-text">TOTAL NOMINA</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                    <h5 class="description-header">$10,390.90</h5>
                    <span class="description-text">TOTAL MATERIALES</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                    <h5 class="description-header">$24,813.53</h5>
                    <span class="description-text">TOTAL HERRAMIENTAS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block">
                    <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                    <h5 class="description-header">1200</h5>
                    <span class="description-text">GOAL COMPLETIONS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->






   <!-- <div class="row">
        <!-- Left col -->
       <!-- <section class="col-lg-7 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
        <!--  <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <!--<ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>
              <li><a href="#sales-chart" data-toggle="tab">Donut</a></li>
              <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li>
            </ul>-->
          <!--  <div class="tab-content no-padding">
              <!-- Morris chart - Sales -->
             <!-- <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
              <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
            </div>
          </div> -->








           <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Empleados</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Estatus</th>
                    <th>Puesto</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><a href="pages/examples/invoice.html" style='text-decoration:none;color:black;(otros)'>Juan</a></td>
                    <td>Juan Lopez</td>
                    <td><span class="label label-success">Activo</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">Administrador</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html" style='text-decoration:none;color:black;(otros)'>Julio</a></td>
                    <td>Julio Gomez</td>
                    <td><span class="label label-success">Activo</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f39c12" data-height="20">Empleado</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html" style='text-decoration:none;color:black;(otros)'>Ana</a></td>
                    <td>Ana GonzaleZ</td>
                    <td><span class="label label-success">Activo</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f56954" data-height="20">Empleado</div>
                    </td>
                  </tr>
                  
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Agregar nuevo empleado</a>
              <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">Ver todos los empleados</a>
            </div>

            <!-- /.box-footer -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->



  </section>
  <!-- /.content -->


<!-- /.content-wrapper -->