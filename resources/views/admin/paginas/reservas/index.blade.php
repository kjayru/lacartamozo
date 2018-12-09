@extends('admin.layout.master')

@section('content')

<!--TODO RESERVAS ES OPR REST-->

<section class="content" style="padding-right: 0px; background-color: #f7f7f7;">
     
<div id="wrappermini">
    <div id="one" style="margin: 0px; padding: 0px; ">  
        <div class="box2" style="margin: 0; padding: 0; padding-bottom: 25px; background-color: #fff;">
            
            <!-- /.box-header -->
            <div class="box-header2" style="min-width: 300px; background-color: #696969; height: 55px;">
                <h3 style="margin: 0; padding: 0; width: 190px; float: left;">RESERVAS</h3> 
                <div style="float:left; margin-right: 15px; margin: 0; padding: 0; float: right;">
                    <button  class="hidden-xs" onclick="nuevaReserva()" name="" value="ok" style="background-color: #cd853f; margin-top: -2px; min-width: 140px; height: 36px; font-size: 1.1em; border: 0px;">Nueva Reserva</button>
                </div>
            </div>
            <!-- /.box-body --> 
            <div id="body_pedidos" class="box-body" style=" padding: 0;margin: 0; height: 1700px; min-width: 150px; overflow-y: auto;">  
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
    
    $(document).ready(function(){          
        getPedidosVariosDias();
    });
     
</script>

<script>
    
    function nuevaReserva()
    { 
        var two = document.getElementById("two");
        two.hidden = false;

        var record = document.getElementById("content_add_record"); 
        record.innerHTML = "";
        
        var cantidad = ["1","2","3","4","5","6","7","8","9","10","11","12"];
        var estados = ["reservado","en proceso", "finalizado"];
        var horas = ["6:00","7:00","8:00","9:00","10:00","11:00","12:00","13:00","14:00"," 15:00",
        "16:00","17:00","118:00","19:00","02:00","21:00"];
         
        addTextForm(record, "nombre", "Nombre y Apellido");
        addSelectForm(record, "cantidad", "Cantidad de Personas",cantidad); 
        addTextForm(record, "hinicio", "Horario Inicio");
        addTextForm(record, "hfin", "Horario Fin");
        addSelectForm(record, "sector", "Sector", estados); 
        addTextForm(record, "celular", "Celular");
        addTextForm(record, "estado", "Estado de la reserva");
        addCalendar(record);
        addSelectForm(record, "hora", "Hora", horas); 
        
        //para el numero de mesas en el rest
        for(i=0; i<18; i++){
            createBtnMesa(record, i.toString(), function(){ 
                
                if( this.id === "btn_mesa_disable" ){
                    continue;
                }
                
                if( this.id === "btn_mesa" ){
                    this.id = "btn_mesa_active";
                    listaMesasQR.push( parseInt( this.innerHTML ) );
                }else
                {
                    this.id = "btn_mesa"; 
                    var idx = listaMesasQR.indexOf( parseInt( this.innerHTML ) ); 
                    listaMesasQR.splice( idx ,1 ); 
                }
            });
        } 
        
        for(i=0; i<5; i++){
            createBtnMesaDisable(record, i.toString(), function(){ 
                 
            });
        } 
                 
        addBotonSubmit(record);        
    }
    
    function getPedidosVariosDias()
    {
        var bpedidos = document.getElementById("body_pedidos");
        bpedidos.innerHTML = "";
        
        var testFecha1 = new Date(); 
        var f1 = testFecha1.toISOString();
        testFecha1.setDate(testFecha1.getDate() + 1);
        var f2 = testFecha1.toISOString();
        testFecha1.setDate(testFecha1.getDate() + 1);
        var f3 = testFecha1.toISOString();
        getPedidoDia( bpedidos, f1, "dtBasicExample1");
        getPedidoDia( bpedidos, f2, "dtBasicExample2");
        getPedidoDia( bpedidos, f3, "dtBasicExample3");
    }
    
    //fecha en formato YYYY-MM-DDTHH:MM:SSZ
    function getPedidoDia(parent, fecha, idtable)
    {
        //mas de 10 dias de diferencia return
        var currFecha = new Date();
        var showPedidosFecha = new Date( fecha );
        var days = daysBeetween(showPedidosFecha, currFecha);
        if( days > 10 ) return;
        
        var div1 = document.createElement("div");
        div1.className = "box-header4";
        div1.style = "font-size: 1.5em;";
        switch( days ){
            case 0:
                div1.innerHTML = "PARA EL DIA DE HOY"; 
                break;
            case 1:
                div1.innerHTML = "PARA EL DIA DE MAÑANA"; 
                break;
            default:
                div1.innerHTML = "PARA EL " + getDayOfWeek(showPedidosFecha) + " " + getDayOnMonth(showPedidosFecha) ; 
                break; 
        }
        
        var table1 = document.createElement("table");
        table1.id = idtable;
        table1.className = "table table-responsive table-hover table-striped";
        table1.style = "color: #000;";
        
        var thead1 = table1.createTHead();
        thead1.style = "background-color: #ffc057; color: #444;";
        switch( days ){
            case 0: 
                thead1.style = "background-color: #ADFF2F";
                break;
            case 1: 
                thead1.style = "background-color: #FFC057";
                break;
            default: 
                thead1.style = "background-color: #ADFF2F";
                break; 
        }
        var rowHead = thead1.insertRow(0);
        var cell0 = document.createElement("th");
        var cell1 = document.createElement("th");
        var cell2 = document.createElement("th");
        var cell3 = document.createElement("th");
        var cell4 = document.createElement("th");
        var cell5 = document.createElement("th");
        var cell6 = document.createElement("th");
        var cell7 = document.createElement("th");
        var cell8 = document.createElement("th");
        cell0.innerHTML = "Id";
        cell0.style = "width: 70px; padding-left: 25px;";
        cell1.innerHTML = "Nombre y Apellido";
        cell2.innerHTML = "Cant. de Personas";
        cell3.innerHTML = "Horario de ingreso";
        cell4.innerHTML = "Horario de salida";
        cell5.innerHTML = "Celular";
        cell6.innerHTML = "Sector";
        cell7.innerHTML = "Estado";
        cell8.innerHTML = "Puntaje";
        
        rowHead.appendChild(cell0);
        rowHead.appendChild(cell1);
        rowHead.appendChild(cell2);
        rowHead.appendChild(cell3);
        rowHead.appendChild(cell4);
        rowHead.appendChild(cell5);
        rowHead.appendChild(cell6);
        rowHead.appendChild(cell7);
        rowHead.appendChild(cell8);
        
        var tbody1 = document.createElement("tbody");
        
        for(i=0; i<10; i++) //para cada fila
        {
            var tr1 = document.createElement('tr');
            for (var j = 0; j < 9; j++) { //para cada columna
                var td1 = document.createElement('td');
                td1.innerHTML = j.toString();
                tr1.appendChild(td1);
            }
            tbody1.appendChild(tr1);
        }
        table1.appendChild(tbody1);
        
        
        parent.appendChild(div1);
        parent.appendChild(table1);
                 
        var nameidtable = "#"+idtable;
        $(nameidtable).DataTable({
          "paging": true,
          "lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "All"]]
        });
         
    }

    function daysBeetween( date2, currDate ) {   //date2 > currDate, se asume
        
        var new_year = date2.getFullYear();
        var curr_year = currDate.getFullYear();
        var new_month = date2.getMonth();
        var curr_month = currDate.getMonth();
        var new_day = date2.getDate();
        var curr_day = currDate.getDate();
        
        if( new_year === curr_year )
        {
            if( new_month === curr_month ){
                return new_day - curr_day;
            }
            else
            {
                var diff_month = new_month - curr_month;
                var num_day_of_month = getNumDaysOfMonth( curr_year, curr_month );
                var left_days_to_month = num_day_of_month - curr_day; 
                var diff_days = left_days_to_month + (diff_month-1)*31 + new_day;
                return diff_days;
            }
        }
        else{
            return 365*(new_year - curr_year);
        }
        
     };
     
     function getNumDaysOfMonth(month, year)
     {
        return new Date(year, month, 0).getDate();
     }
     
     function getDayOfWeek(currDate)
     {
        var days = ["DOMINGO", "LUNES", "MARTES", "MIERCOLES", "JUEVES", "VIERNES", "SABADO"];
        return days[currDate.getDay()];
     }
     
     function getDayOnMonth(currDate)
     {
         var months = ["ENERO", "FEBRERO", "MARZO", "ABRIL", "MAYO", "JUNIO", "JULIO", "AGOSTO", "SETIEMBRE", "OCTUBRE", "NOVIEMBRE", "DICIEMBRE"];
         var str = currDate.getDate() + " de " + months[ currDate.getMonth() ];
         return str;
     } 
     
</script>
 
<script type="text/javascript">
    $(function() {
        $( "#datetimepicker" ).datepicker();
    });
</script>


@endsection