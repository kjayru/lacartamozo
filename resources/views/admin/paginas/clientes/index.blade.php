@extends('admin.layout.master')

@section('content')
<section class="content-header">
        <h1>
          Dashboard
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>
  
      <!-- Main content -->
      <section class="content">
       
        <div class="row">
            
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Hover Data Table</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="tblcientes" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>Nº</th>
                      <th>Nombres</th>
                      <th>Email</th>
                      <th>Telefono</th>
                      <th>Foto</th>
                      <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($clientes as $key => $cliente)
                        
                    
                    <tr>
                      <td>{{ $key+1}}</td>
                    <td>{{ $cliente->name }} {{$cliente->lastname }}</td>
                      <td>{{ $cliente->email }}</td>
                      <td>{{ $cliente->telefono }}</td>
                      <td><img src="/storage/images/{{ $cliente->foto }}" width="70"></td>
                      <td>Editar</td>
                    </tr>

                    @endforeach
                    </tbody>
                    
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
          
        </div>
  
      </section>
@endsection