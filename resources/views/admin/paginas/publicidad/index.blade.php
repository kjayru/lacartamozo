@extends('admin.layout.master')

@section('content')

<section class="content" style="padding-right: 0px; background-color: #f7f7f7;">
     
<div id="wrappermini">
    <div id="one" >  
    
        <!-- /.box-header -->
         <nav class="navbar navbar-inverse" style="margin: 0px; padding: 0px; background-color: #555;">
              <div class="container-fluid" style="margin: 0px; padding: 0px;">
                <div class="navbar-header" style="margin: 0px; padding: 0px;">
                  <a class="navbar-brand" href="#" style="margin-left:8px; color: #fff;" >PUBLICIDAD</a>
                </div>   
                <button class="btn btn-warning navbar-btn navbar-right " onclick="nuevaReserva()"  style="margin-right: 12px;">Agregar Auspiciante</button> 
              </div>
		</nav> 
		
        <div class="box2" style="margin: 0; padding: 0; padding-bottom: 25px; background-color: #fff;">
             
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
    
    <div id="two" >  
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

    var titulo_seccion = document.getElementById("titulo_seccion");
    titulo_seccion.innerHTML = "PUBLICIDAD";
</script>
 

@endsection