@extends('admin.layout.master')

@section('content')
<div class="container">
    <div class="content1 content" style="background-color: #fafafa;">
  
            <div class="box2">
                <div class="box-header2">
                    <div style="float:left">
                        <h3 class="box-title2">RESERVAS</h3>
                    </div>
                    <div style="float:right; margin-right: 15px;">
                        <button onclick="nuevo_franquiciado" name="" value="ok" style="background-color: #cd853f; margin-top: 5px; width: 180px; height: 36px; font-size: 1.2em; border: 0px;">Nueva Reserva</button>
                    </div>
                </div>
            </div>
              <div class="box2"> 
                <div class="box-header4">
                    PARA EL DIA DE HOY
                </div>
                  
                <div class="box-body2"  style="background-color: #fff;">
                    <table id="tb-cliente" class="table table-responsive table-hover" style="color: #000;">
                        <thead  style="background-color: #ffc057; color: #444;">
                            <tr> 
                              <th width="70px">Id</th>
                              <th>Nombre y Apellido</th>
                              <th>Cant. de Personas</th> 
                              <th>Horario de ingreso</th> 
                              <th>Horario de salida</th> 
                              <th>Celular</th> 
                              <th>Sector</th> 
                              <th>Estado</th> 
                              <th>Puntaje</th> 
                            </tr>
                        </thead>
                            <tbody> 
                            </tbody>
                    </table>
                </div> 
              </div> 
        
              <div class="box2"> 
                <div class="box-header4">
                    PARA MAÑANA
                </div>
                  
                <div class="box-body2"  style="background-color: #fff;">
                    <table id="tb-cliente" class="table table-responsive table-hover" style="color: #000;">
                        <thead  style="background-color: #adff2f; color: #444;">
                            <tr> 
                              <th width="70px">Id</th>
                              <th>Nombre y Apellido</th>
                              <th>Cant. de Personas</th> 
                              <th>Horario de ingreso</th> 
                              <th>Horario de salida</th> 
                              <th>Celular</th> 
                              <th>Sector</th> 
                              <th>Estado</th> 
                              <th>Puntaje</th> 
                            </tr>
                        </thead>
                            <tbody> 
                            </tbody>
                    </table>
                </div> 
              </div> 
        
              <div class="box2"> 
                <div class="box-header4">
                    PARA EL MIERCOLES 22 DE MAYO
                </div>
                  
                <div class="box-body2"  style="background-color: #fff;">
                    <table id="tb-cliente" class="table table-responsive table-hover" style="color: #000;">
                        <thead  style="background-color: #ffc057; color: #444;">
                            <tr> 
                              <th width="70px">Id</th>
                              <th>Nombre y Apellido</th>
                              <th>Cant. de Personas</th> 
                              <th>Horario de ingreso</th> 
                              <th>Horario de salida</th> 
                              <th>Celular</th> 
                              <th>Sector</th> 
                              <th>Estado</th> 
                              <th>Puntaje</th> 
                            </tr>
                        </thead>
                            <tbody> 
                            </tbody>
                    </table>
                </div> 
              </div> 
        
              <div class="box2"> 
                <div class="box-header4">
                    PARA EL VIERNES 25 DE MAYO
                </div>
                  
                <div class="box-body2"  style="background-color: #fff;">
                    <table id="tb-cliente" class="table table-responsive table-hover" style="color: #000;">
                        <thead  style="background-color: #adff2f; color: #444;">
                            <tr> 
                              <th width="70px">Id</th>
                              <th>Nombre y Apellido</th>
                              <th>Cant. de Personas</th> 
                              <th>Horario de ingreso</th> 
                              <th>Horario de salida</th> 
                              <th>Celular</th> 
                              <th>Sector</th> 
                              <th>Estado</th> 
                              <th>Puntaje</th>  
                            </tr>
                        </thead>
                            <tbody> 
                            </tbody>
                    </table>
                </div> 
              </div> 
        
              <div class="box2"> 
                <div class="box-header4">
                    PARA EL JUEVES 5 DE JUNIO
                </div>
                  
                <div class="box-body2"  style="background-color: #fff;">
                    <table id="tb-cliente" class="table table-responsive table-hover" style="color: #000;">
                        <thead  style="background-color: #ffc057; color: #444;">
                            <tr> 
                              <th width="70px">Id</th>
                              <th>Nombre y Apellido</th>
                              <th>Cant. de Personas</th> 
                              <th>Horario de ingreso</th> 
                              <th>Horario de salida</th> 
                              <th>Celular</th> 
                              <th>Sector</th> 
                              <th>Estado</th> 
                              <th>Puntaje</th> 
                            </tr>
                        </thead>
                            <tbody> 
                            </tbody>
                    </table>
                </div> 
              </div> 
        
              <div class="box2"> 
                <div class="box-header4">
                    PARA EL DOMINGO 8 DE JUNIO
                </div>
                  
                <div class="box-body2"  style="background-color: #fff;">
                    <table id="tb-cliente" class="table table-responsive table-hover" style="color: #000;">
                        <thead  style="background-color: #adff2f; color: #444;">
                            <tr> 
                              <th width="70px">Id</th>
                              <th>Nombre y Apellido</th>
                              <th>Cant. de Personas</th> 
                              <th>Horario de ingreso</th> 
                              <th>Horario de salida</th> 
                              <th>Celular</th> 
                              <th>Sector</th> 
                              <th>Estado</th> 
                              <th>Puntaje</th> 
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
 
@endsection