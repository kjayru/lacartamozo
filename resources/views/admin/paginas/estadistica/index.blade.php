@extends('admin.layout.master')

<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
<script type="text/javascript" src="../dist/js/utils.js"></script>


@section('content')


<section class="content" style="width:100%; position: relative;">
     
    <div class="panel-group">
        
        <div class="panel panel-default" style="background-color: #efefef; height: 55px; margin-top: 50px;">
            <div class="panel-body" style="padding: 7px;">
                <ul  class="nav nav-tabs" id="myTab" role="tablist" style="height: 40px; background-color: #efefef; float: right; border-bottom: 0px;" >
                    <li class="nav-item" style="margin: 0px;">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#restaurantes" role="tab" aria-controls="ayer" aria-selected="true">Ayer</a>
                    </li>
                    <li class="nav-item" style="margin: 0px;">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#restaurantes" role="tab" aria-controls="ultima_semana" aria-selected="true">Ultima semana</a>
                    </li> 
                    <li class="nav-item" style="margin: 0px;">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#restaurantes" role="tab" aria-controls="Ayer" aria-selected="true">Este mes</a>
                    </li>
                    <li class="nav-item" style="margin: 0px;">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#restaurantes" role="tab" aria-controls="Ayer" aria-selected="true">Ultimos 30 dias</a>                        
                    </li>
                    <li class="nav-item" style="margin: 0px;">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#restaurantes" role="tab" aria-controls="Ayer" aria-selected="true">El mes pasado</a>                        
                    </li>
                    <li style="margin: 0px; padding-top: 8px;">
                        <i class="fa fa-calendar" style="color: #444; margin-right: 5px;"></i>
                        <input type="text" name="daterange" value="01/01/2018 - 01/15/2018" />
                    </li>
                </ul>
            </div>
        </div>
        
        
        <div class="panel">
            <div class="panel-body">
              <h2>VISION GENERAL EN TIEMPO REAL</h2>
              <ul class="list-inline" style="display: table; margin-right: auto; margin-left: auto;" >
                    <li>
                        <div class="li-vision-general" style="background-color: #da70d6;">
                            <h2>6220</h2>
                            <h5>Celulares Activos</h5>
                        </div>
                    </li>
                    <li>
                        <div class="li-vision-general" style="background-color: #ff4500;">
                            <h2>122</h2>
                            <h5>Conectados Ahora</h5>
                        </div>
                    </li>
                    <li>
                        <div class="li-vision-general" style="background-color: #228b22;">
                            <h2>45</h2>
                            <h5>Reservas</h5>
                        </div>
                    </li>
                    <li>
                        <div class="li-vision-general" style="background-color: #ffa500;">
                            <h2>689</h2>
                            <h5>Pedidos Delivery</h5>
                        </div>
                    </li>
                    <li>
                        <div class="li-vision-general" style="background-color: #da70d6;">
                            <h2>34</h2>
                            <h5>Cupones Pedidos</h5>
                        </div>
                    </li>
                    <li>
                        <div class="li-vision-general" style="background-color: #6495ed;">
                            <h2>934</h2>
                            <h5>Compartido en Redes</h5>
                        </div>
                    </li>
              </ul>
              
              <!--Diagrama en tiempo real-->
              <div>
                  
              </div>
              
          </div>
        </div>
        
        
        <div class="panel">
            <div class="panel-body">
                
              <ul class="list-inline" style="display: table; margin-right: auto; margin-left: auto;" >
                    <li>
                        <div class="li-platos-mas" >
                            <h5>LOS 15 PLATOS MAS</h5>  
                            <h5>SOLICITADOS</h5>  
                        </div>
                    </li> 
                    <li>
                        <div class="li-platos-mas" >
                            <h5>LOS 15 BEBIDAS</h5>  
                            <h5>MAS VENDIDAS</h5>  
                        </div>
                    </li> 
                    <li>
                        <div class="li-platos-mas" >
                            <h5>LOS 15 COCTELES</h5>  
                            <h5>MAS VENDIDOS</h5>  
                        </div>
                    </li> 
                    <li>
                        <div class="li-platos-mas" >
                            <h5>MESAS ATENDIDAS</h5>  
                            <h5>POR LOS MOZOS</h5>  
                        </div>
                    </li> 
              </ul>
                
              <h2>15 PLATOS MAS SOLICITADOS</h2>
              
              <table class="table-striped table-responsive" style=" margin-right: auto; margin-left: auto; text-align: center;">
                  <thead>
                    <tr>
                        <th></th>
                        <th width="75px"><h6 style="text-align: center;">ME GUSTA</h6></th>
                        <th width="80px"><h6 style="text-align: center;">COMENTARIOS</h6></th>
                        <th width="80px"><h6 style="text-align: center;">COMPARTIDOS</h6></th>
                        <th width="75px"><h6 style="text-align: center;">DELIVERY</h6></th>
                        <th width="75px"><h6 style="text-align: center;">TIEMPO EN VIDEO</h6></th>
                        <th width="75px"><h6 style="text-align: center;">PEDIDOS</h6></th>
                    </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>
                              <table style="width: 440px;" class="table-responsive">
                                  <tr>
                                      <td><img src="../dist/img/sample_plato.png" width="90px" height="70px" style="margin: 15px;"/></td>
                                      <td><h4>TITULO DEL PLATO</h4><h5>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las....</h5></td>
                                  </tr>
                              </table>
                          </td>
                          <td>2</td>
                          <td>0</td>
                          <td>0</td>
                          <td>65</td>
                          <td>40</td>
                          <td>86.96</td>
                      </tr>
                      <tr>
                          <td>
                              <table style="width: 440px;" class="table-responsive">
                                  <tr>
                                      <td><img src="../dist/img/sample_plato.png" width="90px" height="70px" style="margin: 15px;"/></td>
                                      <td><h4>TITULO DEL PLATO</h4><h5>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las....</h5></td>
                                  </tr>
                              </table>
                          </td>
                          <td>2</td>
                          <td>0</td>
                          <td>0</td>
                          <td>65</td>
                          <td>40</td>
                          <td>86.96</td>
                      </tr>
                      <tr>
                          <td>
                              <table style="width: 440px;" class="table-responsive">
                                  <tr>
                                      <td><img src="../dist/img/sample_plato.png" width="90px" height="70px" style="margin: 15px;"/></td>
                                      <td><h4>TITULO DEL PLATO</h4><h5>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las....</h5></td>
                                  </tr>
                              </table>
                          </td>
                          <td>2</td>
                          <td>0</td>
                          <td>0</td>
                          <td>65</td>
                          <td>40</td>
                          <td>86.96</td>
                      </tr>
                      <tr>
                          <td>
                              <table style="width: 440px;" class="table-responsive">
                                  <tr>
                                      <td><img src="../dist/img/sample_plato.png" width="90px" height="70px" style="margin: 15px;"/></td>
                                      <td><h4>TITULO DEL PLATO</h4><h5>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las....</h5></td>
                                  </tr>
                              </table>
                          </td>
                          <td>2</td>
                          <td>0</td>
                          <td>0</td>
                          <td>65</td>
                          <td>40</td>
                          <td>86.96</td>
                      </tr>
                      <tr>
                          <td>
                              <table style="width: 440px;" class="table-responsive">
                                  <tr>
                                      <td><img src="../dist/img/sample_plato.png" width="90px" height="70px" style="margin: 15px;"/></td>
                                      <td><h4>TITULO DEL PLATO</h4><h5>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las....</h5></td>
                                  </tr>
                              </table>
                          </td>
                          <td>2</td>
                          <td>0</td>
                          <td>0</td>
                          <td>65</td>
                          <td>40</td>
                          <td>86.96</td>
                      </tr> 
                  </tbody>
              </table>
            </div>
        </div>
        
        
        <div class="panel">
            <div class="panel-body">                
                <h2>SEGMENTACION</h2>         
                <div class="row my-2" style="max-width: 1200px; margin-right: auto; margin-left: auto;">
            
                    <div class="col-md-5 py-1">
                        <h3>SEXO</h3>  
                        <div class="card">
                            <div id="canvas-holder" style="width:400px;">
                                <canvas id="chart-area"></canvas>
                            </div> 

                            <div id="chartjs-tooltip"></div>
                        </div>
                    </div>

                    <div class="col-md-5 py-1">
                        <div class="card">
                            <div class="card-body">
                                <div id="canvas-holder" style="max-width:550px;">
                                    <canvas id="canvas3"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
            
            
            
            <div class="panel-body">                       
                <div class="row my-2" style="max-width: 1200px; margin-right: auto; margin-left: auto;">
             
                    <div class="col-md-5 py-1">
                        <h3>PAISES DE LOS COMENSALES</h3> 
                        <div class="card">
                            <div id="canvas-holder" style="width:400px;">
                                <canvas id="chart-area2"></canvas>
                            </div> 

                            <div id="chartjs-tooltip"></div>
                        </div>
                    </div>

                    <div class="col-md-5 py-1">
                        <h3>CIUDADES DE LOS COMENSALES</h3> 
                        <div class="card">
                            <div class="card-body" style="height: 300px; width: 500px; overflow-y: visible;">
                                <table class="table table-responsive">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="font-size: 0.8em;">21.46%</td>
                                            <td style="font-size: 0.8em;">256</td>
                                            <td style="font-size: 0.8em;">Buenos Aires, Ciudad Autonoma de Buenos Aires, Argentina</td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 0.8em;">21.46%</td>
                                            <td style="font-size: 0.8em;">256</td>
                                            <td style="font-size: 0.8em;">Buenos Aires, Ciudad Autonoma de Buenos Aires, Argentina</td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 0.8em;">21.46%</td>
                                            <td style="font-size: 0.8em;">256</td>
                                            <td style="font-size: 0.8em;">Buenos Aires, Ciudad Autonoma de Buenos Aires, Argentina</td>
                                        </tr>
                                    </tbody>                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
            
            
        <div class="panel">
            
              
            <div class="panel-body" style="max-width: 1200px; margin-right: auto; margin-left: auto;">       
                <h2>INCREMENTO DE CONTACTOS</h2>    
                <div class="row my-2" style="max-width: 1200px; margin-right: auto; margin-left: auto;">
            
                    <div class="col-md-2 py-1" style="width: 280px; padding: 15px; border: 1px solid #ddd;"> 
                        <div class="card" style="border: 0px; float: left; width: 90px; width: 100px; text-align: center; color: #dfdfdf;">  
                            <h4>50</h4>
                            <h6>aumento de contactos </h6>
                            <h6>yesterday</h6> 
                            <button style="background-color: #fff;">Who?</button>
                        </div>
                        <div class="card" style="border: 0px; float: right; width: 110px; text-align: center; color: #dfdfdf;">  
                            <h4>1016</h4>
                            <h6>aumento de contactos </h6>
                            <h6>last 7 days</h6> 
                            <button style="background-color: #fff;">Who?</button>
                        </div>
                        <div class="card" style="border: 0px; width: 110px; text-align: center; margin-right: auto; margin-left: auto; color: #dfdfdf;">  
                            <button style="margin-top: 7px; background-color: #fff;">Vista previa</button>
                            <h4>88920</h4>
                            <h6>todos los contactos</h6> 
                            <button style="background-color: #fff;">Who?</button>
                        </div>
                    </div>

                    <div class="col-md-5 py-1">
                        <div class="card">
                            <div class="card-body">
                                <div id="canvas-holder" style="max-width:600px;">
                                    <canvas id="canvas4"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
            
            
            
        </div>
        
    </div>
</section>
<script> 
var randomScalingFactor = function() {
        return Math.round(Math.random() * 100);
};


//para basic
var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
var color = Chart.helpers.color;
var barChartData = {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
                label: 'Dataset 1',
                backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
                borderColor: window.chartColors.red,
                borderWidth: 1,
                data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor()
                ]
        }, {
                label: 'Dataset 2',
                backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
                borderColor: window.chartColors.blue,
                borderWidth: 1,
                data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor()
                ]
        }]

};

//para dona, la variable
var config = {
        type: 'pie',
        data: {
                datasets: [{
                        data: [
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor()
                        ],
                        backgroundColor: [
                                window.chartColors.red,
                                window.chartColors.orange,
                                window.chartColors.yellow,
                                window.chartColors.green,
                                window.chartColors.blue
                        ],
                        label: 'Dataset 1'
                }],
                labels: [
                        'Red',
                        'Orange',
                        'Yellow',
                        'Green',
                        'Blue'
                ]
        },
        options: {
                responsive: true
        }
};

window.onload = function() {
        
    //para dona
    var ctx = document.getElementById('chart-area').getContext('2d');
    window.myPie = new Chart(ctx, config);
    var ctx2 = document.getElementById('chart-area2').getContext('2d');
    window.myPie = new Chart(ctx2, config);

    //basico
    var ctx3 = document.getElementById('canvas3').getContext('2d');
        window.myBar = new Chart(ctx3, {
                type: 'bar',
                data: barChartData,
                options: {
                        responsive: true,
                        legend: {
                                position: 'top'
                        },
                        title: {
                                display: true,
                                text: 'Chart.js Bar Chart'
                        }
                }
    });
        
    //basico
    var ctx3 = document.getElementById('canvas4').getContext('2d');
        window.myBar = new Chart(ctx3, {
                type: 'bar',
                data: barChartData,
                options: {
                        responsive: true,
                        legend: {
                                position: 'top'
                        },
                        title: {
                                display: true,
                                text: 'Chart.js Bar Chart'
                        }
                }
    });
};
/*
document.getElementById('randomizeData').addEventListener('click', function() {
        config.data.datasets.forEach(function(dataset) {
                dataset.data = dataset.data.map(function() {
                        return randomScalingFactor();
                });
        });

        window.myPie.update();
});
*/
var colorNames = Object.keys(window.chartColors);
document.getElementById('addDataset').addEventListener('click', function() {
        var newDataset = {
                backgroundColor: [],
                data: [],
                label: 'New dataset ' + config.data.datasets.length,
        };

        for (var index = 0; index < config.data.labels.length; ++index) {
                newDataset.data.push(randomScalingFactor());

                var colorName = colorNames[index % colorNames.length];
                var newColor = window.chartColors[colorName];
                newDataset.backgroundColor.push(newColor);
        }

        config.data.datasets.push(newDataset);
        window.myPie.update();
});

document.getElementById('removeDataset').addEventListener('click', function() {
        config.data.datasets.splice(0, 1);
        window.myPie.update();
});
</script>
		
<script>
$(function() {
     
    $('input[name="daterange"]').daterangepicker({
      opens: 'left'
    }, function(start, end, label) {
      console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
    });
});
</script>

@endsection