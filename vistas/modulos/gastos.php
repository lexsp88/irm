<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Reportes de gastos
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Gastos</li>
    
    </ol>

  </section>

  <!-- Main content -->
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


                <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Agregar cliente</button>

          <button type="submit" class="btn btn-primary">Buscar</button>

        </div>


        

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Nombre</th>
           <th>N. Clientes</th>
           <th>N. Empleados</th>
           <th>Administrador</th>
           <th>Dirección</th>
           <th>% Gastado</th>
           <th>Gasto total</th>
           

         </tr> 

        </thead>

        <tr>
            <td>1</td>
            <td><a href="reporte-obra" style='text-decoration:none;color:black;(otros)'>Plaza San Juan</td>
            <td>21</td>
            <td>50</td>
            <td>Jose Alberto</td>
            <td>Av san juan</td>
            <td><div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Completo</span>
                        </div></div><small class="pull-right">60%</small></td>
            <td>600,000</td>

              

            </td>

          </tr>

<tr>
            <td>2</td>
            <td>Marina</td>
            <td>58</td>
            <td>100</td>
            <td>Ana Perez</td>
            <td>Av Marina nacional</td>
            <td><div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 30%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">30% Completo</span>
                        </div></div><small class="pull-right">30%</small></td>
            <td>300,000</td>

              

            </td>

          </tr>



          <tr>
            <td>3</td>
            <td>Zapata</td>
            <td>12</td>
            <td>38</td>
            <td>Pablo Montes</td>
            <td>Av Zpata</td>
            <td><div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 100%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">100% Completo</span>
                        </div></div><small class="pull-right">100%</small></td>
            <td>10,000,000</td>

              

            </td>

          </tr>
        <tbody>

        <?php

        

        ?> 

        </tbody>

       </table>

      </div>

    </div>

  </section>

</div>

