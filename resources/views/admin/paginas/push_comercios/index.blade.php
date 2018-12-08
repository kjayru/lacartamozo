@extends('admin.layout.master')

@section('content')

<section class="content" style="width:100%; position: relative; padding: 0px;"> 
     
<div class="container">
    <div class="content1 content">
   

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