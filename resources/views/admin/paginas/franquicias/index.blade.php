@extends('admin.layout.master')

@section('content')

  
      <!-- Main content -->
  <div class="col-md-8">
      <section class="content">
       
        <div class="row">
            <div class="col-md-12">
                  
                <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Franquicias</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th>Nº</th>
                          <th>Nombres</th>
                          <th>Email</th>
                          <th>Pais</th>
                          <th>Fecha</th>
                          <th></th>
                        </tr>
                        </thead>
                        <tbody>
                          @foreach($franquicias as $key => $fran)
                        <tr>
                          <td>{{ $key + 1 }}</td>
                          <td>{{ $fran->names }} </td>
                          <td>{{ $fran->email }}</td>
                          <td> {{ $fran->pais }}</td>
                          <td>{{ $fran->created_at }}</td>
                          <td> <a href="#" class="btn btn-xs btn-primary">Editar</a><a href="#" class="btn btn-xs btn-danger">Eliminar</a></td>
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