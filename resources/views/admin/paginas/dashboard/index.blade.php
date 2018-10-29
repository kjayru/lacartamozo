@extends('admin.layout.master')

@section('content')

  
      <!-- Main content -->
      <section class="content">
       
        <div class="row">
          
            <div class="col-md-3">
                    
                  <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">FRANQUICIADOS</h3>
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
                </div>

                </div>

              <div class="col-md-3">
                    
                    <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">MOZOS - MESAS - MIGRACIONES</h3>
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
                  </div>
                </div>



                <div class="col-md-3">
                    
                    <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">DELIVERY</h3>
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
                  </div>
                </div>




                  <div class="col-md-3">
                    
                    <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">PRODUCTOS</h3>
                    </div>
                    <!-- /.box-header -->
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
                    <!-- /.box-body -->
                  </div>
                </div>

            </div>
        </div>
  
      </section>
@endsection