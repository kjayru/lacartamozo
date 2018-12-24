@extends('admin.layout.master')

@section('content')

<section class="content" style="padding-right: 0px; background-color: #f7f7f7;">
     
<div id="wrappermini">
    <div id="one" style="margin: 0px; padding: 0px; ">  
        <div class="box2" style="margin: 0; padding: 0; padding-bottom: 25px; background-color: #fff;">
            
            <!-- /.box-header -->
            <div class="box-header2" style="min-width: 300px; background-color: #696969; height: 55px;">
                <h3 style="margin: 0; padding: 0; width: 190px; float: left;">PUBLICIDAD</h3> 
                <div style="float:left; margin-right: 15px; margin: 0; padding: 0; float: right;">
                    <button  class="hidden-xs" onclick="addAuspiciante()" name="" value="ok" style="background-color: #cd853f; margin-top: -2px; min-width: 140px; height: 36px; font-size: 1.1em; border: 0px;">Agregar Auspiciante</button>
                </div>
            </div>
            
            <!-- /.box-body --> 
            <div id="body_pedidos" class="box-body" style=" padding: 0; margin: 0; height: 840px; overflow-y: auto;">   
                <table id="tb-cliente0" class="table table-responsive table-hover">
                        <thead style="background-color: #696969; color: #fff;">
                        <tr>
                          <th style="width: 80px;">Nº</th>
                          <th style="width: 140px;">Empresa</th>
                          <th>Cliente-Resto</th>
                          <th>Precio</th>
                          <th>Inicio</th>
                          <th>Expiración</th> 
                          <th>Ubicacion</th> 
                          <th>Estado</th> 
                          <th style="width: 170px;">Imagen</th> 
                        </tr>
                        </thead>
                        <tbody> 
                        </tbody>
                      </table>
            </div>
        </div>
    </div>
    
    <div id="two" style="padding: 0px;">  
            <div classss="row" style="padding: 0px; margin: 0px;">
                <div class="col-md-12" style="padding: 0px;">
                  <div class="box" style="background-color: #fff; padding: 8px;">
                
                    <!-- Form Name -->
                    <legend style="background-color: #6a5acd; margin: 0px; padding-left: 15px; color:#fff; height: 45px; padding-top: 4px;">COMENTARIOS APROBADOS</legend>
  
                    <form class="form-horizontal" id="fr-cliente">
                      <fieldset>
                      
                      <!-- Form Name -->
                      <legend>Nuevo Auspiciante</legend>
                      
                      <!-- Text input-->
                      <div class="form-group">
                        <label class="col-md-4 control-label" for="nombre">Titulo</label>  
                        <div class="col-md-7">
                        <input id="nombre" name="titulo" type="text" placeholder="nombres" class="form-control input-md">
                          
                        </div>
                      </div>
                      
                      <!-- Text input-->
                      <div class="form-group">
                        <label class="col-md-4 control-label" for="Apellidos">Descripcion</label>  
                        <div class="col-md-7">
                        <input id="apellidos" name="descripcion" type="text" placeholder="Apellidos" class="form-control input-md">
                          
                        </div>
                      </div>
                      
                      <!-- Text input-->
                      <div class="form-group">
                        <label class="col-md-4 control-label" for="email">Precio</label>  
                        <div class="col-md-7">
                        <input id="email" name="precio" type="text" placeholder="Email" class="form-control input-md">
                          
                        </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-4 control-label" for="email">Precio Promocion</label>  
                          <div class="col-md-7">
                          <input id="telefono" name="precio_prom" type="text" placeholder="Telefono" class="form-control input-md">
                            
                          </div>
                      </div>
                      
                      <div class="form-group">
                          <label class="col-md-4 control-label" for="email">Tipo</label>  
                          <div class="col-md-7">
                              <select name="tipo">
                                  <option value="days">Days</option>
                              </select> 
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-4 control-label" for="email">Expiration (no. of days of Year)</label>  
                          <div class="col-md-7">
                          <input id="sexo" name="sexo" type="text" placeholder="" class="form-control input-md">
                            
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-4 control-label" for="email">Uso</label>  
                          <div class="col-md-7">
                              <select name="uso">
                                  <option value="Sin limite">Sin limite</option>
                              </select> 
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-4 control-label" for="email">Number of Food item Can Add</label>  
                          <div class="col-md-7">
                          <input id="sexo" name="num_food_item" type="text" placeholder="" class="form-control input-md">
                            
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-4 control-label" for="email">Limit merchant by sell</label>  
                          <div class="col-md-7">
                          <input id="sexo" name="limit" type="text" placeholder="" class="form-control input-md"> per mounth
                          </div>
                      </div> 
                      <div class="form-group">
                          <label class="col-md-4 control-label" for="email">Estado</label>  
                          <div class="col-md-7">
                          <input id="sexo" name="estado" type="text" placeholder="" class="form-control input-md">
                            
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


</section>   
@include('admin.partial.scripts')

<script> 
    $(document).ready(function(){   

        $("#tb-cliente0").DataTable({
          "paging": true
        }); 
        $('.dataTables_length').addClass('bs-select'); 
    
    });
</script>
 

@endsection