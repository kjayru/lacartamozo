@extends('admin.layout.master')

@section('content')


<div class="col-md-8"> 
    <!-- Main content -->
    
    <section class="content">
    
      <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">PEDIDOS</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body padleft30">
                <table id="tb-cliente" class="table table-responsive table-hover">
                  <thead>
                  <tr>
                    <th>Nº</th>
                    <th>Pedido</th>
                    <th>Restaurant</th>
                    <th>Cliente</th>
                    <th>Fecha</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($pedidos as $key => $pedido)
                  <tr>
                    <th>{{ $key + 1 }}</th>
                    <td>{{ $pedido->pedido }} </td>
                    <td>
                      
                      {{ $pedido->restaurantdetails }}
                    </td>
                    <td>
                      {{ $pedido->customerdetails }}
                    </td>
                    
                    <td>{{ $pedido->created_at }}</td>
                    <td> <a href="#" class="btn btn-xs btn-primary btn-editar">Editar</a><a href="#" class="btn btn-xs btn-danger btn-eliminar">Eliminar</a></td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
          </div>
      </div>

    </section>

</div>

<div class="col-md-4" id="detalle">
<section class="content">
  
    <div class="row">
      <div class="col-md-12">
        <div class="box">
            <form action="" class="form">
              <div class="form-group">

              </div>

            </form>
          
          
        </div>
      </div>
  </div>
</section>
</div>



@endsection