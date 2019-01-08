@extends('admin.layout.master')

@section('content')

<section class="content" style="padding-right: 0px; background-color: #f7f7f7;">
     
<div id="wrappermini">
    <div id="one" >   
        
        <ul class="nav nav-tabs" id="myTab" role="tablist" style="height: 43px;" >
            <li class="nav-item active">
              <a class="nav-link " id="home-tab" data-toggle="tab" href="#restaurantes" role="tab" aria-controls="restaurantes" aria-selected="true">Delivery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#ventas" role="tab" aria-controls="ventas" aria-selected="false">Ventas</a>
            </li> 
        </ul>
        
        <div class="tab-content" id="myTabContent" style="padding: 0px;">
            <div class="tab-pane fade active in" id="restaurantes" role="tabpanel" aria-labelledby="home-tab"  style="background-color: #fafafa;">

            <div class="box2" style="margin: 0; padding: 0; padding-bottom: 25px; background-color: #fff;">
                <div class="box-header3">
                    -- EN PREPARACION
                </div>

                <div class="box-body2" style="background-color: #fff;">
                    <table id="dtTablePreparacion" class="table table-hover" style="color: #000;">
                        <thead  style="background-color: #fed0a2; color: #888888;">
                            <tr> 
                              <th width="70px">Id</th>
                              <th width="180px">Hora Inicio</th>
                              <th width="240px">Direccion</th> 
                              <th>Telefono</th> 
                              <th>Cliente</th> 
                              <th>Total</th> 
                            </tr>
                        </thead>
                        <tbody> 
                        </tbody>
                    </table>
                </div> 
            </div> 
                 
            <div class="box2" style="margin: 0; padding: 0; padding-bottom: 25px; background-color: #fff;">
                <div class="box-header3" style="color: #d1c551;">
                    -- ENVIADOS
                </div>
                  
                <div class="box-body2" style="background-color: #fff;">
                    <table id="dtTableEnviados" class="table table-hover" style="background-color: #d3d3d3; color: #000;">
                        <thead style="background-color: #ffeb92; color: #888888;">
                            <tr> 
                              <th width="70px">Id</th>
                              <th>Hora Inicio</th>
                              <th>Direccion</th> 
                              <th>Telefono</th> 
                              <th>Cliente</th> 
                              <th>Total</th> 
                            </tr>
                        </thead>
                            <tbody> 
                            </tbody>
                    </table>
                </div>
                
              </div> 
                 
            <div class="box2" style="margin: 0; padding: 0; padding-bottom: 25px; background-color: #fff;">
                <div class="box-header3" style="color: #c5e3bf;">
                    -- ENTREGADOS
                </div>
                  
                <div class="box-body2" style="background-color: #fff;">
                    <table id="dtTableEntregados" class="table table-hover" style="background-color: #d3d3d3; color: #000;">
                        <thead style="background-color: #d3f4bf; color: #888888;">
                            <tr>
                              <th width="70px">Id</th>
                              <th>Hora Inicio</th>
                              <th>Direccion</th> 
                              <th>Telefono</th> 
                              <th>Cliente</th> 
                              <th>Total</th> 
                            </tr>
                        </thead>
                            <tbody> 
                            </tbody>
                    </table>
                </div>
                
              </div> 
                
                
            </div>
            <div class="tab-pane fade" id="ventas" role="tabpanel" aria-labelledby="profile-tab" style="background-color: #fafafa; padding: 15px;">

                <div class="box2" style="margin: 0; padding: 0; padding-bottom: 25px; background-color: #fff;">
                  <ul class="list-inline" style="background-color: #e5e5e5; height: 50px; padding: 8px; margin-bottom: 0px; min-width: 200px;">
                      <li>
                          <i class="fa fa-calendar" style="color: #000;"></i>
                      </li>                      
                      <li>
                          Hora inicio
                      </li>
                      <li>
                          <select>
                              <option>Turno</option>
                          </select>
                      </li>
                      <li>
                          <select>
                              <option>Diario</option>
                          </select>
                      </li>
                      <li>
                          <select>
                              <option>26</option>
                          </select>
                      </li>
                      <li>
                          <select>
                              <option>mar</option>
                          </select>
                      </li>
                      <li>
                          <select>
                              <option>2018</option>
                          </select>
                      </li>
                  </ul>
                  
                <div class="box2" style="margin: 0; padding: 0; padding-bottom: 25px; background-color: #fff;">
                </div>
                  <ul class="list-inline" style="background-color: #e5e5e5; height: 50px; padding: 8px; margin-bottom: 0px;">
                      <li>
                          <i class="fa fa-filter" style="color: #000;"></i>
                      </li>      
                      <li>
                          <select>
                              <option>Estado de venta</option>
                          </select>
                      </li>
                      <li>
                          <select>
                              <option>Tipos de venta</option>
                          </select>
                      </li>
                      <li>
                          <select>
                              <option>Camarero</option>
                          </select>
                      </li>
                      <li>
                          <select>
                              <option>Cliente</option>
                          </select>
                      </li>
                      <li>
                          <select>
                              <option>Medio de pago</option>
                          </select>
                      </li>
                  </ul>
                  
                  <div style="height: 100px; padding: 12px; background-color: #fff; ">

                    <table style="background-color: #fff; width: 100%;">
                        <thead>
                            <tr style="height: 55px;">
                                <th>Del 26/03/1800:00 hs al 27/03/1800:00 hs</th>
                                <th width="85px">Personas</th>
                                <th width="135px">Ticket promedio</th>
                                <th width="85px">Total </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="height: 35px;">
                                <td>1 registro</td>
                                <td></td>
                                <td></td>
                                <td>$ 34</td>
                            </tr>
                        </tbody>
                    </table>

                  </div>
                  
              </div>
                </br> 
                <div class="box2" style="margin: 0; padding: 0; padding-bottom: 25px; background-color: #fff;">  
                  
                <div class="box-body2" style="background-color: #fff;">
                    <table id="tb-cliente" class="table table-responsive table-hover" style="background-color: #d3d3d3; color: #000;">
                        <thead style="background-color: #f2f2f2; color: #888888;">
                            <tr>
                              <th width="70px">Id</th>
                              <th>Hora Inicio</th>
                              <th>Hora cierre</th> 
                              <th>Estado</th> 
                              <th>Mesa</th> 
                              <th>Camarero</th> 
                              <th>Cliente</th> 
                              <th>Total</th> 
                            </tr>
                        </thead>
                            <tbody> 
                            </tbody>
                    </table>
                </div>
                
              </div> 
                
            </div>  
        </div>
        
        
        
    </div> 
    <div id="two" >  
         <div class="row">
          <div class="col-md-12" >
            <div class="box"> 
                
                <form class="form-horizontal" id="fr-franchise"> 
                <div class="row" style="padding: 2px; margin: 0px;">
                    <div class="col-md-12" style="padding: 0px;">
                      <div class="box" style="background-color: #fff; padding: 0px;">

                              <fieldset>

                                <!-- Form Name -->
                                <legend style="background-color: #6a5acd; margin: 0px; padding-left: 15px; color:#fff; height: 55px;"></legend>
 
                                <!-- form-group -->
                                <div class="form-group" id="content_add_record"> 
                                </div>  
                                <!-- /.form-group -->
                              </fieldset>
                        </div>
                      </div>
                  </div>
                </form>
 
            </div>
          </div>
        </div> 
    </div>
</div>
      
</section>

 
 <script>     
    var two = document.getElementById("two").hidden = true;  
    
    $(document).ready(function(){         
        $('#dtTablePreparacion').DataTable({
          "paging": true
        });
        $('#dtTableEnviados').DataTable({
          "paging": true
        });
        $('#dtTableEntregados').DataTable({
          "paging": true
        });
        $('.dataTables_length').addClass('bs-select');
         
    });
    
 </script>

@endsection