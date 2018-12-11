@extends('admin.layout.master')

@section('content')

<section class="content" style="padding-right: 0px; background-color: #f7f7f7;">
     
<div id="wrappermini">
    <div id="one" style="margin: 0px; padding: 0px; ">  
        
         <ul class="nav nav-tabs" id="myTab" role="tablist" style="height: 43px;" >
       
          <li class="nav-item active">
            <a class="nav-link" id="home-tab" data-toggle="tab" href="#productos" role="tab" aria-controls="productos" aria-selected="true">Productos</a>
          </li>
   
         <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#ingredientes" role="tab" aria-controls="ingredientes" aria-selected="false">Ingredientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#catprod" role="tab" aria-controls="catprod" aria-selected="false">Cat. de productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link hidden-xs " id="contact-tab" data-toggle="tab" href="#salsas" role="tab" aria-controls="salsas" aria-selected="false">Salsas</a>
          </li>
        </ul>
         
        <div class="tab-content" id="myTabContent" style="padding: 0px;">
            <div class="tab-pane fade active in" id="productos" role="tabpanel" aria-labelledby="home-tab" style="padding: 0px;">


                <div id="add_box" style="padding: 0;">
                    <div class="box-header2" id="add_box_header2" style="padding: 0">
                        <div style="float:left; padding: 0 0 0 25px;">
                            <h3 class="box-title2">PRODUCTOS</h3>
                        </div>
                        <div style="float:right; margin-right: 15px; padding: 0px;">
                            <button onclick="duplicar()" name="" value="ok" style="background-color: #cd853f; margin-top: 5px; width: 180px; height: 36px; font-size: 1.2em; border: 0px;">Duplicar</button>
                            <button onclick="cambiarPrecios()" name="" value="ok" style="background-color: #cd853f; margin-top: 5px; width: 180px; height: 36px; font-size: 1.2em; border: 0px;">Cambiar Precios</button>
                            <button onclick="addProducto()" name="" value="ok" style="background-color: #cd853f; margin-top: 5px; width: 180px; height: 36px; font-size: 1.2em; border: 0px;">Agregar Producto</button>
                        </div>
                    </div>
                     
                        <nav class="subcontent0 sidebar_sub_1" > 
                            <ul class="list-group" data-widget="tree" id="prodCategorias"> 
                            </ul>
                        </nav> 
                        <!-- /.box-header -->
                        <div  class="subcontent0 subcontent1">
                            <table id="tb-cliente" class="table table-responsive table-hover">
                              <thead style="background-color: #696969; color: #fff;">
                                <tr>
                                  <th>Id</th>
                                  <th>Foto</th>
                                  <th>Titulo</th>
                                  <th>Precio 1</th> 
                                  <th>Precio 2</th> 
                                  <th></th> 
                                </tr>
                              </thead>
                              <tbody>
                                  @foreach($menus as $k => $menu)
                                  <tr>
                                      <td>{{ @$k +1 }}</td>
                                    <td><img src="/menus/{{ @$menu->menuphotos[0]->photo }}" alt="" width="70"> </td>
                                    <td> {{ $menu->titulo }}</td>
                                    <td>{{ $menu->price1 }}</td>
                                    <td>{{ $menu->price2 }}</td>
                                    <td>{{ $menu->state }}</td>
                                </tr>
                                  
                                  @endforeach 
                              </tbody>
                            </table>
                        </div> 
                 
                </div>
                
                
            </div>
            <div class="tab-pane fade" id="ingredientes" role="tabpanel" aria-labelledby="profile-tab" style="padding: 0px;">

                <div id="add_box" style="padding: 0;">
                    <!-- /.box-header -->
                    <div class="box-header2" id="add_box_header2" style="padding: 0">
                        <div style="float:left; padding: 0 0 0 25px;">
                            <h3 class="box-title2">INGREDIENTES</h3>
                        </div>
                        <div style="float:right; margin-right: 15px; padding: 0px;">
                            <button onclick="addIngrediente()" name="" value="ok" style="background-color: #cd853f; margin-top: 5px; width: 180px; height: 36px; font-size: 1.2em; border: 0px;">Agregar Ingrediente</button> 
                        </div>
                    </div>
                     
                    <!-- /.box-body -->
                    <div class="box-body2">
                          <table id="tb-cliente" class="table table-responsive table-hover">
                            <thead style="background-color: #696969; color: #fff;">
                            <tr>
                              <th>Id</th>
                              <th>Foto</th>
                              <th>Nombre</th>
                              <th>Precio</th> 
                              <th></th> 
                            </tr>
                            </thead>
                            <tbody> 
                                    @foreach($ingredientes as $k => $ing)
                                    <tr>
                                        <td>{{ @$k +1 }}</td>
                                      <td></td>
                                      <td> {{ $ing->name }}</td>
                                      <td>{{ $ing->price }}</td>
                                     
                                      <td>{{ $ing->state }}</td>
                                  </tr>
                                    
                                    @endforeach 
                            </tbody>
                          </table>
                    </div>
                </div> 
                
            </div>
            <div class="tab-pane fade" id="catprod" role="tabpanel" aria-labelledby="contact-tab" style="padding: 0px;">
                
                
                <div id="add_box" style="padding: 0;">
                    <!-- /.box-header -->
                    <div class="box-header2" id="add_box_header2" style="padding: 0">
                        <div style="float:left; padding: 0 0 0 25px;">
                            <h3 class="box-title2">CATEGORIAS Y SUBCATEGORIAS DE PRODUCTOS</h3>
                        </div>
                        <div style="float:right; margin-right: 15px; padding: 0px;">
                            <button onclick="addCategoria()" name="" value="ok" style="background-color: #cd853f; margin-top: 5px; width: 180px; height: 36px; font-size: 1.2em; border: 0px;">Agregar Categoria</button> 
                            <button onclick="addSubCategoria()" name="" value="ok" style="background-color: #cd853f; margin-top: 5px; width: 180px; height: 36px; font-size: 1.2em; border: 0px;">Agregar SubCategoria</button> 
                        </div>
                    </div>
                     
                    <!-- /.box-body --> 
                    <div class="box-body2">
                          <table id="tb-cliente" class="table table-responsive table-hover">
                            <thead style="background-color: #696969; color: #fff;">
                            <tr>
                              <th>Id</th>
                              <th>Foto</th>
                              <th>Categoria</th>
                              <th></th> 
                            </tr>
                            </thead>
                            <tbody> 
                            </tbody>
                          </table>
                    </div> 
                </div> 
                
                
            </div>
            <div class="tab-pane fade" id="salsas" role="tabpanel" aria-labelledby="contact-tab" style="padding: 0px;">
                
                
                <div id="add_box" style="padding: 0;">
                    <!-- /.box-header -->
                    <div class="box-header2" id="add_box_header2" style="padding: 0">
                        <div style="float:left; padding: 0 0 0 25px;">
                            <h3 class="box-title2">SALSAS</h3>
                        </div>
                        <div style="float:right; margin-right: 15px; padding: 0px;">
                            <button onclick="addSalsa()" name="" value="ok" style="background-color: #cd853f; margin-top: 5px; width: 180px; height: 36px; font-size: 1.2em; border: 0px;">Agregar Salsa</button> 
                        </div>
                    </div>
                     
                    <!-- /.box-body -->  
                    <div class="box-body2">
                          <table id="tb-cliente" class="table table-responsive table-hover">
                            <thead style="background-color: #696969; color: #fff;">
                            <tr>
                              <th>Id</th>
                              <th>Foto</th>
                              <th>Nombre</th>
                              <th>Precio</th> 
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
      
</section>


<script>    
var two = document.getElementById("two").hidden = true;  
    
function readURL(input, img_id) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $(img_id).attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
</script>

<script>    

function setSideBarCategorias()
{
    var ul1 = document.getElementById("prodCategorias");
    ul1.innerHTML = "";
    
    //from server recive categorias
    var cats=[];
    @foreach($categorias as $cat)
          cats.push('{{$cat->name}}');
    @endforeach
   // var cats = ["Bebidas","Cafeterias","Platos principales","Postres"];
    for(i =0; i<cats.length; i++)
    {
        var name = cats[i];
        var categoria = document.createElement("li");   
        var a1 = document.createElement("a"); 
        a1.href = "#";
        a1.style = "color: #eeeeee; padding-left: 25px;";
        a1.innerHTML = name;
        
        categoria.appendChild(a1);
        ul1.appendChild(categoria);
    }
    
}

function cambiarPrecios(index)
{
    var two = document.getElementById("two");
    two.hidden = false;

    var record = document.getElementById("content_add_record"); 
    record.innerHTML = "";
    addTextForm(record, "precio", "Precio");
    addBotonSubmit(record);
    
}

function duplicar(index)
{
    
}

function addProducto()
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
    
    addSwitch(record, "check_plato_del_chef", "Plato del chef");
    addSwitch(record, "check_vegetariano", "Vegetariano");
    addSwitch(record, "check_celiacos", "Celiacos");
    addSwitch(record, "check_destacado", "Destacado");
    addSwitch(record, "check_delivery", "Delivery");
    
    addBotonSubmit(record);
    addImageToUpload(record, "img_upload_1", "Imagen de subcategoria", function(){ readURL(this, "#img_upload_1"); });  
    addImageToUpload(record, "img_upload_2", "Imagen de subcategoria", function(){ readURL(this, "#img_upload_2"); });  
}

function addIngrediente()
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
    addBotonSubmit(record);
    addImageToUpload(record, "img_upload_subcategoria", "Imagen de subcategoria", function(){ readURL(this, "#img_upload_subcategoria"); });  
       
}
    
function addSubCategoria()
{
    var two = document.getElementById("two");
    two.hidden = false;

    var record = document.getElementById("content_add_record"); 
    record.innerHTML = "";
    
    addTextForm(record, "nombre", "Nombre subcategoria"); 
    addSelectForm(record, "categoria", "Categoria padre"); 
    addBotonSubmit(record);
    addImageToUpload(record, "img_upload_subcategoria", "Imagen de subcategoria", function(){ readURL(this, "#img_upload_subcategoria"); });  
    
}
    
function addCategoria()
{
    var two = document.getElementById("two");
    two.hidden = false;

    var record = document.getElementById("content_add_record"); 
    record.innerHTML = "";
    
    addTextForm(record, "nombre", "Nombre"); 
    addBotonSubmit(record);
    addImageToUpload(record, "img_upload_categoria", "Imagen de categoria", function(){ readURL(this, "#img_upload_categoria"); });  
}
    
function addSalsa()
{ 
    var two = document.getElementById("two");
    two.hidden = false;

    var record = document.getElementById("content_add_record"); 
    record.innerHTML = "";

    addTextForm(record, "nombre", "Titulo");
    addTextForm(record, "precio", "Precio 1");
    addTextForm(record, "calorias", "Calorias");
    addTextForm(record, "categoria", "Categoria");
    addBotonSubmit(record);
    addImageToUpload(record, "img_upload_salsa", "Imagen de salsa", function(){ readURL(this, "#img_upload_salsa"); });       
}

    
</script>
      
<script> 
    $(document).ready(function(){         
        $('#dtBasicExample').DataTable({
          "paging": true
        });
        $('.dataTables_length').addClass('bs-select');
        
        setSideBarCategorias();
    });
</script>

 
@endsection