@extends('admin.layout.master')

@section('content')

<section class="content" style="padding-right: 0px; background-color: #f7f7f7;">
     
<div id="wrappermini">
    <div id="one" style="margin: 0px; padding: 0px; width: 900px;"> 
        
        <ul class="nav nav-tabs" id="myTab" role="tablist" style="height: 43px;" >
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#mensaje" role="tab" aria-controls="mensaje" aria-selected="true">Mensaje</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#destino" role="tab" aria-controls="destino" aria-selected="false">Destino</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#continuar" role="tab" aria-controls="continuar" aria-selected="false">Continuar</a>
            </li> 
        </ul>
        <div class="tab-content" id="myTabContent" style="padding: 0px;">
            <div class="tab-pane fade " id="mensaje" role="tabpanel" aria-labelledby="home-tab"  style="background-color: #fafafa;">
            </div>
            <div class="tab-pane fade " id="destino" role="tabpanel" aria-labelledby="home-tab"  style="background-color: #fafafa;">
            </div>
            <div class="tab-pane fade " id="continuar" role="tabpanel" aria-labelledby="home-tab"  style="background-color: #fafafa;">
            </div>
        </div>
        
    </div>
    <div id="two" style="padding: 0px;">
        
        <div class="row" style="padding: 2px; margin: 0px;">
            <div class="col-md-12" style="padding: 0px;">
              <div class="box" style="background-color: #fff; padding: 0px;">

                <fieldset>
                    <legend style="background-color: #6a5acd; margin: 0px; padding-left: 15px; color:#fff; height: 55px;">MENSAJES ENVIADOS</legend>
                </fieldset>
                    <table id="tb-cliente" class="table table-striped">
                        <thead style="background-color: #676767; color: #fff;">
                            <tr>
                              <th width="40px">Id</th>
                              <th width="180px">Mensaje</th>  
                              <th>Destino</th>  
                              <th>Radio</th>  
                              <th>Fecha de Envio</th>  
                            </tr>
                        </thead>
                        <tbody> 
                            
                            <tr>
                                <td><h6>12</h6></td>
                                <td><img src="../images/icono_ver_tutorial.png" width="150px" onClick="verTutorial(6)"/></td> 
                                <td><h6>A Todos</h6></td>
                                <td><h6>22 Km</h6></td>
                                <td><h6>Martes 22 20:32</h6></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Enviado 19-07-18</td> 
                                <td></td>
                                <td></td>
                                <td><button>RE ENVIAR</button></td>
                            </tr>
                             
                            <tr>
                                <td><h6>12</h6></td>
                                <td><img src="../images/icono_ver_tutorial.png" width="150px" onClick="verTutorial(6)"/></td> 
                                <td><h6>A Todos</h6></td>
                                <td><h6>22 Km</h6></td>
                                <td><h6>Martes 22 20:32</h6></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Enviado 19-07-18</td> 
                                <td></td>
                                <td></td>
                                <td><button>RE ENVIAR</button></td>
                            </tr>
                             
                            
                        </tbody>
                    </table>
                </div>
              </div>
            </div>
        
    </div>
</div>
     
    
</section>
 
@endsection