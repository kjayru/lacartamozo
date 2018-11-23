@extends('admin.layout.master')

@section('content')
  
<section class="content-header" >  
    </section>

      <!-- Main content -->
      <section class="content" style="position: relative; width: 100%; min-width: 300px; padding: 15px; padding-top: 25px;">
 
          
          
          <div class="panel">

                <div class="upper-dashboard">
                    <div class="tablero-dash-opc">
                        <a href=""><i class="fa fa-plus" style="color: #777778; margin-right: 15px;"></i></a>
                        <a href=""><i class="fa fa-calendar" style="color: #777778; margin-right: 15px;"></i></a>
                        <a href=""><i class="fa fa-calendar" style="color: #777778; margin-right: 15px;"></i></a>
                        <a href=""><i class="fa fa-check-square" style="color: #777778; margin-right: 15px;"></i></a>
                        <a href=""><i class="fa fa-user" style="color: #777778; margin-right: 10px;"></i></a>
                    </div>  
                    </br>
                    <div class="tablero-sub-title">
                        TABLERO
                    </div>
                    <div class="myquerymain" >
                                <form> 
                        <ul class="list-inline">
                            <li>
                                <i class="fa fa-search" style="color: #777778; margin-right: 10px;"></i>
                            </li>
                            <li>
                                <div class="col-25">
                                    <label class="hidden-xs"or="fname" >Buscar en todas las categorias</label>
                                </div>
                            </li>
                            <li>
                                <div class="col-75">
                                  <input type="query" name="" value="" style="margin-left: 12px; width: 190px; background-color:#d3d3d3; border: 0px; height: 32px;" />
                                </div>
                            </li>
                        </ul>
                                </form>
                    </div>
                    
                    <div class="row" style="float: right; max-width: 300px; padding-right: 10px;" >

                        <div  style="float: left; margin-right: 3px; margin-top: -15px; width: 80px;">
                            <div class="input-group margin">
                              <div class="input-group-btn">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="height: 28px; padding-top: 3px;">Mas
                                  <span class="fa fa-caret-down"></span></button>
                                <ul class="dropdown-menu">
                                  <li><a href="#">Action</a></li>
                                  <li><a href="#">Another action</a></li>
                                  <li><a href="#">Something else here</a></li>
                                  <li class="divider"></li>
                                  <li><a href="#">Separated link</a></li>
                                </ul>
                              </div> 
                            </div>
                        </div>

                        <div style="float: left; margin: 0 auto; height: 30px;">

                            <div  style=" margin-right: 2px; margin-top: -15px; width: 130px;">
                                <div class="input-group margin">
                                  <div class="input-group-btn">
                                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="height: 28px; padding-top: 3px;">Añadir widget
                                      <span class="fa fa-caret-down"></span></button>
                                    <ul class="dropdown-menu">
                                      <li><a href="#">Action</a></li>
                                      <li><a href="#">Another action</a></li>
                                      <li><a href="#">Something else here</a></li>
                                      <li class="divider"></li>
                                      <li><a href="#">Separated link</a></li>
                                    </ul>
                                  </div> 
                                </div>
                            </div>

                        </div>
                        
                    </div>
                </div>  

          </div>
  
          

        <div class="row">
          
            <div  class="col-md-3" style="min-width:  270px; max-width: 380px; ">
                    
                  <div class="box">
                  <div class="box-header" style="height: 45px;">
                        <table style="width: 100%;">
                            <col>
                            <col width="56px;">
                            <tr>
                                <th><h3 class="box-title"><p>FRANQUICIADOS</p></h3></th>
                                <th>
                                    <a href="#"><img src="/dist/img/icon_close.png" width="21px" style="margin: -12px 7px 0px 0px;"/></a>
                                    <a href="#"><img src="/dist/img/icon_lista.png" width="25px" style="margin: -12px 0px 0px 0px;"/></a>
                                </th>
                            </tr>
                        </table> 
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body no-padding">
                    <table class="table table-condensed">
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>Nombre</th>
                       
                        <th style="width: 40px">Label</th>
                      </tr>
                      @foreach($franquicias as $k => $frank)
                      <tr>
                        <td>{{ $k+1 }}</td>
                        <td>{{ $frank->names }}</td>
                        
                        <td><a href="#" class="btn btn-xs">ver</a></td>
                      </tr>
                     @endforeach
                    </table>
                  </div>
                  <!-- /.box-body -->
                        <!-- /.box-footer -->
                        <div class="box-footer" style="padding: 5px;"> 
                            <table style="width: 100%;">
                                <col>
                                <col width="35px;">
                                <tr>
                                    <th></th>
                                    <th>
                                        <a href=""><img src="/dist/img/icon_refresh.png" width="12px" style="margin: -10px 7px 0px 0px;"/></a>
                                        <a href=""><img src="/dist/img/icon_delete.png" width="10px" style="margin: -9px 0px 0px 0px;"/></a>
                                    </th>
                                </tr>
                            </table>
                        </div>
                </div>

            </div>

            <div  class="col-md-3" style="min-width:  270px; max-width: 380px;" >
                    
                <div class="box" >
                        <div class="box-header" style="height: 45px;">
                            <table style="width: 100%;">
                                <col>
                                <col width="56px;">
                                <tr>
                                    <th><h4 class="box-title"><p>MOZOS - MESAS - MIGRACIONES</p></h4></th>
                                    <th>
                                        <a href="#"><img src="/dist/img/icon_close.png" width="21px" style="margin: -12px 7px 0px 0px;"/></a>
                                        <a href="#"><img src="/dist/img/icon_lista.png" width="25px" style="margin: -12px 0px 0px 0px;"/></a>
                                    </th>
                                </tr>
                            </table>  
                        </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                      <table class="table table-condensed">
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Mozos </th>
                          
                          <th style="width: 40px"></th>
                        </tr>
                        @foreach($personas as $k => $persona)
                        <tr>
                          <td>{{ $k+1 }}</td>
                          <td>{{ $persona->names }}</td>
                          
                          <td><a href="#" class="btn btn-xs">Ver</a></td>
                        </tr>
                        @endforeach
                      </table>
                    </div>
                    <!-- /.box-body -->
                        <!-- /.box-footer -->
                        <div class="box-footer" style="padding: 5px;"> 
                            <table style="width: 100%;">
                                <col>
                                <col width="35px;">
                                <tr>
                                    <th></th>
                                    <th>
                                        <a href=""><img src="/dist/img/icon_refresh.png" width="12px" style="margin: -10px 7px 0px 0px;"/></a>
                                        <a href=""><img src="/dist/img/icon_delete.png" width="10px" style="margin: -9px 0px 0px 0px;"/></a>
                                    </th>
                                </tr>
                            </table>
                        </div>
                  </div>
            </div>



            <div  class="col-md-3" style="min-width:  270px; max-width: 380px;">
                    
                    <div class="box">
                    <div class="box-header" style="height: 45px;"> 
                        <table style="width: 100%;">
                            <col>
                            <col width="56px;">
                            <tr>
                                <th><h3 class="box-title"><p>DELIVERY</p></h3></th>
                                <th>
                                    <a href="#"><img src="/dist/img/icon_close.png" width="21px" style="margin: -12px 7px 0px 0px;"/></a>
                                    <a href="#"><img src="/dist/img/icon_lista.png" width="25px" style="margin: -12px 0px 0px 0px;"/></a>
                                </th>
                            </tr>
                        </table> 
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                      <table class="table table-condensed">
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Delivery</th>
                          
                          <th style="width: 40px"></th>
                        </tr>
                        @foreach($pedidos as $k => $order)
                        <tr>
                          <td>{{ $k+1 }}</td>
                          <td>{{ $order->pedido }}</td>
                          
                          <td><a href="#" class="btn btn-xs">Ver</a></td>
                        </tr>
                        @endforeach
                      </table>
                    </div>
                    <!-- /.box-body -->
                        <!-- /.box-footer -->
                        <div class="box-footer" style="padding: 5px;"> 
                            <table style="width: 100%;">
                                <col>
                                <col width="35px;">
                                <tr>
                                    <th></th>
                                    <th>
                                        <a href=""><img src="/dist/img/icon_refresh.png" width="12px" style="margin: -10px 7px 0px 0px;"/></a>
                                        <a href=""><img src="/dist/img/icon_delete.png" width="10px" style="margin: -9px 0px 0px 0px;"/></a>
                                    </th>
                                </tr>
                            </table>
                        </div>
                  </div>
            </div>




            <div  class="col-md-3" style="min-width:  270px; max-width: 380px;">

                        <div class="box">
                        <!-- /.box-header -->
                        <div class="box-header" style="height: 45px;"> 
                            <table style="width: 100%;">
                                <col>
                                <col width="56px;">
                                <tr>
                                    <th><h3 class="box-title"><p>PRODUCTOS</p></h3></th>
                                    <th>
                                        <a href="#"><img src="/dist/img/icon_close.png" width="21px" style="margin: -12px 7px 0px 0px;"/></a>
                                        <a href="#"><img src="/dist/img/icon_lista.png" width="25px" style="margin: -12px 0px 0px 0px;"/></a>
                                    </th>
                                </tr>
                            </table> 
                        </div>
                            
                        <!-- /.box-body -->
                        <div class="box-body no-padding">
                          <table class="table table-condensed">
                            <tr>
                              <th style="width: 10px">#</th>
                              <th>Producto</th>

                              <th style="width: 40px"></th>
                            </tr>
                            @foreach($productos as $k => $prod)
                            <tr>
                              <td>{{ $k+1 }}</td>
                              <td>{{ $prod->descripcion }}</td>

                              <td><a href="#" class="btn btn-xs">Ver</a></td>
                            </tr>
                            @endforeach
                          </table>
                        </div>
                        
                        <!-- /.box-footer -->
                        <div class="box-footer" style="padding: 5px;"> 
                            <table style="width: 100%;">
                                <col>
                                <col width="35px;">
                                <tr>
                                    <th></th>
                                    <th>
                                        <a href=""><img src="/dist/img/icon_refresh.png" width="12px" style="margin: -10px 7px 0px 0px;"/></a>
                                        <a href=""><img src="/dist/img/icon_delete.png" width="10px" style="margin: -9px 0px 0px 0px;"/></a>
                                    </th>
                                </tr>
                            </table>
                        </div>
                        
                  </div>
            </div>
            
            

        </div>
          
          
          <div class="row">

            <div  class="col-md-3" style="min-width:  270px; max-width: 380px;"> 
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-header" style="height: 45px;"> 
                            <table style="width: 100%;">
                                <col>
                                <col width="56px;">
                                <tr>
                                    <th><h3 class="box-title"><p>CUENTAS - RESTOS</p></h3></th>
                                    <th>
                                        <a href="#"><img src="/dist/img/icon_close.png" width="21px" style="margin: -12px 7px 0px 0px;"/></a>
                                        <a href="#"><img src="/dist/img/icon_lista.png" width="25px" style="margin: -12px 0px 0px 0px;"/></a>
                                    </th>
                                </tr>
                            </table> 
                    </div>

                    <!-- /.box-body -->
                    <div class="box-body no-padding"> 

                    </div>

                    <!-- /.box-footer -->
                    <div class="box-footer" style="padding: 5px;"> 
                        <table style="width: 100%;">
                            <col>
                            <col width="35px;">
                            <tr>
                                <th></th>
                                <th>
                                    <a href=""><img src="/dist/img/icon_refresh.png" width="12px" style="margin: -10px 7px 0px 0px;"/></a>
                                    <a href=""><img src="/dist/img/icon_delete.png" width="10px" style="margin: -9px 0px 0px 0px;"/></a>
                                </th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
              
            <div  class="col-md-3" style="min-width:  270px; max-width: 380px;"> 
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-header" style="height: 45px;"> 
                            <table style="width: 100%;">
                                <col>
                                <col width="56px;">
                                <tr>
                                    <th><h3 class="box-title"><p>PATROCINADORES - PUBLICIDAD</p></h3></th>
                                    <th>
                                        <a href="#"><img src="/dist/img/icon_close.png" width="21px" style="margin: -12px 7px 0px 0px;"/></a>
                                        <a href="#"><img src="/dist/img/icon_lista.png" width="25px" style="margin: -12px 0px 0px 0px;"/></a>
                                    </th>
                                </tr>
                            </table> 
                    </div>

                    <!-- /.box-body -->
                    <div class="box-body no-padding"> 

                    </div>

                    <!-- /.box-footer -->
                        <div class="box-footer" style="padding: 5px;"> 
                            <table style="width: 100%;">
                                <col>
                                <col width="35px;">
                                <tr>
                                    <th></th>
                                    <th>
                                        <a href=""><img src="/dist/img/icon_refresh.png" width="12px" style="margin: -10px 7px 0px 0px;"/></a>
                                        <a href=""><img src="/dist/img/icon_delete.png" width="10px" style="margin: -9px 0px 0px 0px;"/></a>
                                    </th>
                                </tr>
                            </table>
                        </div>
                </div>
            </div>
              
            <div  class="col-md-3" style="min-width:  270px; max-width: 380px;"> 
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-header" style="height: 45px;"> 
                        <table style="width: 100%;">
                            <col>
                            <col width="56px;">
                            <tr>
                                <th><h3 class="box-title"><p>CONFIGURACIONES</p></h3></th>
                                <th>
                                    <a href="#"><img src="/dist/img/icon_close.png" width="21px" style="margin: -12px 7px 0px 0px;"/></a>
                                    <a href="#"><img src="/dist/img/icon_lista.png" width="25px" style="margin: -12px 0px 0px 0px;"/></a>
                                </th>
                            </tr>
                        </table> 
                    </div>

                    <!-- /.box-body -->
                    <div class="box-body no-padding"> 

                    </div>

                    <!-- /.box-footer -->
                        <div class="box-footer" style="padding: 5px;"> 
                            <table style="width: 100%;">
                                <col>
                                <col width="35px;">
                                <tr>
                                    <th></th>
                                    <th>
                                        <a href=""><img src="/dist/img/icon_refresh.png" width="12px" style="margin: -10px 7px 0px 0px;"/></a>
                                        <a href=""><img src="/dist/img/icon_delete.png" width="10px" style="margin: -9px 0px 0px 0px;"/></a>
                                    </th>
                                </tr>
                            </table>
                        </div>
                </div>
            </div>
              
            <div  class="col-md-3" style="min-width:  270px; max-width: 380px;"> 
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-header" style="height: 45px;"> 
                        <table style="width: 100%;">
                            <col>
                            <col width="56px;">
                            <tr>
                                <th><h3 class="box-title"><p>MARKETING</p></h3></th>
                                <th>
                                    <a href="#"><img src="/dist/img/icon_close.png" width="21px" style="margin: -12px 7px 0px 0px;"/></a>
                                    <a href="#"><img src="/dist/img/icon_lista.png" width="25px" style="margin: -12px 0px 0px 0px;"/></a>
                                </th>
                            </tr>
                        </table> 
                    </div>

                    <!-- /.box-body -->
                    <div class="box-body no-padding"> 

                    </div>

                    <!-- /.box-footer -->
                        <div class="box-footer" style="padding: 5px;"> 
                            <table style="width: 100%;">
                                <col>
                                <col width="35px;">
                                <tr>
                                    <th></th>
                                    <th>
                                        <a href=""><img src="/dist/img/icon_refresh.png" width="12px" style="margin: -10px 7px 0px 0px;"/></a>
                                        <a href=""><img src="/dist/img/icon_delete.png" width="10px" style="margin: -9px 0px 0px 0px;"/></a>
                                    </th>
                                </tr>
                            </table>
                        </div>
                </div>
            </div>
              
          </div>
          
          <div class="row">

            <div  class="col-md-3" style="min-width:  270px; max-width: 380px;"> 
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-header" style="height: 45px;"> 
                        <table style="width: 100%;">
                            <col>
                            <col width="56px;">
                            <tr>
                                <th><h3 class="box-title"><p>MARKETING</p></h3></th>
                                <th>
                                    <a href="#"><img src="/dist/img/icon_close.png" width="21px" style="margin: -12px 7px 0px 0px;"/></a>
                                    <a href="#"><img src="/dist/img/icon_lista.png" width="25px" style="margin: -12px 0px 0px 0px;"/></a>
                                </th>
                            </tr>
                        </table> 
                    </div>

                    <!-- /.box-body -->
                    <div class="box-body no-padding"> 

                    </div>

                    <!-- /.box-footer -->
                        <div class="box-footer" style="padding: 5px;"> 
                            <table style="width: 100%;">
                                <col>
                                <col width="35px;">
                                <tr>
                                    <th></th>
                                    <th>
                                        <a href=""><img src="/dist/img/icon_refresh.png" width="12px" style="margin: -10px 7px 0px 0px;"/></a>
                                        <a href=""><img src="/dist/img/icon_delete.png" width="10px" style="margin: -9px 0px 0px 0px;"/></a>
                                    </th>
                                </tr>
                            </table>
                        </div>
                </div>
            </div>
              
          </div>
          
    </div>

  </section>
@endsection