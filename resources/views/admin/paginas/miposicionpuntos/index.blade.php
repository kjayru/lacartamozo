@extends('admin.layout.master')

@section('content')

<section class="content" style="padding-right: 0px; background-color: #f7f7f7;">

    <div width="100%"  class="  inline-block" style="background-color: #fff;"> 
        <button type="button" class="btn btn-light" style="margin:8px; background-color: #fff; color: #000; cursor: none;">
            <h3 style="margin:10px;">MI POSICION - PUNTOS</h4>
        </button>
        <button onclick="getRestaurantes()" type="button" class="btn btn-light" style="margin:8px; background-color: #ff4500; color: #fff;">
            <h4 style="margin:10px;">RESTAURANTES</h4>
        </button>
        <button onclick="getCervecerias()" type="button" class="btn btn-light" style="margin:8px; background-color: #228b22; color: #fff;">
            <h4 style="margin:10px;">CERVECERIAS</h4>
        </button>
        <button onclick="getParrillas()" type="button" class="btn btn-light" style="margin:8px; background-color: #ffa500; color: #fff;">
            <h4 style="margin:10px;">PARRILLAS</h4>
        </button>
        <button onclick="getComidasRapidas()" type="button" class="btn btn-light" style="margin:8px; background-color: #da70d6; color: #fff;">
            <h4 style="margin:10px;">COMIDA RAPIDA</h4>
        </button>
        <div type="button" class="btn btn-light" style="margin:8px; background-color: #db7093; color: #fff;">
            <h4 id="celAct"  style="margin:10px;">6220 CELULAR ACTIVOS</h4>
        </button>
    </div>
<div id="wrappermini">
    
    <div id="one" style="margin: 0px; padding: 0px;">   
        
        <div class="box" id="content_leftpanel">  
        </div>
    </div>
    <div id="two" style="padding: 0px;"> 
        
        <div class="row" style="padding: 2px; margin: 0px;">
            <div class="col-md-12" style="padding: 0px;">
                <div class="box" style=" background-color: #d3d3d3;"> 
                    <h4>Mi Abono</h4>
                    <div class="progress" style="min-width: 300px; margin: 0; padding:0; height: 40px;">
                        <div id="p_usados" class="progress-bar progress-bar-warning" role="progressbar" style="width:70%; background-color: #fcfcfc; color: #000;">
                          355
                        </div> 
                        <div id="p_disp" class="progress-bar progress-bar-success" role="progressbar" style="width:30%;">
                          124
                        </div>
                    </div>
                    <div align="right">
                        <a href="#">Comprar puntos</a>
                    </div> 
                    <div style="width: 100%;">
                        <div style="background-color: #fff; border-radius: 5px; width: 20px; height: 20px; float: left; padding: 0;"></div>
                        <h4 style="margin:3px 0 0 12px; display: inline; ">Puntos utilizados</h4> 
                        <h4 id="p_usados3" style="margin:3px 0 0 8px; display: inline; ">355</h4>  
                    </div>
                    <div>
                        <div style="background-color: #090; border-radius: 5px; width: 20px; height: 20px; float: left; padding: 0;"></div>
                        <h4 style="margin:3px 0 0 12px; display: inline; ">Puntos utilizados</h4>  
                        <h4 id="p_disp3" style="margin:3px 0 0 8px; display: inline; ">124</h4>  
                    </div>
                    <div style="position: relative; width: 180px; height: 170px;">
                        <img id="img_rest" style="position: absolute;" src="/images/samplerestaurant.jpg" width="200px" heihgt="200px" style="margin-left: 20px; margin-top:20px;"/>
                        <div id="p_usados_2" align="center" style="position: absolute; background-color: #2b679b; padding: 2px; margin-left: 140px; margin-top: 20px; margin-right: 20px; min-width: 150px; color: #fff;" >
                            355 Puntos
                        </div>
                        <div id="pos_rubro" align="center" style="position: absolute; background-color: #2b679b; padding: 2px; margin-left: 140px; margin-top: 55px; margin-right: 20px; min-width: 150px; color: #fff;" >
                            12º en su rubro
                        </div>
                        <div id="pos_gen" align="center" style="position: absolute; background-color: #2b679b; padding: 2px; margin-left: 140px; margin-top: 90px; margin-right: 20px; min-width: 150px; color: #fff;" >
                            1259 en la general
                        </div> 
                    </div>
                    <h4>Asignar Puntos</h4> 
                    <div style="width: 210px; align-content: center; margin: 0 auto;">
                        <h3 id="test_pos" align="center" style=" margin: 0;  ">12º posicion</h3>
                        <input id="test_mas_puntos" type="number" step="1" min="1" max="10000" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="display: inline-block;">
                    </div>
                    <button class="btn btn-link">Quitar´puntos</button> 
                    <div style="width: 210px; margin: 0 auto;">
                        <button onclick="probarPuntos()" class="btn btn-success" style="margin: 7px;">PROBAR</button> 
                        <button onclick="aplicarPuntos()" class="btn btn-success" style="margin: 7;">ACEPTAR</button> 
                    </div>
                </div>
          </div>
        </div> 
    </div>
</div>
     
</section>
@include('admin.partial.scripts')
      
<script>  
    
    var puntajes = [];
    
    $(document).ready(function(){         
        $('#dtBasicExample').DataTable({
          "paging": true
        });
        $('.dataTables_length').addClass('bs-select'); 
        
        //TODO get lista de locales segun puntaje        
        //devuelve cantidad de celulares activos en los ultimos 30 dias
        $.get("testp.php").done( function (data){ 
            var celularesActivos = data.amount;
            $("#celAct").innerHTML = celularesActivos.toString() + " CELULARES ACTIVOS";
        });
        
        //TODO get status actual del restaurante 
        //envia id del cliente franquiciado o local
        //recibe: {'puntosusados': 1234, "puntosdisp": 324, ruta_foto: "de", "posicion_en _cat":12, "posicion_en_gen":1294, "puntajes":[1243,1222,1100] }
        // puntajes es la lista de puntos de mayor a menor        
        var id = getUrlParameter('id'); 
        if( id !== undefined ){
            $.get("testp.php",{idlocal: id}).done( function (data){ 
                
                var p_usados = data.puntosusados;
                var p_disp = data.puntosdisp;
                var ruta_foto = data.ruta_foto;
                var pos_cat = data.poscat;
                var pos_gen = data.posgen;
                puntajes = data.puntajes;
                
                var obj_p_usados = document.getElementById("#p_usados");
                var obj_p_disp  = document.getElementById("#p_disp");
                var obj_p_usados2  = document.getElementById("#p_usado2");
                var obj_pos_rubro  = document.getElementById("#pos_rubro");
                var obj_pos_gen  = document.getElementById("#pos_gen");
                var obj_img = document.getElementById("img_rest");
                var obj_p_usados3 = document.getElementById("#p_usados3");
                var obj_p_disp3  = document.getElementById("#p_disp3");
                
                var ptotal = parseInt(p_usados) + parseInt(p_disp);
                var w1 = parseInt(p_usados) / ptotal * 100;
                var w2 = parseInt(p_disp) / ptotal * 100;
                obj_p_usados.style = "width:"+w1+"%; background-color: #fcfcfc; color: #000;";
                obj_p_usados.innerHTML = parseInt(p_usados);
                obj_p_disp.style = "width:"+w2+"%;";
                obj_p_disp.innerHTML = parseInt(p_disp);
                obj_p_usados3.innerHTML = parseInt(p_usados);
                obj_p_disp3.innerHTML = parseInt(p_disp);
                obj_p_usados2.innerHTML = parseInt(p_usados) + " puntos";
                obj_pos_rubro.innerHTML = parseInt(pos_cat) + "en su rubro";
                obj_pos_gen.innerHTML = parseInt(pos_gen) + "en la geneeral";
                obj_img.src = ruta_foto;
                
            });
        }
        
        getRestaurantes();
    });
    
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

</script>

<script>

    function getRestaurantes()
    {
        //se asume que a la pagina se indica el id del cliente de franquiciado o id de local
        //esto para resaltar la posicion del rest, en caso de cuenta admin, no resaltaria  
        var id = getUrlParameter('id'); 
        
        //TODO
        //envia: id del local o cliente franquiciado, tipo = 0
        //devuelve [{id, posicion, puntos, visitas, nombrecomercio}, {...}, ..]
        // 0 indica todos los clientes de franquiciado o locales
        $.get("testp2.php",{id: id, tipo: 0} ).done( function (data){ 
            fillTable(data);
        });
        
        //borrar solo demo
        demoFillTable(30);
    }
    
    function getCervecerias()
    { 
        var id = getUrlParameter('id'); 
        //TODO
        //envia: id del local o cliente franquiciado, tipo = 1
        //devuelve [{id, posicion, puntos, visitas, nombrecomercio}, {...}, ..]
        // 1 indica todos los clientes de franquiciado o locales de,l rubro cervecerias
        // 0,1,2,3 puede ser una tabla en la db con tipo de comercios
        $.get("testp2.php",{id: id, tipo: 1} ).done( function (data){ 
            fillTable(data);
        });
        demoFillTable(10);
    }
    
    function getComidasRapidas()
    { 
        var id = getUrlParameter('id'); 
        //TODO
        //envia: id del local o cliente franquiciado, tipo = 2
        //devuelve [{id, posicion, puntos, visitas, nombrecomercio}, {...}, ..]
        // 2 indica todos los clientes de franquiciado o locales del rubro comidas rapidas
        // 0,1,2,3 puede ser una tabla en la db con tipo de comercios
        $.get("testp2.php",{id: id, tipo: 2} ).done( function (data){ 
            fillTable(data);
        });
        demoFillTable(15);
    }
    
    function getParrillas()
    { 
        var id = getUrlParameter('id'); 
        //TODO
        //envia: id del local o cliente franquiciado, tipo = 3
        //devuelve [{id, posicion, puntos, visitas, nombrecomercio}, {...}, ..]
        // 3 indica todos los clientes de franquiciado o locales del rubro parrillas
        // 0,1,2,3 puede ser una tabla en la db con tipo de comercios
        $.get("testp2.php",{id: id, tipo: 3} ).done( function (data){ 
            fillTable(data);
        });
        demoFillTable(5);
    }
    
    function getNumeroCelularesACtivos()
    {
        //TODO, obtener lista de usuario que hicieron algun cambio en los ultimos 30 dias
        $.get("testp.php").done( function (data){ 
            var celularesActivos = data.amount;
            $("#celAct").innerHTML = celularesActivos.toString() + " CELULARES ACTIVOS";
        });
    }


    function fillTable(records)
    {
        var content_leftpanel = document.getElementById("content_leftpanel");
        content_leftpanel.innerHTML = "";
        content_leftpanel.style = 'background-color: #d3d3d3;';
        
        var div1 = document.createElement("div");
        div1.className = "box";
        div1.style = 'background-color: #d3d3d3;';
        
        var div2 = document.createElement("div");
        div2.className = "box-body2";
        
        var table1 = document.createElement("table");
        table1.id = "idposiciones";
        table1.className = "table table-responsive ";
        table1.style = "color: #000;";
        
        var thead1 = table1.createTHead();
        var rowHead = thead1.insertRow(0);
        var cell0 = document.createElement("th");
        var cell1 = document.createElement("th");
        var cell2 = document.createElement("th");
        var cell3 = document.createElement("th");
                
        cell0.innerHTML = "";
        cell0.style = "width: 240px;border-bottom: 3px solid #fff;"; 
        cell1.innerHTML = "Posicion";
        cell1.style = "width: 70px;border-bottom: 3px solid #fff;"; 
        cell2.innerHTML = "Puntos";
        cell2.style = "width: 90px;border-bottom: 3px solid #fff;"; 
        cell3.innerHTML = "Comercio";
        cell3.style = "width: 280px;border-bottom: 3px solid #fff;"; 
         
        rowHead.appendChild(cell0);
        rowHead.appendChild(cell1);
        rowHead.appendChild(cell2);
        rowHead.appendChild(cell3);
        
        var tbody1 = document.createElement("tbody"); 
        var sz = records.length; 
        var max_visitas = parseInt(records[0].visitas);
        if( max_visitas === 0 ) max_visitas = 1;
        for(i=0; i<sz; i++) //para cada fila
        {
            var record = records[i];
            
            var tr1 = document.createElement('tr');
            tr1.height = '50px';
            
            var td0 = document.createElement('td');
            td0.style = "border-bottom: 1px solid #fff;";
            var div5 = document.createElement('div');
            div5.className = "progress";
            div5.style = "padding: 0px; margin: 3px;";
            
            var var6 = parseInt(record.visitas)/max_visitas*100;
            var div6 = document.createElement('div');
            div6.className = "progress-bar progress-bar-striped"; 
            div6.role = "progressbar";
            div6.setAttribute('aria-valuenow', record.visitas);
            div6.setAttribute('aria-valuemin', 0);
            div6.setAttribute('aria-valuemax', max_visitas); 
            div6.style = "width: "+var6+"%; height: 50px; padding: 0px;";
            
            var span1 = document.createElement("span");
            span1.className = "sr_only";
            span1.innerHTML = record.visitas + " visitas";
            
            div6.appendChild(span1);
            div5.appendChild(div6);
            td0.appendChild(div5);
             
            //devuelve [{id, posicion, puntos, visitas, nombrecomercio}, {...}, ..]
            var tempData = [];
            tempData.push( record.posicion );
            tempData.push( record.puntos );
            tempData.push( record.nombrecomercio );
            
            tr1.appendChild(td0);
                
            for (var j = 0; j < 3; j++) { //para cada columna
                var td1 = document.createElement('td');
                td1.align = "center";
                td1.style = "border-bottom: 1px solid #fff;";
                td1.innerHTML = tempData[j];
                tr1.appendChild(td1);
            }
            tbody1.appendChild(tr1);
        }
        table1.appendChild(tbody1);
        
        div1.appendChild(div2);
        div1.appendChild(table1);
        content_leftpanel.appendChild(div1); 
    }

    function probarPuntos()
    {
        var obj1 = document.getElementById("test_mas_puntos");
        var obj2 = document.getElementById("p_disp");
        var obj3 = document.getElementById("test_pos");
        
        var temp = parseInt(obj1.innerHTML);
        var curr = parseInt(obj2.innerHTML);
        
        var nuevo_puntaje = temp + curr;
        
        var idx = 0;
        for(i=0; i<puntajes.length; i++) //puntajes esta de mayor a menor
        {
            if( puntajes[i] < nuevo_puntaje )
            {
                idx = i;
                break;
            }
        }
        
        //idx inicia de cero
        obj3.innerHTML = (idx+1).toString() + "º posicion"; 
    }

    function aplicarPuntos()
    {
        //TODO enviar al servidor nuevo puntaje 
        var obj1 = document.getElementById("test_mas_puntos");
        var obj2 = document.getElementById("p_disp");
        
        var temp = parseInt(obj1.innerHTML);
        var curr = parseInt(obj2.innerHTML);
        
        var id = getUrlParameter('id'); 
        var nuevo_puntaje = temp + curr;
        $.post("testp.php",{id: id, puntaje: nuevo_puntaje}).done( function (data){ 
            var celularesActivos = data.amount;
            $("#celAct").innerHTML = celularesActivos.toString() + " CELULARES ACTIVOS";
        });
        
    }
    
    
    function demoFillTable(cant)
    {
        var content_leftpanel = document.getElementById("content_leftpanel");
        content_leftpanel.innerHTML = "";
        content_leftpanel.style = 'background-color: #d3d3d3;';
        
        var div1 = document.createElement("div");
        div1.className = "box";
        div1.style = 'background-color: #d3d3d3;';
        
        var div2 = document.createElement("div");
        div2.className = "box-body2";
        
        var table1 = document.createElement("table");
        table1.id = "idposiciones";
        table1.className = "table table-responsive ";
        table1.style = "color: #000;";
        
        var thead1 = table1.createTHead();
        var rowHead = thead1.insertRow(0);
        var cell0 = document.createElement("th");
        var cell1 = document.createElement("th");
        var cell2 = document.createElement("th");
        var cell3 = document.createElement("th");
                
        cell0.innerHTML = "";
        cell0.style = "width: 480px;border-bottom: 3px solid #fff;"; 
        cell1.innerHTML = "Posicion";
        cell1.style = "width: 70px;border-bottom: 3px solid #fff;"; 
        cell2.innerHTML = "Puntos";
        cell2.style = "width: 90px;border-bottom: 3px solid #fff;"; 
        cell3.innerHTML = "Comercio";
        cell3.style = "width: 280px;border-bottom: 3px solid #fff;"; 
         
        rowHead.appendChild(cell0);
        rowHead.appendChild(cell1);
        rowHead.appendChild(cell2);
        rowHead.appendChild(cell3);
        
        var tbody1 = document.createElement("tbody"); 
        for(i=0; i<cant; i++) //para cada fila
        {
            var tr1 = document.createElement('tr');
            tr1.height = '50px';
            
            var td0 = document.createElement('td');
            td0.style = "border-bottom: 1px solid #fff;";
            var div5 = document.createElement('div');
            div5.className = "progress";
            div5.style = "padding: 0px; margin: 3px;";
            
            var div6 = document.createElement('div');
            div6.className = "progress-bar progress-bar-striped";
            var6 = parseInt(100/cant*(cant-i));
            div6.role = "progressbar";
            div6.setAttribute('aria-valuenow', var6);
            div6.setAttribute('aria-valuemin', 0);
            div6.setAttribute('aria-valuemax', 100); 
            div6.style = "width: "+var6+"%; height: 50px; padding: 0px;";
            
            var span1 = document.createElement("span");
            span1.className = "sr_only";
            span1.innerHTML = var6 + " visitas";
            span1.style = "color: #fff;";
            
            div6.appendChild(span1);
            div5.appendChild(div6);
            td0.appendChild(div5);
             
            
            
            tr1.appendChild(td0);
                
            for (var j = 1; j < 4; j++) { //para cada columna
                var td1 = document.createElement('td');
                td1.align = "center";
                td1.style = "border-bottom: 1px solid #fff;";
                td1.innerHTML = j.toString();
                tr1.appendChild(td1);
            }
            tbody1.appendChild(tr1);
        }
        table1.appendChild(tbody1);
        
        div1.appendChild(div2);
        div1.appendChild(table1);
        content_leftpanel.appendChild(div1); 
    }
    
    
</script>
 
@endsection