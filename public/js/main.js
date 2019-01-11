
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
    
    $("#latitud").val(lat);
    $("#longitud").val(lng);

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

$(".btn-franciado-edit").on('click',function(){
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
  