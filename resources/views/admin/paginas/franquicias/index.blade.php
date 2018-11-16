@extends('admin.layout.master')

@section('content')

<div class="container">
    <div class="content1 content">

        <div class="box2">
                <div class="box-header2">
                    <div style="float:left">
                        <h3 class="box-title2">FRANQUICIADO</h3>
                    </div>
                    <div style="float:right; margin-right: 15px;">
                        <button onclick="nuevo_franquiciado" name="" value="ok" style="background-color: #cd853f; margin-top: 5px; width: 180px; height: 36px; font-size: 1.2em; border: 0px;">Nuevo Franquiciado</button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body2">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead style="background-color: #696969; color: #fff;">
                            <tr>
                                <th>Id</th>
                                <th>Foto</th>
                                <th>Nombre de Negocio</th>
                                <th>Direccion</th>
                                <th>Ciudad</th>
                                <th>Provincia</th>
                                <th>Celular</th>
                                <th>Paquete</th>
                                <th>Franquiciado</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($franquicias as $key => $fran)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $fran->names }} </td>
                                <td>{{ $fran->email }}</td>
                                <td>{{ $fran->pais }}</td>
                                <td>{{ $fran->created_at }}</td>
                                <td> 
                                    <a href="/admin/clientes/{{ $fran->id }}" class="btn btn-xs btn-success btn-clientes-list" >Clientes</a>
                                    <a href="#" class="btn btn-xs btn-primary btn-franciado-edit" data-id="{{$fran->id}}">Editar</a>

                                    <label class="switch">
                                        <input type="checkbox" @if($fran->status==2) checked @endif >
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            @endforeach
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
                   
                  

                  <form class="form-horizontal" id="fr-franchise">
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
                    
                    <!-- Select Basic -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="pais">Pais</label>
                      <div class="col-md-7">
                        <select id="pais" name="pais" class="form-control">
                          @foreach ($paises as $p)
                          <option value="{{ $p->Codigo }}">{{ $p->Pais }}</option>
                          
                          @endforeach
                          
                          
                        </select>
                      </div>
                    </div>
                    
                    <!-- Select Basic -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="estado">Estado</label>
                      <div class="col-md-7">
                        <select id="estado" name="estado" class="form-control">
                          <option value="1">Option one</option>
                          
                          
                        </select>
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
                    
                  
                    <div id="googleMap" style="width:90%; height:350px;"></div>
                  
                </div>
              </div>
          </div>
    </div>
</div>

<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
 
@endsection