@extends('admin.layout.master')

@section('content')


<div class="container"> 
   
     <section class="content1  content">
         
        <ul class="nav nav-tabs" id="myTab" role="tablist" style="height: 65px; background-color: #fff;" >
            <li>
                <div class="miposicion_title">
                ESTADISTICAS
                </div>
            </li>
            <li class="nav-item" style="margin: 12px;">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#restaurantes" role="tab" aria-controls="restaurantes" aria-selected="true">Restaurantes</a>
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
            <div class="tab-pane fade " id="restaurantes" role="tabpanel" aria-labelledby="home-tab">

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
     </section>
 
    <section class="content2 content">

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