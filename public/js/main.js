
/**mapa*/
var marker;
      
function initMap() {
    
    var myLatLng = {lat: 40.4381307, lng: -3.8199653 };  

var map = new google.maps.Map(document.getElementById('googleMap'), {
    zoom: 12,

    center: {lat: 40.4381307, lng: -3.8199653 }

});
var geocoder = new google.maps.Geocoder();


$("#address").blur(function(){
    geocodeAddress(geocoder, map);
});
var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'das'
});
}

function geocodeAddress(geocoder, resultsMap) {
var address = document.getElementById('address').value;
geocoder.geocode({'address': address}, function(results, status) {
    if (status === 'OK') {
    resultsMap.setCenter(results[0].geometry.location);
    var lat = results[0].geometry.location.lat();
    var lng = results[0].geometry.location.lng();
    
    $("#latitude").val(lat);
    $("#longitude").val(lng);

    var marker = new google.maps.Marker({
        map: resultsMap,
        position: results[0].geometry.location
    });
    } else {
    alert('Geocode was not successful for the following reason: ' + status);
    }
});
}

initMap();

$(".btn-franciado-edit").on('click',function(e){
    e.preventDefault();
    let id = $(this).data('id');
    $.ajax({
        url:`/admin/franchisees/${id}/edit`,
        type:"GET",
        dataType:"json",
        beforeSend:function(){},
        success:function(response){
            console.log(response);
            $("#fr-franchise #names").val(response.names);
            
            $("#fr-franchise #cellphone").val(response.cellphone);
            $("#fr-franchise #city").val(response.city);
            $("#fr-franchise #mail").val(response.mail);
            $("#fr-franchise #province").val(response.province);
            $("#fr-franchise #address").val(response.address);
            
            $("#fr-franchise #franchise_id").val(response.id);

            $("#fr-franchise #classification_id").val(response.classification_id);
            $("#fr-franchise #package_id").val(response.package_id);

            $("#fr-franchise #metodo").val('PUT');
            $("#img-upload").attr("src",'/storage/franchise/'+response.avatar);

            

            var map = new google.maps.Map(document.getElementById('googleMap'), {
                zoom: 12,
            
                center: {lat: 40.4381307, lng: -3.8199653 }
            
            });
            var geocoder = new google.maps.Geocoder();
 
             geocodeAddress(geocoder, map);
            
        }
    });
});

$(".table-franquicia .estado").on('change',function(){
    let id = $(this).data('id');
    var token = $("#fr-franchise input[name='_token']").val();
    let data='';
    if($(this).data('estado')=="activo"){
         data = ({'id':id,'status':1,'_token':token,'_method':'PUT'});  
    }else{
         data = ({'id':id,'status':2,'_token':token,'_method':'PUT'});  
    }
    
    $.ajax({
        url:'/admin/franchisees-estado/'+id,
        type:"POST",
        dataType:"json",
        data:data,
        beforeSend:function(){},
        success:function(response){
           alert("estado actualizado");
        }
    });
});



$('#fr-franchise').on('submit', (function (e) {
    e.preventDefault()
    var id = $('#fr-franchise #franchise_id').val();
    var metodo = $('#fr-franchise #metodo').val();
    let url ='';
    if(metodo=='POST'){
        url ='/admin/franchisees/store';
    }else{
        url = '/admin/franchisees/' + id;
    }
    $.ajax({
        url: url,
      type: 'POST',
      data: new FormData(this),
      contentType: false,
      processData: false,
      success: function (response) {
          if(response.rpta=='ok'){
            window.location.reload();
          }
      },
      error: function (err) {
        console.log(err)
      }
    })
  }))

 $(".nuevo_franquiciado").on('click',function(e){
    e.preventDefault();
    $("#fr-franchise input[type=text]").val('');
    $("#fr-franchise select").val('');
    $("#img-upload").attr('src','');
    $('#fr-franchise #metodo').val('POST');
 });
  

//clients
$(".nuevo_cliente").on('click',function(e){
    e.preventDefault();
    $(".capabox").fadeOut(350,'swing');
    let id = $(this).data('franchiseid');
    $('#fr-clients #franchise_id').val(id);
    $("#fr-clients input[type=text]").val('');
    $("#fr-clients select").val('');
    $("#img-upload_cover").attr('src','');
    $("#img-upload_logo").attr('src','');
    
    $("#img-upload_f1").attr('src','');
    $("#img-upload_f2").attr('src','');
    $("#img-upload_f3").attr('src','');
    $("#img-upload_f4").attr('src','');
    $('#fr-clients #metodo').val('POST');

    $(".chk-service").attr('checked',false);
    $(".chk-config").attr('checked',false);
});


$('#fr-clients').on('submit', (function (e) {
    e.preventDefault();
   
   
    var id = $('#fr-clients #client_id').val();
    var metodo = $('#fr-clients #metodo').val();
    let url ='';
    if(metodo=='POST'){
        url ='/admin/clients/store';
    }else{
        url = '/admin/clients/' + id;
    }
    $.ajax({
        url: url,
      type: 'POST',
      data: new FormData(this),
      contentType: false,
      processData: false,
      success: function (response) {
          if(response.rpta=='ok'){
            //window.location.reload();
            $('#fr-clients-foto #client_id2').val(response.client_id);
            $('#fr-clients-service #client_id3').val(response.client_id);
            $('#fr-clients-config #client_id4').val(response.client_id);

           
            $(".btn-client-foto").attr('disabled',false);

            var stack1 = $("#fr-clients-foto").position().top;
			
			 $("html, body").animate({ scrollTop: stack1 }, 600,"swing");
          }
      },
      error: function (err) {
        console.log(err)
      }
    })
  }))


  $(".btn-cliente-edit").on('click',function(e){
    e.preventDefault();
    $(".capabox").fadeOut(350,'swing');
    let id = $(this).data('id');

    $("#btn-mozo").attr("data-id",id);
    $("#btn-carta").attr("data-id",id);

    $.ajax({
        url:`/admin/clients/${id}/edit`,
        type:"GET",
        dataType:"json",
        beforeSend:function(){},
        success:function(response){
            
            $("#fr-clients #name").val(response.cliente.name);
            
            $("#fr-clients #cellphone").val(response.cliente.cellphone);
            $("#fr-clients #country").val(response.cliente.country);
            $("#fr-clients #city").val(response.cliente.city);
            $("#fr-clients #email").val(response.cliente.email);
            $("#fr-clients #province").val(response.cliente.province);
            $("#fr-clients #address").val(response.cliente.address);           
            $("#fr-clients #franchise_id").val(response.cliente.franchise_id);
            $("#fr-clients #sexo").val(response.cliente.sexo);
            $("#fr-clients #cashier").val(response.cliente.cashier);
            $("#fr-clients #metodo").val('PUT');
            $("#fr-clients #client_id").val(response.cliente.id);
            $("#fr-clients #latitude").val(response.cliente.latitude);
            $("#fr-clients #longitude").val(response.cliente.longitude);
            
            $("#img-upload_cover").attr('src','/storage/client/'+response.cliente.cover);
            $("#img-upload_logo").attr('src','/storage/client/'+response.cliente.logo);


            $('#fr-clients-foto #client_id2').val(response.cliente.id);
            $('#fr-clients-service #client_id3').val(response.cliente.id);
            $('#fr-clients-config #client_id4').val(response.cliente.id);

            $("#fr-clients-foto #metodo2").val('PUT');
            $("#fr-clients-service #metodo3").val('PUT');
            $("#fr-clients-config #metodo4").val('PUT');

            if(response.fotos.lenght>0){
                $("#img-upload_f1").attr('src','/storage/client/'+response.fotos[0].photo);
                $("#img-upload_f2").attr('src','/storage/client/'+response.fotos[1].photo);
                $("#img-upload_f3").attr('src','/storage/client/'+response.fotos[2].photo);
                $("#img-upload_f4").attr('src','/storage/client/'+response.fotos[3].photo);
            }
            $.each(response.services,function(i,e){
                let serviceid= e.service_id;
                $(`#service${serviceid}`).attr('checked',true);
            });
            
            $.each(response.configurations,function(i,e){   
                let cfid= e.configuration_id;
                $(`#configuration${cfid}`).attr('checked',true);
            });

            var map = new google.maps.Map(document.getElementById('googleMap'), {
                zoom: 12,
            
                center: {lat: 40.4381307, lng: -3.8199653 }
            
            });
            var geocoder = new google.maps.Geocoder();
 
             geocodeAddress(geocoder, map);
            

             $(".btn-submit-config").attr('disabled',false);
             $(".btn-submit-service").attr('disabled',false);
             $(".btn-client-foto").attr('disabled',false);

            
        }
    });
  });


  $('#fr-clients-foto').on('submit', (function (e) {
    e.preventDefault();
   
   
    var id = $('#fr-clients #client_id').val();
    var metodo = $('#fr-clients #metodo').val();
    let url ='';
        if(metodo=='POST'){
            url ='/admin/clients/foto';
        }else{
            url = '/admin/clients/foto/' + id;
        }

        $.ajax({
            url: url,
            type: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (response) {
                if(response.rpta=='ok'){
                    //window.location.reload();
                    $('#fr-clients #client_id2').val(response.client_id);
                    $('#fr-clients #client_id3').val(response.client_id);
                    $('#fr-clients #client_id4').val(response.client_id);

                    $(".btn-submit-config").attr('disabled',false);

                    var stack1 = $("#fr-clients-config").position().top;
			
                    $("html, body").animate({ scrollTop: stack1 }, 600,"swing");
                    
                }
            },
            error: function (err) {
                console.log(err)
            }
        })
  }))


  $('#fr-clients-service').on('submit', (function (e) {
    e.preventDefault();
   
   
    var id = $('#fr-clients-service #client_id3').val();
    var metodo = $('#fr-clients-service #metodo3').val();
    let url ='';
        if(metodo=='POST'){
            url ='/admin/clients/service';
        }else{
            url = '/admin/clients/service/' + id;
        }

        $.ajax({
            url: url,
            type: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (response) {
                if(response.rpta=='ok'){
                    //window.location.reload();
                   
                }
            },
            error: function (err) {
                console.log(err)
            }
        })
  }))


  
  $('#fr-clients-config').on('submit', (function (e) {
    e.preventDefault();
   
   
    var id = $('#fr-clients-config #client_id4').val();
    var metodo = $('#fr-clients-config #metodo4').val();
    let url ='';
        if(metodo=='POST'){
            url ='/admin/clients/configuration';
        }else{
            url = '/admin/clients/configuration/' + id;
        }

        $.ajax({
            url: url,
            type: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (response) {
                if(response.rpta=='ok'){
                    //window.location.reload();
                   
                    $(".btn-submit-service").attr('disabled',false);

                    var stack1 = $("#fr-clients-service").position().top;
			
                    $("html, body").animate({ scrollTop: stack1 }, 600,"swing");
                }
            },
            error: function (err) {
                console.log(err)
            }
        })
  }))


  $(".table-cliente .estado").on('change',function(){
    let id = $(this).data('id');
    var token = $("#fr-clients input[name='_token']").val();
    let data='';
    if($(this).data('estado')=="activo"){
         data = ({'id':id,'status':1,'_token':token,'_method':'PUT'});  
    }else{
         data = ({'id':id,'status':2,'_token':token,'_method':'PUT'});  
    }
    
    $.ajax({
        url:'/admin/clients-estado/'+id,
        type:"POST",
        dataType:"json",
        data:data,
        beforeSend:function(){},
        success:function(response){
           alert("estado actualizado");
        }
    });
});


$("#btn-mozo").on('click',function(e){
    e.preventDefault();
    let id = $(this).data('id');

    let url = `/admin/mozos/${id}`;

    window.location.href= url;
    
});

$("#btn-carta").on('click',function(e){
    e.preventDefault();
    let id = $(this).data('id');
   
    let url = `/admin/lacartas/${id}`;

    window.location.href= url;
});