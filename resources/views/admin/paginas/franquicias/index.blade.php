@extends('admin.layout.master')

@section('content')
 
<section class="content" style="padding-right: 0px; background-color: #f7f7f7;">
    

<div id="wrappermini">
    <div id="one"> 
    
        <!-- /.box-header -->
         <nav class="navbar navbar-inverse" style="margin: 0px; padding: 0px; background-color: #555;">
              <div class="container-fluid" style="margin: 0px; padding: 0px;">
                <div class="navbar-header" style="margin: 0px; padding: 0px;">
                  <a class="navbar-brand" href="#" style="margin-left:8px; color: #fff;" >FRANQUICIADO</a>
                </div>  
                <button class="btn btn-warning navbar-btn navbar-right " onclick="nuevo_franquiciado"  style="margin-right: 12px;">Nuevo Franquiciado</button>
              </div>
		</nav> 
		
        <div class="box2" style="margin: 0; padding: 0; padding-bottom: 25px; background-color: #fff;">
             
            <!-- /.box-body -->
            <div class="box-body" style=" padding: 0;margin: 0; height: 800px; min-width: 150px;">     
                 
                <table id="dtBasicExample"   class="table-striped table-responsive" style="margin-top: -1px; ">
                        <thead style="background-color: #696969; color: #fff;">
                            <tr style=" height: 45px;">
                                <th width="40px;" style="padding-left: 15px;">Id</th>
                                <th width="140px;"  class="hidden-xs">Foto</th>
                                <th width="120px;">Nombre de Negocio</th>
                                <th width="150px;" class="hidden-xs">Direccion</th>
                                <th width="80px;">Ciudad</th>
                                <th width="90px;" class="hidden-xs">Provincia</th>
                                <th width="100px;">Celular</th>
                                <th width="130px;" class="hidden-xs">Alta</th>
                                <th width="150px;"></th>
                                <th width="50px;">Estado</th>
                            </tr>
                        </thead>
                        <tbody >
                            @foreach($franquicias as $key => $fran)
                            <tr>
                                <td >{{ $key + 1 }}</td>
                                <td> <img src="/storage/{{ $fran->avatar }}" width="40" alt=""> </td>
                                <td>{{ $fran->names }} </td>
                                <td>{{ $fran->address }}</td> 
                                <td>{{ $fran->city }}</td>
                                <td >{{ $fran->province }}</td>
                                <td>{{ $fran->cellphone }}</td>
                                <td >{{ $fran->created_at }}</td>
                                <td> 
                                    <a href="/admin/clientes/{{ $fran->id }}" class="btn btn-xs btn-success btn-clientes-list" >Clientes</a>
                                    <a href="#" class="btn btn-xs btn-primary btn-franciado-edit" data-id="{{$fran->id}}">Editar</a>

                                </td>
                                <td>
                                    <label class="switch">
                                        <input type="checkbox" @if($fran->status==2) checked @endif >
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                </table> 
                {{ $franquicias->render() }}
            </div>
        </div>
 
    </div>
    <div id="two">
 
        <div class="row" style="padding: 2px; margin: 0px;">
            <div class="col-md-12" style="padding: 0px;">
              <div class="box" style="background-color: #fff; padding: 0px;">
 
                    <form class="form-horizontal" id="fr-franchise">
                      <fieldset>

                      <!-- Form Name -->
                      <legend style="background-color: #6a5acd; margin: 0px; padding-left: 15px; color:#fff; height: 55px;"></legend>

                        <!-- Text input-->
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

                            <label class="col-md-3 control-label" for="Apellidos">Provincia</label>  
                            <div class="col-md-8">
                            <input id="provincias" name="apellidos" style="background-color: #e5e5e5;" type="text" placeholder="Provincia" class="form-control input-md">
                            </div> 

                            <label class="col-md-3 control-label" for="Apellidos">Celular</label>  
                            <div class="col-md-8">
                            <input id="celular" name="apellidos" style="background-color: #e5e5e5;" type="text" placeholder="Celular" class="form-control input-md">
                            </div> 

                            <label class="col-md-3 control-label" for="email">Email</label>  
                            <div class="col-md-8">
                            <input id="email" name="email" style="background-color: #e5e5e5;" type="text" placeholder="Email" class="form-control input-md">
                            </div> 

                            <label class="col-md-3 control-label" for="pais">Pais</label>
                            <div class="col-md-8">
                              
                            </div> 

                            <label class="col-md-3 control-label" for="estado">Alta</label>
                            <div class="col-md-8">
                              <select id="estado" name="estado" style="background-color: #e5e5e5;" class="form-control">
                                <option value="1">Option one</option>
                              </select>
                            </div> 

                            <label class="col-md-3 control-label"  for="btn-save"></label>
                            <div class="col-md-8">
                                <button id="btn-save" name="btn-save" class="btn btn-primary">Guardar</button>
                            </div> 


                            <label class="control-label" style="padding-left: 15px;"  for="btn-save">Upload Image</label> 
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        Browse… <input type="file" id="imgInp">
                                    </span>
                                </span>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <img id='img-upload' style="padding: 15px;"/>

                        </div> 
                        <div id="googleMap" style="height:350px; margin: 2px; padding: 2px;"></div>
                      
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
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this); 
    }); 	
});

 
$(document).ready(function(){ 
  $('#dtBasicExample').DataTable({
    "paging": true
  });
  $('.dataTables_length').addClass('bs-select');   
}); 
  
var titulo_seccion = document.getElementById("titulo_seccion");
titulo_seccion.innerHTML = "FRANQUICIADO";

</script>


<script>
function myMap() {
    var mapProp= {
        center:new google.maps.LatLng(51.508742,-0.120850),
        zoom:5
    };
    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD4Fu4NmzS3qhAudwO3IMQzLEW2BQprLHw&callback=myMap"></script>
  

@endsection