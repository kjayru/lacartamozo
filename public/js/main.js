
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
            $("#fr-franchise #mails").val(response.mail);
            $("#fr-franchise #province").val(response.province);
            $("#fr-franchise #address").val(response.address);
          
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
    $.ajax({
        url:`/admin/franchisees/${id}/edit`,
        type:"PUT",
        dataType:"json",
        beforeSend:function(){},
        success:function(response){
            $("#fr-franchise #nombre").val(response.names);
            $("#fr-franchise #nombre").val(response.names);
            $("#fr-franchise #nombre").val(response.names);
            $("#fr-franchise #nombre").val(response.names);
            $("#fr-franchise #nombre").val(response.names);
            $("#fr-franchise #nombre").val(response.names);
        }
    });
});



$('#fr-profile').on('submit', (function (e) {
    e.preventDefault()
    var id = $('#fr-profile #admin_id').val()

    $.ajax({
      url: '/admin/profile/' + id,
      type: 'POST',
      data: new FormData(this),
      contentType: false,
      processData: false,
      success: function (response) {
        window.location.reload()
      },
      error: function (err) {
        console.log(err)
      }
    })
  }))
