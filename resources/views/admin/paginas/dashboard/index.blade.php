@extends('admin.layout.master')

@section('content')

  
      <!-- Main content -->
      <section class="content">
          </br></br></br>
        <div class="row">
          
            <div class="col-md-3">
                    
                  <div class="box">
                  <div class="box-header" style="height: 37px;">
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

            <div class="col-md-3">
                    
                    <div class="box">
                        <div class="box-header" style="height: 37px;">
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



            <div class="col-md-3">
                    
                    <div class="box">
                    <div class="box-header" style="height: 37px;"> 
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




            <div class="col-md-3">

                        <div class="box">
                        <!-- /.box-header -->
                        <div class="box-header" style="height: 37px;"> 
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

            <div class="col-md-3"> 
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-header" style="height: 37px;"> 
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
              
            <div class="col-md-3"> 
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-header" style="height: 37px;"> 
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
              
            <div class="col-md-3"> 
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-header" style="height: 37px;"> 
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
              
            <div class="col-md-3"> 
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-header" style="height: 37px;"> 
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

            <div class="col-md-3"> 
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-header" style="height: 37px;"> 
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