@extends('admin.layout.master')

@section('content')

<div class="container">
     <section class="content1  content">
         
         <ul class="nav nav-tabs" id="myTab" role="tablist" style="height: 43px;" >
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#productos" role="tab" aria-controls="productos" aria-selected="true">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#ingredientes" role="tab" aria-controls="ingredientes" aria-selected="false">Ingredientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#catprod" role="tab" aria-controls="catprod" aria-selected="false">Cat. de productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#salsas" role="tab" aria-controls="salsas" aria-selected="false">Salsas</a>
          </li>
        </ul>
         
        <div class="tab-content" id="myTabContent" style="padding: 0px;">
            <div class="tab-pane fade" id="productos" role="tabpanel" aria-labelledby="home-tab">


                <div class="box2" >
                    <div class="box-header2">
                        <div style="float:left">
                            <h3 class="box-title2">PRODUCTOS</h3>
                        </div>
                        <div style="float:right; margin-right: 15px;">
                            <button onclick="nuevo_mozo" name="" value="ok" style="background-color: #cd853f; margin-top: 5px; width: 180px; height: 36px; font-size: 1.2em; border: 0px;">Duplicar</button>
                            <button onclick="nuevo_mozo" name="" value="ok" style="background-color: #cd853f; margin-top: 5px; width: 180px; height: 36px; font-size: 1.2em; border: 0px;">Cambiar Precios</button>
                            <button onclick="nuevo_mozo" name="" value="ok" style="background-color: #cd853f; margin-top: 5px; width: 180px; height: 36px; font-size: 1.2em; border: 0px;">Agregar Producto</button>
                        </div>
                    </div>
                     
                        <nav class="subcontent0 sidebar_sub_1" > 
                            <ul class="list-unstyled components">
                                <li><a href="#" style="color: #eeeeee; padding-left: 25px;">Bebidas</a></li>
                            </ul>
                            <ul class="list-unstyled components">
                                <li><a href="#" style="color: #eeeeee; padding-left: 25px;">Cafeteria</a></li>
                            </ul>
                            <ul class="list-unstyled components">
                                <li><a href="#" style="color: #eeeeee; padding-left: 25px;">Platos Principales</a></li>
                            </ul>
                            <ul class="list-unstyled components">
                                <li><a href="#" style="color: #eeeeee; padding-left: 25px;">Postres</a></li>
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
                              </tbody>
                            </table>
                        </div> 
                 
                </div>
                
                
            </div>
            <div class="tab-pane fade" id="ingredientes" role="tabpanel" aria-labelledby="profile-tab">

                <div class="box2">
                    <div class="box-header2">
                        <div style="float:left">
                            <h3 class="box-title2">INGREDIENTES</h3>
                        </div>
                        <div style="float:right; margin-right: 15px;">
                            <button onclick="nuevo_mozo" name="" value="ok" style="background-color: #cd853f; margin-top: 5px; width: 180px; height: 36px; font-size: 1.2em; border: 0px;">Agregar Ingrediente</button>
                            
                        </div>
                    </div>
                        <!-- /.box-header -->
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
                  <!-- /.box-body -->
                </div> 
                
            </div>
            <div class="tab-pane fade" id="catprod" role="tabpanel" aria-labelledby="contact-tab">
                
                
                <div class="box2">
                    <div class="box-header2">
                        <div style="float:left">
                            <h3 class="box-title2">CATEGORIAS Y SUBCATEGORIAS DE PRODUCTOS</h3>
                        </div>
                        <div style="float:right; margin-right: 15px;">
                            <button onclick="nuevo_mozo" name="" value="ok" style="background-color: #cd853f; margin-top: 5px; width: 180px; height: 36px; font-size: 1.2em; border: 0px;">Agregar Categoria</button>
                            <button onclick="nuevo_mozo" name="" value="ok" style="background-color: #cd853f; margin-top: 5px; width: 180px; height: 36px; font-size: 1.2em; border: 0px;">Agregar SubCategoria</button>
                            
                        </div>
                    </div>
                        <!-- /.box-header -->
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
                  <!-- /.box-body -->
                </div> 
                
                
            </div>
            <div class="tab-pane fade" id="salsas" role="tabpanel" aria-labelledby="contact-tab">
                
                
                <div class="box2">
                    <div class="box-header2">
                        <div style="float:left">
                            <h3 class="box-title2">SALSAS</h3>
                        </div>
                        <div style="float:right; margin-right: 15px;">
                            <button onclick="nuevo_mozo" name="" value="ok" style="background-color: #cd853f; margin-top: 5px; width: 180px; height: 36px; font-size: 1.2em; border: 0px;">Agregar Salsa</button>
                        </div>
                    </div>
                        <!-- /.box-header -->
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
                  <!-- /.box-body -->
                </div> 
                
                
            </div>
        </div>
     </section>
    
    <section class="content2 content">

            <div class="row">
              <div class="col-md-12">
                <div class="box">
      
                    <form action="" class="form">
                    <div class="form-group">

                    </div>

                  </form>


                </div>
              </div>
          </div>
        
    </section>
</div>


 
@endsection