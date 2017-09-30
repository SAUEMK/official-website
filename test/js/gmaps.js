function initMap() {

    // Your text bubble
    var YourAddress = '<div id="content">' +
        '<h3>Kulüp Odamız</h3>' +
        '<p>Sakarya Üniversitesi Endüstri Mühendisliği Bölümü M5 Binası</p>' +
        '<p>Esentepe Kampüsü 54187, Serdivan/SAKARYA' +
        '</div>';

    // Your Position
    var myLatlng = new google.maps.LatLng(40.741019 , 30.329842);

    // Create a map object, and include the MapTypeId to add
    // to the map type control.

    var map = new google.maps.Map(document.getElementById('map'), {
        center: myLatlng,
        zoom: 17,
        scrollwheel: false,
        mapTypeControlOptions: {
            mapTypeIds: ['styled_map', 'roadmap']
        }
    });

    var marker = new google.maps.Marker({
        position: myLatlng
    });
    marker.addListener('click', function() {
        infowindow.open(map, marker);
    });

    var infowindow = new google.maps.InfoWindow({
        content: YourAddress
    });
    marker.setMap(map);

    //Associate the styled map with the MapTypeId and set it to display.
    map.mapTypes.set('styled_map', styledMapType);
    map.setMapTypeId('styled_map');
}
