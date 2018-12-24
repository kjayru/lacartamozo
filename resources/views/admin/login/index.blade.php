@extends('admin.layout.login')

@section('content')
<div class="login-box">

    <div class="login-logo">
      <a href="../../index2.html"><b>{{ env('APP_NAME')}}</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Inicie Sesión</p>
  
      <form action="/admin" method="post">
        @csrf
        <div class="form-group has-feedback">
          <input type="email" class="form-control" placeholder="Email">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
         
          <!-- /.col -->
          <div class="col-xs-12">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
  
      
      
      
    </div>
    <!-- /.login-box-body -->
  </div>

  @endsection

  @include('admin.partial.scripts')