@extends('admin.layout.master')

@section('content')

<div class="container">
    <div class="content1 content">
  
            <div class="box2">
                <div class="box-header2">
                    <div style="float:left">
                        <h3 class="box-title2">COMENTARIOS PENDIENTES</h3>
                    </div>
                </div>
                    <!-- /.box-header -->
                <div class="box-body2">
                    <h5>Esta sección muestra una lista de comentarios pendientes disponibles en espera de aprobación</h5>
                    <table id="tb-cliente" class="table table-striped">
                        <thead style="background-color: #f0f0f0; color: #000;">
                        <tr>
                            <th>Nº</th>
                            <th>Comentario</th>
                            <th>Respuestas</th>
                            <th>Estados</th>
                            <th>Fecha</th>
                            <th>Valorado</th> 
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

                    <div class="box-header2" style="background-color: #6a5acd;">
                        <div style="float:left;">
                            <h3 class="box-title2">COMENTARIOS APROBADOS</h3>
                        </div>
                    </div>

                    <table id="tb-cliente" class="table">
                        <thead>
                            <tr>
                              <th width="50px"></th>
                              <th></th>  
                            </tr>
                        </thead>
                        <tbody> 
                            <tr>
                                <td>
                                    <div class="comentario-rounded">IN</div>
                                </td>
                                <td>
                                    <div>
                                        <ul class="list-inline">
                                            <li><h6>Invitado posted a comment in</h6></li>
                                            <li><h6 style="color: #479eb7;">TSK Culata ajustable</h6></li>                                            
                                        </ul> 
                                        <h5 style="background-color: #eee; height: 35px; padding-top: 9px; padding-left: 15px;"><i class="fa fa-comment" style="color: #aaa; margin-right: 5px;"></i>HOLA QUE VALOR TIENE ESTA CULATA</h5>
                                        <ul class="list-inline">
                                            <li><h6 style="color: #aaa;"><i class="fa fa-cube" style="color: #aaa; margin-right: 5px;"></i>Vitemart</h6></li>
                                            <li><h6 style="color: #aaa;"><i class="fa fa-clock-o" style="color: #aaa; margin-right: 5px;"></i>Martes, 20 de febrero 2018 17:01</h6></li>                                            
                                        </ul> 
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="comentario-rounded">IN</div>
                                </td>
                                <td>
                                    <div>
                                        <ul class="list-inline">
                                            <li><h6>Invitado posted a comment in</h6></li>
                                            <li><h6 style="color: #479eb7;">TSK Culata ajustable</h6></li>                                            
                                        </ul> 
                                        <h5 style="background-color: #eee; height: 35px; padding-top: 9px; padding-left: 15px;"><i class="fa fa-comment" style="color: #aaa; margin-right: 5px;"></i>HOLA QUE VALOR TIENE ESTA CULATA</h5>
                                        <ul class="list-inline">
                                            <li><h6 style="color: #aaa;"><i class="fa fa-cube" style="color: #aaa; margin-right: 5px;"></i>Vitemart</h6></li>
                                            <li><h6 style="color: #aaa;"><i class="fa fa-clock-o" style="color: #aaa; margin-right: 5px;"></i>Martes, 20 de febrero 2018 17:01</h6></li>                                            
                                        </ul> 
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="comentario-rounded">IN</div>
                                </td>
                                <td>
                                    <div>
                                        <ul class="list-inline">
                                            <li><h6>Invitado posted a comment in</h6></li>
                                            <li><h6 style="color: #479eb7;">TSK Culata ajustable</h6></li>                                            
                                        </ul> 
                                        <h5 style="background-color: #eee; height: 35px; padding-top: 9px; padding-left: 15px;"><i class="fa fa-comment" style="color: #aaa; margin-right: 5px;"></i>HOLA QUE VALOR TIENE ESTA CULATA</h5>
                                        <ul class="list-inline">
                                            <li><h6 style="color: #aaa;"><i class="fa fa-cube" style="color: #aaa; margin-right: 5px;"></i>Vitemart</h6></li>
                                            <li><h6 style="color: #aaa;"><i class="fa fa-clock-o" style="color: #aaa; margin-right: 5px;"></i>Martes, 20 de febrero 2018 17:01</h6></li>                                            
                                        </ul> 
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="comentario-rounded">IN</div>
                                </td>
                                <td>
                                    <div>
                                        <ul class="list-inline">
                                            <li><h6>Invitado posted a comment in</h6></li>
                                            <li><h6 style="color: #479eb7;">TSK Culata ajustable</h6></li>                                            
                                        </ul> 
                                        <h5 style="background-color: #eee; height: 35px; padding-top: 9px; padding-left: 15px;"><i class="fa fa-comment" style="color: #aaa; margin-right: 5px;"></i>HOLA QUE VALOR TIENE ESTA CULATA</h5>
                                        <ul class="list-inline">
                                            <li><h6 style="color: #aaa;"><i class="fa fa-cube" style="color: #aaa; margin-right: 5px;"></i>Vitemart</h6></li>
                                            <li><h6 style="color: #aaa;"><i class="fa fa-clock-o" style="color: #aaa; margin-right: 5px;"></i>Martes, 20 de febrero 2018 17:01</h6></li>                                            
                                        </ul> 
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="comentario-rounded">IN</div>
                                </td>
                                <td>
                                    <div>
                                        <ul class="list-inline">
                                            <li><h6>Invitado posted a comment in</h6></li>
                                            <li><h6 style="color: #479eb7;">TSK Culata ajustable</h6></li>                                            
                                        </ul> 
                                        <h5 style="background-color: #eee; height: 35px; padding-top: 9px; padding-left: 15px;"><i class="fa fa-comment" style="color: #aaa; margin-right: 5px;"></i>HOLA QUE VALOR TIENE ESTA CULATA</h5>
                                        <ul class="list-inline">
                                            <li><h6 style="color: #aaa;"><i class="fa fa-cube" style="color: #aaa; margin-right: 5px;"></i>Vitemart</h6></li>
                                            <li><h6 style="color: #aaa;"><i class="fa fa-clock-o" style="color: #aaa; margin-right: 5px;"></i>Martes, 20 de febrero 2018 17:01</h6></li>                                            
                                        </ul> 
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="comentario-rounded">IN</div>
                                </td>
                                <td>
                                    <div>
                                        <ul class="list-inline">
                                            <li><h6>Invitado posted a comment in</h6></li>
                                            <li><h6 style="color: #479eb7;">TSK Culata ajustable</h6></li>                                            
                                        </ul> 
                                        <h5 style="background-color: #eee; height: 35px; padding-top: 9px; padding-left: 15px;"><i class="fa fa-comment" style="color: #aaa; margin-right: 5px;"></i>HOLA QUE VALOR TIENE ESTA CULATA</h5>
                                        <ul class="list-inline">
                                            <li><h6 style="color: #aaa;"><i class="fa fa-cube" style="color: #aaa; margin-right: 5px;"></i>Vitemart</h6></li>
                                            <li><h6 style="color: #aaa;"><i class="fa fa-clock-o" style="color: #aaa; margin-right: 5px;"></i>Martes, 20 de febrero 2018 17:01</h6></li>                                            
                                        </ul> 
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="comentario-rounded">IN</div>
                                </td>
                                <td>
                                    <div>
                                        <ul class="list-inline">
                                            <li><h6>Invitado posted a comment in</h6></li>
                                            <li><h6 style="color: #479eb7;">TSK Culata ajustable</h6></li>                                            
                                        </ul> 
                                        <h5 style="background-color: #eee; height: 35px; padding-top: 9px; padding-left: 15px;"><i class="fa fa-comment" style="color: #aaa; margin-right: 5px;"></i>HOLA QUE VALOR TIENE ESTA CULATA</h5>
                                        <ul class="list-inline">
                                            <li><h6 style="color: #aaa;"><i class="fa fa-cube" style="color: #aaa; margin-right: 5px;"></i>Vitemart</h6></li>
                                            <li><h6 style="color: #aaa;"><i class="fa fa-clock-o" style="color: #aaa; margin-right: 5px;"></i>Martes, 20 de febrero 2018 17:01</h6></li>                                            
                                        </ul> 
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                   </table>
 
                </div>
              </div>
          </div>
        
    </div>
</div>
 
@endsection