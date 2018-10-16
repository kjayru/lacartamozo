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
                        <th>Task</th>
                        <th>Progress</th>
                        <th style="width: 40px">Label</th>
                      </tr>
                      <tr>
                        <td>1.</td>
                        <td>Update software</td>
                        <td>
                          <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                          </div>
                        </td>
                        <td><span class="badge bg-red">55%</span></td>
                      </tr>
                     
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
                          <th>Task</th>
                          <th>Progress</th>
                          <th style="width: 40px">Label</th>
                        </tr>
                        <tr>
                          <td>1.</td>
                          <td>Update software</td>
                          <td>
                            <div class="progress progress-xs">
                              <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                            </div>
                          </td>
                          <td><span class="badge bg-red">55%</span></td>
                        </tr>
                        
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
                          <th>Task</th>
                          <th>Progress</th>
                          <th style="width: 40px">Label</th>
                        </tr>
                        <tr>
                          <td>1.</td>
                          <td>Update software</td>
                          <td>
                            <div class="progress progress-xs">
                              <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                            </div>
                          </td>
                          <td><span class="badge bg-red">55%</span></td>
                        </tr>
                        
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
                          <th>Task</th>
                          <th>Progress</th>
                          <th style="width: 40px">Label</th>
                        </tr>
                        <tr>
                          <td>1.</td>
                          <td>Update software</td>
                          <td>
                            <div class="progress progress-xs">
                              <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                            </div>
                          </td>
                          <td><span class="badge bg-red">55%</span></td>
                        </tr>
                        
                      </table>
                    </div>
                    <!-- /.box-body -->
                  </div>
                </div>

            </div>
        </div>
  
      </section>
@endsection