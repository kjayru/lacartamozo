@extends('admin.layout.master')

@section('content') 


<div class="container">
    <div class="content1 content">
  
            <div class="box2">
                <div class="box-header2">
                    <div style="float:left">
                        <h3 class="box-title2">TIPOS DE COMIDA</h3>
                    </div>
                    <div style="float:right; margin-right: 15px;">
                        <button onclick="nuevo_mozo" name="" value="ok" style="background-color: #cd853f; margin-top: 5px; width: 240px; height: 36px; font-size: 1.2em; border: 0px;">Agregar Tipos de Comida</button>
                    </div>
                </div>
                    <!-- /.box-header -->
            <div class="box-body2">
                      <table id="tb-cliente" class="table table-responsive table-hover">
                        <thead style="background-color: #696969; color: #fff;">
                        <tr>
                          <th>Id</th>
                          <th>Tipo</th>
                          <th></th>
                          <th></th> 
                        </tr>
                        </thead>
                        <tbody> 
                      </table>
                    </div>
              <!-- /.box-body -->
            </div> 

    </div>
    <div class="content2 content">

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
        
    </div>
</div>







@endsection