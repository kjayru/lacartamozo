@extends('admin.layout.master')

@section('content')

<!--TODO RESERVAS ES OPR REST-->

<section class="content" style="padding-right: 0px; background-color: #f7f7f7;">
     
<div id="wrappermini">
    <div id="one">  
    
        <!-- /.box-header -->
         <nav class="navbar navbar-inverse" style="margin: 0px; padding: 0px; background-color: #555;">
              <div class="container-fluid" style="margin: 0px; padding: 0px;">
                <div class="navbar-header" style="margin: 0px; padding: 0px;">
                  <a class="navbar-brand" href="#" style="margin-left:8px; color: #fff;" >RESERVAS</a>
                </div>  
                <button class="btn btn-warning navbar-btn navbar-right " onclick="nuevaReserva()"  style="margin-right: 12px;">Nueva Reserva</button> 
              </div>
		</nav> 
			
        <div class="box2" style="margin: 0; padding: 0; padding-bottom: 25px; background-color: #fff;">
             
            <!-- /.box-body --> 
            <div id="body_pedidos" class="box-body" style=" padding: 0;margin: 0; height: 1700px; min-width: 150px; overflow-y: auto;">  
            </div>
        </div>
    </div>
    
    <div id="two">  
         <div class="row">
          <div class="col-md-12" style="padding-top: 0px;";>
            <div class="box"> 
                
                <form class="form-horizontal" id="fr-franchise" method="post" action="#"> 
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
@include('admin.partial.scripts')


<script> 
    
    var two = document.getElementById("two").hidden = true;   
    var listaMesasQR = {};
    $(document).ready(function(){            
        //TODO, al ingresar a esta pagina se ingresa un id  dle cliente franquiciado o id del local        
        getPedidosVariosDias(); //demo, borrar cuando este completo
        //http://localhost/admin/reservas?id=5
        //caso de admin o administrador de franquicias se ingresa aqui desde seccion de franquicias 
        //envia id, fechaactual en utc horario
        //recibe dato: fecha, idpedido, fullname, personas, hora ingreso, hora salida, celular, sector, estado, puntaje
        //[ {fecha:yyyy-MM-dd HH:mm:ss, pedidos:[{idpedido, fullname, personas, ..},{idpedido, ...}, ...] }, {...} ]
        //NOTA: solo enviar los pedidos de la fecha de hoy, mañana y pasado mañana
        var currFecha = new Date();  
        //alert(currFecha.toISOString());
        var id = getUrlParameter('id'); 
        $.post("test0", { id: id, currfecha: currFecha.toISOString() }).done(function( data ) { 
            
            //para cada fecha
            for(i=0; i<data.length; i++)
            {

                var bpedidos = document.getElementById("body_pedidos");
                bpedidos.innerHTML = "";

                var pedidoEnFecha = data[i];
                var fecha1 = pedidoEnFecha.fecha;   
                getPedidoDia( bpedidos, fecha1, "dtBasicExample1"+i.toString()); 

            }
            
        });
    });
     
</script>

<script>

    var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = window.location.search.substring(1),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
            }
        }
    };

    function nuevaReserva()
    { 
        var two = document.getElementById("two");
        two.hidden = false;

        var record = document.getElementById("content_add_record"); 
        record.innerHTML = "";
        
        var horas_name = [];
        var horas_val = [];
        for(i=0;i<23;i++){ horas_name.push( i.toString() + ":00"); }
        for(i=0;i<23;i++){ horas_val.push( i ); }
     
        addTextForm(record, "nombre", "Nombre y Apellido");
        addNumberForm(record, "cantidad", "Cantidad de Personas", 0, 100, 1); 
        addSelectForm(record, "hinicio", "Horario Inicio (0-23h)", horas_name, horas_val);
        addSelectForm(record, "hfin", "Horario Fin (0-23h)",horas_name, horas_val);
        addTextForm(record, "sector", "Sector"); 
        addTextForm(record, "celular", "Celular");
        addTextForm(record, "estado", "Estado de la reserva");
        //TODO addBotonSubmit, envia al servidor para agregar un nuevo pedido
        //envias: nombre, personas, hinico, hfinal, sector, celular, estado e input oculto denominado  mesas[]
        addBotonSubmit(record);
        addBubTitle(record,"Verifique la disponibilidad de mesas");
        addCalendar(record, "fecha", "fecha");
        createBtnMM(record, "Verificar disponibilidad", function(){
            //TODO, al ingresar a esta pagina se ingresa un id  dle cliente franquiciado o id del local
            //http://localhost/admin/reservas?id=5
            //caso de admin o administrador de franquicias se ingresa aqui desde seccion de franquicias 
            var id = getUrlParameter('id'); 
            
            //TODO, Al seleccionar una fecha le server devuelve la lista de mesas
            //y los horarios reservados
            //ingresar data : data= {("idclientefranquiciado o local":"dd/MM/yyyy")}
            //devuelve data : data= [ {"idmesa":176,"nummesa":2,"horasreservadas":[8, 17, 21]} , {}, ... ]  // es por horas y de 0 a 23 horas
            //cambiar test.php
            var dia = $('#datetimepicker').val();
            if( dia === "" )
            {
                alert("Seleccione una fecha");
            }
            
            $.get( "test.php", { idlocal: id, fecha: dia }, function (mesasHoras){      
                var currHora = $('#hora option:selected').val();
                listaMesasQR = [];
                for( i = 0; i < mesasHoras.length; i++ )
                {
                    var mesaDisponible = true;
                    var mesaHora = mesasHoras[i];
                    for( j=0; j<mesaHora.horasresevadas.length; j++ )
                    {
                        if( currHora === mesaHora.horasresevadas[j] ){
                            mesaDisponible = false;
                            break;
                        }
                    }
                    
                    if( mesaDisponible === true ){ 
                        crearMesaDisponible(record, mesaHora.nummesa); 
                    }
                    else{ 
                        createBtnMesaDisable(record, mesaHora.nummesa, function(){});
                    }
                }
            } );
            
        }); 
        addSelectForm(record, "hora", "Hora", horas_name, horas_val); 
         
    }
    
    function crearMesaDisponible(record, numMesa)
    { 
        createBtnMesa(record, numMesa, function(){ 

            if( this.id === "btn_mesa_disable" ){
                return;
            }

            if( this.id === "btn_mesa" ){
                this.id = "btn_mesa_active";
                listaMesasQR.push( parseInt( this.innerHTML ) );
                addHiddenForm(record, "mesas[]", "hid"+this.innerHTML, this.innerHTML );
            }else
            {
                this.id = "btn_mesa"; 
                var idx = listaMesasQR.indexOf( parseInt( this.innerHTML ) ); 
                listaMesasQR.splice( idx ,1 ); 
                removeHiddenForm( "hid"+this.innerHTML  );
            }
        });
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
        
        var div0 = document.createElement("div");
        div0.style = "overflow-y: auto;";
        
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
        table1.className = "table table-responsive table-striped";
        table1.style = "color: #000;";
        
        var thead1 = table1.createTHead();
        thead1.style = "background-color: #ffc057; color: #444;";
        switch( days ){
            case 0: 
                thead1.style = "background-color: #FFC057";
                break;
            case 1: 
                thead1.style = "background-color: #ADFF2F";
                break;
            default: 
                thead1.style = "background-color: #FFC057";
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
        cell0.style = "width: 50px;";
        cell0.className = "text-center";
        cell1.innerHTML = "Nombre y Apellido";
        cell1.width = 220;
        cell1.className = "text-center";
        cell2.innerHTML = "Cant. de Personas";
        cell2.className = "text-center";
        cell3.innerHTML = "Horario de ingreso";
        cell3.className = "text-center";
        cell4.innerHTML = "Horario de salida";
        cell4.className = "text-center";
        cell5.innerHTML = "Celular";
        cell5.className = "text-center";
        cell5.width = 90;
        cell6.innerHTML = "Sector";
        cell6.className = "text-center";
        cell7.innerHTML = "Estado";
        cell7.className = "text-center";
        cell8.innerHTML = "Puntaje";
        cell8.className = "text-center";
        
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
        
        //TODDO completar con codigo
        for(i=0; i<10; i++) //para cada fila
        {
            var tr1 = document.createElement('tr');
            for (var j = 0; j < 9; j++) { //para cada columna
                var td1 = document.createElement('td');
                td1.align = "center";
                td1.innerHTML = j.toString();
                tr1.appendChild(td1);
            }
            tbody1.appendChild(tr1);
        }
        table1.appendChild(tbody1);
        
        div0.appendChild(div1);
        div0.appendChild(table1);
        parent.appendChild(div0);
        
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

    var titulo_seccion = document.getElementById("titulo_seccion");
    titulo_seccion.innerHTML = "RESERVAS";
</script>


@endsection