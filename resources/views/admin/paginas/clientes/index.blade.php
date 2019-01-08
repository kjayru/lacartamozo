@extends('admin.layout.master')

@section('content')
 
<section class="content" style="padding: 0px; background-color: #f7f7f7;">
     
<div id="wrappermini">
    <div id="one"> 
    
        <!-- /.box-header -->
         <nav class="navbar navbar-inverse" style="margin: 0px; padding: 0px; background-color: #555;">
              <div class="container-fluid" style="margin: 0px; padding: 0px;">
                <div class="navbar-header" style="margin: 0px; padding: 0px;">
                  <a class="navbar-brand" href="#" style="margin-left:8px; color: #fff;" >CLIENTES DE FRANQUICIADO</a>
                </div>  
                <button class="btn btn-warning navbar-btn navbar-right " onclick="nuevo_cliente"  style="margin-right: 12px;">Nuevo Cliente</button>
              </div>
		</nav> 
			
        <div class="box2" style="margin: 0; padding: 0; padding-bottom: 25px; background-color: #fff;">
 
            <!-- /.box-body -->
            <div class="box-body" style=" padding: 0;margin: 0; height: 800px; min-width: 150px;"> 
                          
                <table id="dtBasicExample"  class="table table-responsive table-striped" style="margin-top: -1px; "> 
                    <thead style="background-color: #696969; color: #fff;" class="header12">
                    <tr style=" height: 45px;">
                      <th width="40px;" style="padding-left: 15px;">#</th>
                      <th width="280px;">Imagen</th>
                      <th width="200px;">Nombre</th>
                      <th width="140px;">Dirección</th>
                      <th width="90px;" class="hidden-xs">Ciudad</th>
                      <th width="140px;" class="hidden-xs">Provincia</th>
                      <th width="140px;">Celular</th>
                      <th width="90px;">Opciones</th>
                      <th width="90px;">Estado</th>
                    </tr>
                    </thead>
                    <tbody >
                      @foreach($clients as $key => $client)
                    <tr>
                      <td align="center">{{ $key + 1 }}</th>
                      <td><img src="/storage/{{ $client->cover }}"  width="40" alt=""> </td>
                      <td>{{ $client->name }}</td>
                      <td> {{ $client->address }}</td>
                      <td class="hidden-xs">{{ $client->city }}</td>
                      <td class="hidden-xs">{{ $client->province }}</td>
                      <td class="hidden-xs">{{ $client->cellphone }}</td>
                     
                      <td> <a href="#" class="btn btn-xs btn-primary btn-editar btn-cliente-edit" data-id="{{ $client->id }}">Editar</a><a href="#" class="btn btn-xs btn-danger btn-eliminar">Eliminar</a></td>
                      <td>
                        <label class="switch"> 
                            <input type="checkbox"/>
                            <span class="slider round"></span>
                        </label>
                      </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table> 

                {{ $clients->render() }}
            </div>
            <!-- /.end box-body -->
        </div>
 
    </div>
    <div id="two">
 
        <form class="form-horizontal" id="fr-franchise"> 
        <div class="row" style="padding: 2px; margin: 0px;">
            <div class="col-md-12" style="padding: 0px;">
              <div class="box" style="background-color: #fff; padding: 0px;">
 
                      <fieldset>

                        <!-- Form Name -->
                        <legend style="background-color: #6a5acd; margin: 0px; padding-left: 15px; color:#fff; height: 55px;"></legend>

                        <div class="btn-group" >
                            <!-- 1 es id de la carta-->
                            <button onclick="goMozos(1)" type="button" class="btn btn-primary" style="background-color:#7700ff; ">Mozos y Mesas</button>
                            <button onclick="goCarta(1)" type="button" class="btn btn-primary" style="background-color:#77aa00; ">La Carta</button>
                        </div>
                        
                        <!-- form-group -->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="nombre">Nombres y Apellidos</label>  
                            <div class="col-md-8">
                            <input id="nombre" name="nombre" style="background-color: #e5e5e5;" type="text" placeholder="Nombres y apellidos" class="form-control input-md">                        
                            </div> 

                            <label class="col-md-3 control-label" for="Apellidos">Direccion</label>  
                            <div class="col-md-8">
                            <input id="apellidos" name="apellidos" style="background-color: #e5e5e5;" type="text" placeholder="Direccion" class="form-control input-md">
                            </div> 

                            <label class="col-md-3 control-label" for="Apellidos">Ciudad</label>  
                            <div class="col-md-8">
                            <input id="ciudad" name="apellidos" style="background-color: #e5e5e5;" type="text" placeholder="Ciudad" class="form-control input-md">
                            </div> 

                            <label class="col-md-3 control-label" for="Apellidos">Pais</label>  
                            <div class="col-md-8">
                            <input id="provincias" name="apellidos" style="background-color: #e5e5e5;" type="text" placeholder="Provincia" class="form-control input-md">
                            </div> 

                            <label class="col-md-3 control-label" for="Apellidos">Celular</label>  
                            <div class="col-md-8">
                            <input id="celular" name="apellidos" style="background-color: #e5e5e5;" type="text" placeholder="Celular" class="form-control input-md">
                            </div> 

                            <label class="col-md-3 control-label" for="Apellidos">Mail</label>  
                            <div class="col-md-8">
                            <input id="celular" name="apellidos" style="background-color: #e5e5e5;" type="text" placeholder="Celular" class="form-control input-md">
                            </div> 

                            <label class="col-md-3 control-label" for="Apellidos">Alta</label>  
                            <div class="col-md-8">
                            <input id="celular" name="apellidos" style="background-color: #e5e5e5;" type="text" placeholder="Celular" class="form-control input-md">
                            </div> 

                            <label class="col-md-3 control-label" for="email">Paquete</label>  
                            <div class="col-md-8">
                                <select style="background-color: #e5e5e5;" class="form-control input-md" name="email">
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                </select>
                            </div> 
 
                            <label class="col-md-3 control-label" for="estado">Franquiciado</label>
                            <div class="col-md-8">
                              <select id="estado" name="estado" style="background-color: #e5e5e5;" class="form-control">
                                <option value="1">Option one</option>
                              </select>
                            </div> 
                            
                            <label class="col-md-3 control-label" for="estado">Vendedor</label>
                            <div class="col-md-8">
                              <select id="estado" name="estado" style="background-color: #e5e5e5;" class="form-control">
                                <option value="1">Option one</option>
                              </select>
                            </div> 
 
                            <label class="control-label" style="padding-left: 15px;"  for="btn-save">Logo</label> 
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        Browse… <input type="file" id="imgInpLogo">
                                    </span>
                                </span>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <img id='img-upload_logo' style="padding: 15px; width: 100%;"/>
                             
                            <label class="control-label" style="padding-left: 15px;"  for="btn-save">Imagen de franquiciado</label> 
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        Browse… <input type="file" id="imgInpFranquiciado">
                                    </span>
                                </span>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <img id='img-upload_franquiciado' style="padding: 15px; width: 100%;"/>
                            
                            <div id="googleMap" style=" height:350px; margin: 5px; padding: 5px;"></div>
                             
                        </div>  
                        <!-- /.form-group -->
                      </fieldset>
                </div>
              </div>
          </div>

        <div class="row" style="padding: 2px; margin: 0px;">
            <div class="col-md-12" style="padding: 0px;">
              <div class="box" style="background-color: #fff; padding: 0px;"> 
                      <fieldset>

                        <!-- Form Name -->
                        <legend style="background-color: #6a5acd; margin: 0px; padding-left: 15px; color:#fff; height: 55px;">FOTOS</legend>

                            <label class="control-label" style="padding-left: 15px; width: 100%;"  for="btn-save">Foto 1</label> 
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        Browse… <input type="file" id="imgInpF1">
                                    </span>
                                </span>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <img id='img-upload_f1' style="padding: 15px; width: 100%;"/>
                            
                            <label class="control-label" style="padding-left: 15px;"  for="btn-save">Foto 2</label> 
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        Browse… <input type="file" id="imgInpF2">
                                    </span>
                                </span>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <img id='img-upload_f2' style="padding: 15px; width: 100%;"/>
                            
                            <label class="control-label" style="padding-left: 15px;"  for="btn-save">Foto 3</label> 
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        Browse… <input type="file" id="imgInpF3">
                                    </span>
                                </span>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <img id='img-upload_f3' style="padding: 15px; width: 100%;"/>
                            
                            <label class="control-label" style="padding-left: 15px;"  for="btn-save">Foto 4</label> 
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        Browse… <input type="file" id="imgInpF4">
                                    </span>
                                </span>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <img id='img-upload_f4' style="padding: 15px; width: 100%;"/>
                            
                        
                      </fieldset>                  
              </div>
            </div>
        </div> 

        <div class="row" style="padding: 2px; margin: 0px;">
            <div class="col-md-12" style="padding: 0px;">
              <div class="box" style="background-color: #fff; padding: 0px;">
 
                      <fieldset>

                        <!-- Form Name -->
                        <legend style="background-color: #6a5acd; margin: 0px; padding-left: 15px; color:#fff; height: 55px;">CONFIGURACIONES</legend>

                        <table>
                            <tbody>
                                <tr>
                                    <td>                                        
                                        <div>
                                            <label style="width: 150px;" for="check_delivery">Delivery</label>  
                                            <label class="switch">
                                                <input type="checkbox" name="check_delivery"/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <label style="width: 150px;" for="check_mozo">Mozo</label>
                                            <label class="switch">
                                                <input type="checkbox" name="check_mozo"/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>                                        
                                        <div>
                                            <label style="width: 150px;">Promociones</label>
                                            <label class="switch">
                                                <input type="checkbox"/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <label style="width: 150px;">Sistema de puntos</label>
                                            <label class="switch">
                                                <input type="checkbox"/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>                                        
                                        <div>
                                            <label style="width: 150px;">Ver precio en el carro</label>
                                            <label class="switch">
                                                <input type="checkbox"/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <label style="width: 150px;">Ver precio en la carta</label>
                                            <label class="switch">
                                                <input type="checkbox"/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>                                        
                                        <div>
                                            <label style="width: 150px;">Redes Sociales</label>
                                            <label class="switch">
                                                <input type="checkbox"/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <label style="width: 150px;">Avisos</label>
                                            <label class="switch">
                                                <input type="checkbox"/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>                                        
                                        <div>
                                            <label  style="width: 150px;">Publicidad</label>
                                            <label class="switch">
                                                <input type="checkbox"/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <label style="width: 150px;">Mensajes push</label>
                                            <label class="switch">
                                                <input type="checkbox"/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>                                        
                                        <div>
                                            <label style="width: 150px;">Marketing</label>
                                            <label class="switch">
                                                <input type="checkbox"/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <label style="width: 150px;">Idiomas</label>
                                            <label class="switch">
                                                <input type="checkbox"/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>                                        
                                        <div>
                                            <label style="width: 150px;">Cobrar cubiertos</label>
                                            <label class="switch">
                                                <input type="checkbox"/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <label style="width: 150px;">Precios totales en cuenta</label>
                                            <label class="switch">
                                                <input type="checkbox"/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>                                        
                                        <div>
                                            <label style="width: 150px;">Cubiertos</label>
                                            <label class="switch">
                                                <input type="checkbox"/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </td> 
                                </tr>
                            </tbody>
                        </table>
                        
 
                        
                      </fieldset>
                  
              </div>
            </div>
        </div> 

        <div class="row" style="padding: 2px; margin: 0px;">
            <div class="col-md-12" style="padding: 0px;">
              <div class="box" style="background-color: #fff; padding: 0px;">
 
                      <fieldset>

                        <!-- Form Name -->
                        <legend style="background-color: #6a5acd; margin: 0px; padding-left: 15px; color:#fff; height: 55px;">SERVICIOS</legend>

                        <table>
                            <tbody>
                                <tr>
                                    <td>                                        
                                        <div>
                                            <label style="width: 150px;" for="check_delivery">Comer afuera</label>  
                                            <label class="switch">
                                                <input type="checkbox" name="check_delivery"/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>                                        
                                        <div>
                                            <label style="width: 150px;" for="check_delivery">Bar completo</label>  
                                            <label class="switch">
                                                <input type="checkbox" name="check_delivery"/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>                                        
                                        <div>
                                            <label style="width: 150px;" for="check_delivery">Wi-Fi</label>  
                                            <label class="switch">
                                                <input type="checkbox" name="check_delivery"/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>                                        
                                        <div>
                                            <label style="width: 150px;" for="check_delivery">Estacionamiento</label>  
                                            <label class="switch">
                                                <input type="checkbox" name="check_delivery"/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>                                        
                                        <div>
                                            <label style="width: 150px;" for="check_delivery">Sin reserva</label>  
                                            <label class="switch">
                                                <input type="checkbox" name="check_delivery"/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>                                        
                                        <div>
                                            <label style="width: 150px;" for="check_delivery">Sin delivery</label>  
                                            <label class="switch">
                                                <input type="checkbox" name="check_delivery"/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>                                        
                                        <div>
                                            <label style="width: 150px;" for="check_delivery">Se cobra cubierto</label>  
                                            <label class="switch">
                                                <input type="checkbox" name="check_delivery"/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>                                        
                                        <div>
                                            <label style="width: 150px;" for="check_delivery">Abierto 24 hs</label>  
                                            <label class="switch">
                                                <input type="checkbox" name="check_delivery"/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>                                        
                                        <div>
                                            <label style="width: 150px;" for="check_delivery">Acceso para discapacitados</label>  
                                            <label class="switch">
                                                <input type="checkbox" name="check_delivery"/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>                                        
                                        <div>
                                            <label style="width: 150px;" for="check_delivery">Comida para celiacos</label>  
                                            <label class="switch">
                                                <input type="checkbox" name="check_delivery"/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>                                        
                                        <div>
                                            <label style="width: 150px;" for="check_delivery">Se aceptan mascotas</label>  
                                            <label class="switch">
                                                <input type="checkbox" name="check_delivery"/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>                                        
                                        <div>
                                            <label style="width: 150px;" for="check_delivery">Comida vegetariana</label>  
                                            <label class="switch">
                                                <input type="checkbox" name="check_delivery"/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>                                        
                                        <div>
                                            <label style="width: 150px;" for="check_delivery">Se puede ir en grupos</label>  
                                            <label class="switch">
                                                <input type="checkbox" name="check_delivery"/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>                                        
                                        <div>
                                            <label style="width: 150px;" for="check_delivery">Sin gluten</label>  
                                            <label class="switch">
                                                <input type="checkbox" name="check_delivery"/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>                                        
                                        <div>
                                            <label style="width: 150px;" for="check_delivery">Acceso para discapacitados</label>  
                                            <label class="switch">
                                                <input type="checkbox" name="check_delivery"/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>        
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                        
                        <label class="col-md-3 control-label"  for="btn-save"></label>
                        <div class="col-md-8">
                            <button id="btn-save" name="btn-save" class="btn btn-primary">Guardar</button>
                        </div>  

                      </fieldset>
                  
              </div>
            </div>
        </div> 
            

        </form>
    </div>
</div>    
    
   
</section>
@include('admin.partial.scripts')

<script>
    
function goMozos(id)
{
    window.location.href = '/admin/mesas';    
}

function goCarta(id)
{
    window.location.href = '/admin/productoscarta';    
}
    
$(document).ready( function() {
    $(document).on('change', '.btn-file :file', function() {
    var input = $(this),
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function(event, label) {

        var input = $(this).parents('.input-group').find(':text'),
            log = label;

        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }

    });
});

function readURLLogo(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#img-upload_logo').attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
function readURLFranquiciado(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#img-upload_franquiciado').attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
function readURLF1(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#img-upload_f1').attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
function readURLF2(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#img-upload_f2').attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
function readURLF3(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#img-upload_f3').attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
function readURLF4(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#img-upload_f4').attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

$("#imgInpLogo").change(function(){
    readURLLogo(this); 
}); 

$("#imgInpFranquiciado").change(function(){
    readURLFranquiciado(this); 
}); 

$("#imgInpF1").change(function(){
    readURLF1(this); 
}); 

$("#imgInpF2").change(function(){
    readURLF2(this); 
}); 

$("#imgInpF3").change(function(){
    readURLF3(this); 
}); 

$("#imgInpF4").change(function(){
    readURLF4(this); 
}); 

 
$(document).ready(function(){ 
  $('#dtBasicExample').DataTable({
    "paging": true
  });
  $('.dataTables_length').addClass('bs-select');
    
}); 
 

</script>

<script> 
function myMap() {
    var mapProp= {
        center:new google.maps.LatLng(51.508742,-0.120850),
        zoom:5
    };
    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
} 
var titulo_seccion = document.getElementById("titulo_seccion");
titulo_seccion.innerHTML = "CLIENTES";

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDI_HGADUhhryYf0nHOo7BNtFM8DGBzVk&callback=myMap"></script>
  

 @endsection