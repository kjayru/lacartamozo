@extends('admin.layout.master')

@section('content')

<section class="content" style="width:100%; position: relative; padding: 0px;"> 
     
    
<div class="container">
    <div class="content1 content">
   
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
    <div class="content2 content">
 
            <div class="row">
              <div class="col-md-12">
                <div class="box">

                    <div class="box-header2" style="background-color: #6a5acd;">
                        <div style="float:left;">
                            <h3 class="box-title2">MENSAJES ENVIADOS</h3>
                        </div>
                    </div>
                    
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
                            <tr >
                                <td></td>
                                <td>
                                    <ul class="list-inline">
                                        <li><div><img src="../images/apple.png" width="35px"/>1</div></li>
                                        <li><div><img src="../images/android.png" width="35px"/>58</div></li>
                                    </ul> 
                                </td> 
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