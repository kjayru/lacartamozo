@extends('admin.layout.master')

@section('content')

<section class="content" style="width:100%; position: relative; padding: 0px;"> 
    </br></br></br></br>
 
    <div style="width: 600px; margin-left: auto; margin-right: auto;">
        
        <div  class="col-md-3" style="width: 300px;">  
            <div class="box" style="cursor: pointer; height: 320px;" onclick="onComercios()">
              
                <!-- /.box-body -->
                <div class="box-body no-padding" style="margin-bottom: 50px; height: 320px;"> 
                    <img src="../images/monitor.png" width="85px" height="85px" style="margin-left: 92px; margin-top: 85px;" />
                    <h5 style="text-align: center">Envie mensajes Push Web</h5>
                    <h5 style="text-align: center">a los Comercios</h5>
                </div>
 
            </div>
        </div>
         
        <div  class="col-md-3" style="width: 300px;"> 

            <div class="box" style="cursor: pointer; height: 320px;" onclick="onComensal()">
                 

                <!-- /.box-body -->
                <div class="box-body no-padding" style="margin-bottom: 50px; height: 320px;"> 
                    <img src="../images/tablet.png" width="85px" height="85px" style="margin-left: 92px; margin-top: 85px;" />
                    <h5 style="text-align: center">Envie mensajes Push Web</h5>
                    <h5 style="text-align: center">a los Comensales</h5>
                </div>
 
            </div>
        </div>
        
    </div>
         
    
</section>

<script>
    function onComercios(){  window.location.href = "/admin/push_comercios"; }
    function onComensal(){  window.location.href = "/admin/push_comensal"; } 
    
</script>
@endsection