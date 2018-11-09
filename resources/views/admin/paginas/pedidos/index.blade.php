@extends('admin.layout.master')

@section('content')


<div class="container">
    <div class="content1 content">
  
            <div class="box2">
                <div class="box-header2">
                    <div style="float:left">
                        <h3 class="box-title2">PEDIDOS</h3>
                    </div>
                    <div style="float:right; margin-right: 15px;">
                        <button onclick="nuevo_franquiciado" name="" value="ok" style="background-color: #cd853f; margin-top: 5px; width: 180px; height: 36px; font-size: 1.2em; border: 0px;">Nuevo Franquiciado</button>
                    </div>
                </div>
              <!-- /.box-header -->
            <div class="box-body2">
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
    <div class="content2 content">

            <div class="row">
              <div class="col-md-12">
                <div class="box">

                  <form class="form-horizontal" id="fr-franchise">
                    <fieldset>
                    
                      <div class="form-group">

                      </div>

                    </form>


                </div>
              </div>
          </div>
        
    </div>
</div>

 

@endsection