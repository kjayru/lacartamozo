@extends('admin.layout.master')

@section('content')

<section class="content" style="width:100%; position: relative; padding: 0px;"> 
    
        <ul class="nav nav-tabs" id="myTab" role="tablist" style="height: 43px;" >
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#cupones" role="tab" aria-controls="cupones" aria-selected="true">Cupones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#regalos" role="tab" aria-controls="regalos" aria-selected="false">Regalos</a>
            </li> 
        </ul>
        <div class="tab-content" id="myTabContent" style="padding: 0px;">
            <div class="tab-pane fade " id="cupones" role="tabpanel" aria-labelledby="home-tab"  style="background-color: #fafafa;">

                <div class="container">
                    <div class="content1 content"> 
                        <div class="panel">
                            

                            <div class="box2">
                                <div class="box-header2">
                                    <div style="float:left">
                                        <h3 class="box-title2">CUPONES</h3>
                                    </div>
                                    <div style="float:right; margin-right: 15px;">
                                        <button onclick="nuevo_franquiciado" name="" value="ok" style="background-color: #cd853f; margin-top: 5px; width: 180px; height: 36px; font-size: 1.2em; border: 0px;">Crear Cupón</button>
                                    </div>
                                </div>
                                    <!-- /.box-header -->
                                <div class="box-body2">
                                      <table id="tb-cliente" class="table table-responsive table-hover">
                                        <thead style="background-color: #696969; color: #fff;">
                                        <tr>
                                          <th>Id</th>
                                          <th>Foto</th>
                                          <th>Titulo</th>
                                          <th>Promo</th>
                                          <th>Producto</th>
                                          <th>Condiciones</th>
                                          <th>Resto-Bar</th>
                                          <th>Estado</th>
                                        </tr>
                                        </thead>
                                        <tbody> 
                                        </tbody>
                                      </table>
                                </div> 
                            </div> 
                            

                        </div> 
                    </div>
                    <div class="content2 content">
                        
                        <div class="panel">

                            <div class="row">
                              <div class="col-md-12">
                                <div class="box">
                                    <form class="form-horizontal" id="fr-cliente">
                                      <fieldset>

                                      <!-- Form Name -->
                                      <legend>Datos</legend>

                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="nombre">Nombres</label>  
                                        <div class="col-md-7">
                                        <input id="nombre" name="nombre" type="text" placeholder="nombres" class="form-control input-md">

                                        </div>
                                      </div>

                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="Apellidos">Apellidos</label>  
                                        <div class="col-md-7">
                                        <input id="apellidos" name="apellidos" type="text" placeholder="Apellidos" class="form-control input-md">

                                        </div>
                                      </div>

                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="email">Email</label>  
                                        <div class="col-md-7">
                                        <input id="email" name="email" type="text" placeholder="Email" class="form-control input-md">

                                        </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-md-4 control-label" for="email">Telefono</label>  
                                          <div class="col-md-7">
                                          <input id="telefono" name="telefono" type="text" placeholder="Telefono" class="form-control input-md">

                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-md-4 control-label" for="email">Edad</label>  
                                          <div class="col-md-7">
                                          <input id="edad" name="edad" type="text" placeholder="Edad" class="form-control input-md">

                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-md-4 control-label" for="email">Sexo</label>  
                                          <div class="col-md-7">
                                          <input id="sexo" name="sexo" type="text" placeholder="Sexo" class="form-control input-md">

                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <label class="col-md-4 control-label" for="email">Avatar</label>  
                                          <div class="col-md-7">
                                          <input id="avatar" name="avatar" type="file"  class="form-control input-md">

                                          </div>
                                      </div>
                                      <div>

                                        <div class="avatar">
                                            <img src="" class="img-thumbnail" id="imgAvatar" width="204" height="136"> 
                                        </div>

                                      </div>


                                      <!-- Button -->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="btn-save"></label>
                                        <div class="col-md-7">
                                          <button id="btn-save" name="btn-save" class="btn btn-primary">Guardar</button>
                                        </div>
                                      </div>

                                      </fieldset>
                                      </form>


                                </div>
                              </div>
                          </div>
        
                            
                            
                            
                        </div>
                        
                    </div>
                </div>
                
            </div>
            
            <div class="tab-pane fade" id="regalos" role="tabpanel" aria-labelledby="profile-tab" style="background-color: #fafafa;">
                
                <div class="container">
                    <div class="content1 content">


                            <div class="box2">
                                <div class="box-header2">
                                    <div style="float:left">
                                        <h3 class="box-title2">REGALOS</h3>
                                    </div>
                                    <div style="float:right; margin-right: 15px;">
                                        <button onclick="nuevo_franquiciado" name="" value="ok" style="background-color: #cd853f; margin-top: 5px; width: 180px; height: 36px; font-size: 1.2em; border: 0px;">Crear Regalo</button>
                                    </div>
                                </div>
                                    <!-- /.box-header -->
                                <div class="box-body2">
                                      <table id="tb-cliente" class="table table-responsive table-hover">
                                        <thead style="background-color: #696969; color: #fff;">
                                        <tr>
                                          <th>Id</th>
                                          <th>Foto</th>
                                          <th>Titulo</th>
                                          <th>Puntos</th>
                                          <th>Producto</th>
                                          <th>Condiciones</th>
                                          <th>Resto-Bar</th>
                                          <th>Estado</th>
                                          <th></th>
                                        </tr>
                                        </thead>
                                        <tbody> 
                                        </tbody>
                                      </table>
                                    </div> 
                            </div> 
                    </div>
                    <div class="content2 content">

                            <div class="row">
                              <div class="col-md-12">
                                <div class="box">
                                    <form class="form-horizontal" id="fr-cliente">
                                         <fieldset>

                                         <!-- Form Name -->
                                         <legend>Datos</legend>

                                         <!-- Text input-->
                                         <div class="form-group">
                                           <label class="col-md-4 control-label" for="nombre">Nombres</label>  
                                           <div class="col-md-7">
                                           <input id="nombre" name="nombre" type="text" placeholder="nombres" class="form-control input-md">

                                           </div>
                                         </div>

                                         <!-- Text input-->
                                         <div class="form-group">
                                           <label class="col-md-4 control-label" for="Apellidos">Apellidos</label>  
                                           <div class="col-md-7">
                                           <input id="apellidos" name="apellidos" type="text" placeholder="Apellidos" class="form-control input-md">

                                           </div>
                                         </div>

                                         <!-- Text input-->
                                         <div class="form-group">
                                           <label class="col-md-4 control-label" for="email">Email</label>  
                                           <div class="col-md-7">
                                           <input id="email" name="email" type="text" placeholder="Email" class="form-control input-md">

                                           </div>
                                         </div>
                                         <div class="form-group">
                                             <label class="col-md-4 control-label" for="email">Telefono</label>  
                                             <div class="col-md-7">
                                             <input id="telefono" name="telefono" type="text" placeholder="Telefono" class="form-control input-md">

                                             </div>
                                         </div>

                                         <div class="form-group">
                                             <label class="col-md-4 control-label" for="email">Edad</label>  
                                             <div class="col-md-7">
                                             <input id="edad" name="edad" type="text" placeholder="Edad" class="form-control input-md">

                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label class="col-md-4 control-label" for="email">Sexo</label>  
                                             <div class="col-md-7">
                                             <input id="sexo" name="sexo" type="text" placeholder="Sexo" class="form-control input-md">

                                             </div>
                                         </div>

                                         <div class="form-group">
                                             <label class="col-md-4 control-label" for="email">Avatar</label>  
                                             <div class="col-md-7">
                                             <input id="avatar" name="avatar" type="file"  class="form-control input-md">

                                             </div>
                                         </div>
                                         <div>

                                           <div class="avatar">
                                               <img src="" class="img-thumbnail" id="imgAvatar" width="204" height="136"> 
                                           </div>

                                         </div>


                                         <!-- Button -->
                                         <div class="form-group">
                                           <label class="col-md-4 control-label" for="btn-save"></label>
                                           <div class="col-md-7">
                                             <button id="btn-save" name="btn-save" class="btn btn-primary">Guardar</button>
                                           </div>
                                         </div>

                                         </fieldset>
                                         </form>


                                   </div>
                                 </div>
                             </div>

                        
                    </div>
                </div>
            </div>
        </div>
    
</section>
@endsection