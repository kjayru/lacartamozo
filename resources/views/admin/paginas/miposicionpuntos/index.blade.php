@extends('admin.layout.master')

@section('content')

<section class="content" style="padding-right: 0px; background-color: #f7f7f7;">

<div id="wrappermini">
    <div id="one" style="margin: 0px; padding: 0px; width: 1200px;">  

        <ul class="nav nav-tabs" id="myTab" role="tablist" style="height: 65px; background-color: #fff;  margin:0 auto;" >
            <li>
                <div class="miposicion_title">
                ESTADISTICAS
                </div>
            </li>
            <li class="nav-item active" style="margin: 12px;">
              <a class="nav-link" id="home-tab" data-toggle="tab" href="#restaurantes" role="tab" aria-controls="restaurantes" aria-selected="true">Restaurantes</a>
            </li>
            <li class="nav-item" style="margin: 12px;">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#cervecerias" role="tab" aria-controls="cervecerias" aria-selected="false">Cervecerias</a>
            </li>
            <li class="nav-item" style="margin: 12px;">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#parrillas" role="tab" aria-controls="parrillas" aria-selected="false">Parrillas</a>
            </li>
            <li class="nav-item" style="margin: 12px;">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#comidasrap" role="tab" aria-controls="comidasrap" aria-selected="false">Comidas Rapidas</a>
            </li>
             <li>
                 <div class="miposicion_celulares_activos">
                6220 Celulares activados
                </div>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade active in" id="restaurantes" role="tabpanel" aria-labelledby="home-tab">

                <div id="add_box" style="padding: 0;">
                        <!-- /.box-header -->
                    <div class="box-body2">
                          <table id="tb-cliente" class="table table-responsive table-hover" style="background-color: #d3d3d3; color: #000;">
                            <thead >
                            <tr>
                              <th></th>
                              <th width="70px">Posicion</th>
                              <th width="90px">Puntos</th>
                              <th width="280px">Comercios</th> 
                            </tr>
                            </thead>
                            <tbody> 
                            </tbody>
                          </table>
                        </div>
                  <!-- /.box-body -->
                </div> 
                
                
            </div>
            <div class="tab-pane fade" id="cervecerias" role="tabpanel" aria-labelledby="profile-tab">

              <div class="box2"> 
                        <!-- /.box-header -->
                <div class="box-body2">
                          <table id="tb-cliente" class="table table-responsive table-hover" style="background-color: #d3d3d3; color: #000;">
                            <thead >
                            <tr>
                              <th></th>
                              <th width="70px">Posicion</th>
                              <th width="90px">Puntos</th>
                              <th width="280px">Comercios</th> 
                            </tr>
                            </thead>
                            <tbody> 
                            </tbody>
                          </table>
                        </div>
                  <!-- /.box-body -->
                </div> 
                
            </div>
            <div class="tab-pane fade" id="parrillas" role="tabpanel" aria-labelledby="contact-tab">
                
              <div class="box2"> 
                        <!-- /.box-header -->
                <div class="box-body2">
                          <table id="tb-cliente" class="table table-responsive table-hover" style="background-color: #d3d3d3; color: #000;">
                            <thead >
                            <tr>
                              <th></th>
                              <th width="70px">Posicion</th>
                              <th width="90px">Puntos</th>
                              <th width="280px">Comercios</th> 
                            </tr>
                            </thead>
                            <tbody> 
                            </tbody>
                          </table>
                        </div>
                  <!-- /.box-body -->
                </div> 
                
            </div>
            <div class="tab-pane fade" id="comidasrap" role="tabpanel" aria-labelledby="contact-tab">
                
              <div class="box2"> 
                        <!-- /.box-header -->
                <div class="box-body2">
                          <table id="tb-cliente" class="table table-responsive table-hover" style="background-color: #d3d3d3; color: #000;">
                            <thead >
                            <tr>
                              <th></th>
                              <th width="70px">Posicion</th>
                              <th width="90px">Puntos</th>
                              <th width="280px">Comercios</th> 
                            </tr>
                            </thead>
                            <tbody> 
                            </tbody>
                          </table>
                        </div>
                  <!-- /.box-body -->
                </div> 
                
            </div>
        </div>
        
    </div>
    <div id="two" style="padding: 0px;">  
         <div class="row">
          <div class="col-md-12" >
            <div class="box"> 
                
                <form class="form-horizontal" id="fr-franchise"> 
                <div class="row" style="padding: 2px; margin: 0px;">
                    <div class="col-md-12" style="padding: 0px;">
                      <div class="box" style="background-color: #fff; padding: 0px;">

                              <fieldset>

                                <!-- Form Name -->
                                <legend style="background-color: #6a5acd; margin: 0px; padding-left: 15px; color:#fff; height: 55px;"></legend>
 
                                <!-- form-group -->
                                <div class="form-group" id="content_add_mozo_mesa"> 
                                </div>  
                                <!-- /.form-group -->
                              </fieldset>
                        </div>
                      </div>
                  </div>
                </form>
 
            </div>
          </div>
        </div> 
    </div>
</div>
     

      
<script>
    var two = document.getElementById("two").hidden = true;   
    $(document).ready(function(){         
        $('#dtBasicExample').DataTable({
          "paging": true
        });
        $('.dataTables_length').addClass('bs-select');
    });
</script>

 
@endsection