@extends('admin.layout.master')

@section('content')

  
      <!-- Main content -->
  <div class="col-md-8">
      <section class="content">
       
        <div class="row">
            <div class="col-md-12">
                  
                <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Franquicias</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th>Nº</th>
                          <th>Nombres</th>
                          <th>Email</th>
                          <th>Pais</th>
                          <th>Fecha</th>
                          <th></th>
                        </tr>
                        </thead>
                        <tbody>
                          @foreach($franquicias as $key => $fran)
                        <tr>
                          <td>{{ $key + 1 }}</td>
                          <td>{{ $fran->names }} </td>
                          <td>{{ $fran->email }}</td>
                          <td> {{ $fran->pais }}</td>
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
        </div>
  
      </section>
    </div>                                                                                                                                                                   


    <div class="col-md-4" id="detalle">
        <section class="content">
          
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
                    
                  
                  
                </div>
              </div>
          </div>
        </section>
      </div>
@endsection