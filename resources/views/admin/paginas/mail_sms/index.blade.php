@extends('admin.layout.master')

@section('content') 


<div class="container">
    <div class="content1 content">
  
        <form>
            <div class="box2">
                <div class="box-header2">
                    <div style="float:left">
                        <h3 class="box-title2">PLANTILLAS DE MAILS</h3>
                    </div>
                    <div style="float:right; margin-right: 15px;">
                        <button onclick="nuevo_mozo" name="" value="ok" style="background-color: #cd853f; margin-top: 5px; width: 240px; height: 36px; font-size: 1.2em; border: 0px;">Agregar Tipos de Comida</button>
                    </div>
                </div>
                    <!-- /.box-header -->
                    
                <h4>Plantilla general</h4>
                <div class="box-body2">
                      <table id="tb-cliente" class="table table-responsive table-hover">
                        <thead>
                        <tr>
                          <th>Disparadores</th>
                          <th>Email</th>
                          <th>SMS</th>
                          <th>WhatsApp</th> 
                          <th>Comportamiento</th> 
                        </tr>
                        </thead>
                        <tbody> 
                      </table>
                </div>
                
                
                
                <h4>Plantilla de pedido</h4>
                <div class="box-body2">
                      <table id="tb-cliente" class="table table-responsive table-hover">
                        <thead>
                        <tr>
                          <th>Disparadores</th>
                          <th>Email</th>
                          <th>SMS</th>
                          <th>WhatsApp</th> 
                          <th>Comportamiento</th> 
                        </tr>
                        </thead>
                        <tbody> 
                      </table>
                </div>
                
                
                <h4>Plantilla de reserva</h4>
                <div class="box-body2">
                      <table id="tb-cliente" class="table table-responsive table-hover">
                        <thead>
                        <tr>
                          <th>Disparadores</th>
                          <th>Email</th>
                          <th>SMS</th>
                          <th>WhatsApp</th> 
                          <th>Comportamiento</th> 
                        </tr>
                        </thead>
                        <tbody> 
                      </table>
                </div>
                
                
                <h4>Plantilla de estado del pedido</h4>
                <div class="box-body2">
                      <table id="tb-cliente" class="table table-responsive table-hover">
                        <thead>
                        <tr>
                          <th>Disparadores</th>
                          <th>Email</th>
                          <th>SMS</th>
                          <th>WhatsApp</th> 
                          <th>Comportamiento</th> 
                        </tr>
                        </thead>
                        <tbody> 
                      </table>
                </div>
            </div> 
        
            <input type="button" name="submit" value="Guardar cambios" />
            
        </form>

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