@extends('admin.layout.master')
 
@section('content')

<section class="content" style="padding-right: 0px; background-color: #f7f7f7; width:100%; padding: 0px;">
        
<div id="wrappermini" style="margin:5px;"> 
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Delivery</a></li>
        <li><a data-toggle="tab" href="#menu1">Ventas</a></li> 
    </ul>

    <div class="tab-content" style="background-color: #f7f7f7;">
        <div id="home" class="tab-pane fade in active">
 
            <div class="row" style="margin: 0; padding: 0; padding-bottom: 25px; background-color: #f7f7f7; height: 200px;">
                <div class="box-header3" style="background-color: #fed0a2; padding-top: 4px;"> <h4>EN PREPARACION<h4> </div> 
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
                                    
                            @foreach ($enpreparacion as $preparando)  
                                <tr> 
                                <td width="70px">{{$preparando->id}}</th>
                                <td width="180px">{{$preparando->created_at}}</th>
                                <td width="240px">{{$preparando->address}}</th> 
                                <td>{{$preparando->usuario->telefono}}</th> 
                                <td>{{$preparando->usuario->name}}</th>     
                                <td>{{$preparando->importe}}</th> 
                                </tr> 
                            @endforeach
                            
                        </tbody>
                    </table>
                </div> 
            </div>

            <div class="row" style="margin: 0; padding: 0; padding-bottom: 25px; background-color: #f7f7f7; height: 200px;">
                <div class="box-header3" style="background-color: #ffeb92; padding-top: 4px;"><h4>ENVIADOS<h4></div>
                  
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
                                @foreach ($enviados as $env)  
                                    <tr> 
                                    <td width="70px">{{$env->id}}</th>
                                    <td width="180px">{{$env->created_at}}</th>
                                    <td width="240px">{{$env->address}}</th> 
                                    <td>{{$env->usuario->telefono}}</th> 
                                    <td>{{$env->usuario->name}}</th>     
                                    <td>{{$env->importe}}</th> 
                                    </tr> 
                                @endforeach 
                            </tbody>
                    </table>
                </div>  
            </div>
            
            <div class="row" style="margin: 0; padding: 0; padding-bottom: 25px; background-color: #f7f7f7; height: 200px;">
                <div class="box-header3" style="background-color: #d3f4bf; padding-top: 4px;"> <h4>ENTREGADOS<h4> </div>
                  
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
                                @foreach ($entregados as $entr)  
                                    <tr> 
                                    <td width="70px">{{$entr->id}}</th>
                                    <td width="180px">{{$entr->created_at}}</th>
                                    <td width="240px">{{$entr->address}}</th> 
                                    <td>{{$entr->usuario->telefono}}</th> 
                                    <td>{{$entr->usuario->name}}</th>     
                                    <td>{{$entr->importe}}</th> 
                                    </tr> 
                                @endforeach 
                            </tbody>
                    </table>
                </div>  
            </div>
 
        </div>  
        
        <div id="menu1" class="tab-pane fade">
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
          
     
</div>
      
</section>

 
 <script>      
    
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