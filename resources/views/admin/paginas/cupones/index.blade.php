@extends('admin.layout.master')

@section('content')

<section class="content" style="padding-right: 0px; background-color: #f7f7f7;">
     
<div id="wrappermini">
    <div id="one" style="margin: 0px; padding: 0px; "> 
         <ul class="nav nav-tabs" id="myTab" role="tablist" style="height: 43px;" >
            <li class="nav-item active">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#cupones" role="tab" aria-controls="cupones" aria-selected="true">Cupones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#regalos" role="tab" aria-controls="regalos" aria-selected="false">Regalos</a>
            </li> 
        </ul>
        <div class="tab-content" id="myTabContent" style="padding: 0px;">
            <div class="tab-pane fade active in" id="cupones" role="tabpanel" aria-labelledby="home-tab" style="padding: 0px;">

                <div id="add_box" style="padding: 0;">
                    <div class="box-header2" id="add_box_header2" style="padding: 0">
                        <div style="float:left; padding: 0 0 0 25px;">
                            <h3 class="box-title2">CUPONES</h3>
                        </div>
                        <div style="float:right; margin-right: 15px; padding: 0px;">
                            <button onclick="addCupon()" name="" value="ok" style="background-color: #cd853f; margin-top: 5px; width: 180px; height: 36px; font-size: 1.2em; border: 0px;">Crear cupon</button>
                        </div>
                    </div>
 
                    <div  class="subcontent0 subcontent1">
                        <table id="tb-cupon" class="table table-responsive table-hover">
                          <thead style="background-color: #696969; color: #fff;">
                          <tr>
                            <th>Id</th>
                            <th>Foto</th>
                            <th>Titulo</th>
                            <th>Promo</th>
                            <th>Producto</th>
                            <th>Condiciones</th>
                            <th>Resto-Bar</th>
                            <th>Estado</th>
                          </tr>
                          </thead>
                          <tbody> 
                          </tbody>
                        </table>
                    </div> 
                 
                </div>
                
            </div>
            <div class="tab-pane fade" id="regalos" role="tabpanel" aria-labelledby="profile-tab" style="padding: 0px;">

                <div id="add_box" style="padding: 0;">
                    <div class="box-header2" id="add_box_header2" style="padding: 0">
                        <div style="float:left; padding: 0 0 0 25px;">
                            <h3 class="box-title2">REGALOS</h3>
                        </div>
                        <div style="float:right; margin-right: 15px; padding: 0px;">
                            <button onclick="addRegalo()" name="" value="ok" style="background-color: #cd853f; margin-top: 5px; width: 180px; height: 36px; font-size: 1.2em; border: 0px;">Crear regalo</button>
                        </div>
                    </div>
 
                    <div  class="subcontent0 subcontent1">
                        <table id="tb-regalo" class="table table-responsive table-hover">
                          <thead style="background-color: #696969; color: #fff;">
                            <tr>
                              <th>Id</th>
                              <th>Foto</th>
                              <th>Titulo</th>
                              <th>Puntos</th>
                              <th>Producto</th>
                              <th>Condiciones</th>
                              <th>Resto-Bar</th>
                              <th>Estado</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody> 
                          </tbody>
                        </table>
                    </div> 
                 
                </div>
                 
            </div>
        </div>
        
    </div>
    <div id="two" style="padding: 0px;">   
         <div class="row">
          <div class="col-md-12" >
            <div class="box"> 
                
                <form class="form-horizontal" id="fr-franchise"> 
                <div class="row" style="padding: 2px; margin: 0px;">
                    <div class="col-md-12" style="padding: 0px;">
                      <div class="box" style="background-color: #fff; padding: 0px;">

                              <fieldset>

                                <!-- Form Name -->
                                <legend style="background-color: #6a5acd; margin: 0px; padding-left: 15px; color:#fff; height: 55px;"></legend>
 
                                <!-- form-group -->
                                <div class="form-group" id="content_add_record"> 
                                </div>  
                                <!-- /.form-group -->
                              </fieldset>
                        </div>
                      </div>
                  </div>
                </form>
 
            </div>
          </div>
        </div> 
    </div>
</div>
     
    
<script> 
    
    var two = document.getElementById("two").hidden = true;  

    $(document).ready(function(){         
        $('#tb-cupon').DataTable({
          "paging": true
        });        
        $('#tb-regalo').DataTable({
          "paging": true
        });
        $('.dataTables_length').addClass('bs-select');
         
    });
</script>

<script>

    function addCupon()
    {
        var two = document.getElementById("two");
        two.hidden = false;

        var record = document.getElementById("content_add_record"); 
        record.innerHTML = "";

        addBubTitle(record, "EDITAR CONTENIDO");
        addTextFormLarge(record, "nombre", "Nombre del programa de fidelizacion");
        addTextFormMultilineLarge(record, "descripcion", "Descripcion (Opcional)"); 
        addTextFormMultilineLarge(record, "terminos", "Terminos del servicio o Instrucciones (Opcional)"); 
        addBubTitle(record, "DISPLAY");
        addImageToUpload(record, "img_cabecera", "Imagen de Cabecera para Movil(Opcional)",  function(){ readURL(this, "#img_cabecera"); });        
        addSwitchLarge(record, "repeticion", "¿Puede este programa de fidelizacion repetirse?");
        addNumberFormLarge(record, "puntos_debloqueo", "Puntos necesarios para desbloquear el Premio", 1, 10000, 1);
        
        addBubTitle(record, "CONFIGURACION");
        addSwitchLarge(record, "zonahoraria", "Zona horaria"); 
        addSwitchLarge(record, "limitestemp", "Limites temporales");
        addSwitchLarge(record, "premiopornotificacionespush", "Premio por notificaciones Push");
        

    }    
    
    
    function addRegalo()
    {
        var two = document.getElementById("two");
        two.hidden = false;

        var record = document.getElementById("content_add_record"); 
        record.innerHTML = "";

        addTextForm(record, "nombre", "Titulo");
        addTextForm(record, "precio1", "Precio 1"); 
        addTextForm(record, "precio2", "Precio 2"); 
        addTextForm(record, "calorias", "Calorias");  
        addSelectForm(record, "categoria", "Categoria"); 
        addSelectForm(record, "subcategoria", "Subcategoria"); 

    }    
    
</script>

@endsection