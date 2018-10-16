@extends('admin.layout.master')

@section('content')
<div class="col-md-7">

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
            <div class="col-md-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">CLIENTES</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="tb-cliente" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>Nº</th>
                      <th>Nombres</th>
                      <th>Email</th>
                      <th>Telefono</th>
                      <th>Avatar</th>
                      <th>Fecha</th>
                      <th></th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($users as $key => $user)
                    <tr>
                      <td>{{ $key + 1 }}</td>
                      <td>{{ $user->name }} </td>
                      <td>{{ $user->email }}</td>
                      <td> {{ $user->telefono }}</td>
                      <td><img src="{{ $user->foto }}" width="80"></td>
                      <td>{{ $user->created_at }}</td>
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

    <div class="col-md-5" id="detalle">
        <h2>Detalle</h2>
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
    </div>
 @endsection