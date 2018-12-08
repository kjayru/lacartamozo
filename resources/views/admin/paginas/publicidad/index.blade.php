@extends('admin.layout.master')

@section('content')

<div class="container">
    <div class="content1 content">
  
            <div class="box2">
                <div class="box-header2">
                    <div style="float:left">
                        <h3 class="box-title2">PUBLICIDAD</h3>
                    </div>
                    <div style="float:right; margin-right: 15px;">
                        <button onclick="nuevo_franquiciado" name="" value="ok" style="background-color: #cd853f; margin-top: 5px; width: 180px; height: 36px; font-size: 1.2em; border: 0px;">Agregar Auspiciante</button>
                    </div>
                </div>
                    <!-- /.box-header -->
            <div class="box-body2">
                      <table id="tb-cliente" class="table table-responsive table-hover">
                        <thead style="background-color: #696969; color: #fff;">
                        <tr>
                          <th>Nº</th>
                          <th>Empresa</th>
                          <th>Cliente-Resto</th>
                          <th>Precio</th>
                          <th>Inicio</th>
                          <th>Expiración</th> 
                          <th>Ubicacion</th> 
                          <th>Estado</th> 
                          <th>Imagen</th> 
                        </tr>
                        </thead>
                        <tbody> 
                        </tbody>
                      </table>
                    </div>
              <!-- /.box-body -->
            </div> 

    </div>
    <div class="content2 content">

            <div class="row">
              <div class="col-md-12">
                <div class="box">
                
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
 

@endsection