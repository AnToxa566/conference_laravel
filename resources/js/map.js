var input_lat = document.getElementById('latitude');
var input_lng = document.getElementById('longitude');

var map, marker;
var latitude, longitude;
var pos, opt;

function initMap() {
    pos = { lat: 50.450087, lng: 30.524010 }
    opt = { center: pos, zoom: 12 }

    map = new google.maps.Map(document.getElementById("map"), opt);
    marker = new google.maps.Marker({
        map: map,
        draggable: true
    });

    marker.addListener("dragend", () => {
        input_lat.value = marker.getPosition().lat().toPrecision(6);
        input_lng.value = marker.getPosition().lng().toPrecision(6);
    });

    map.addListener("click", (e) => {
        marker.setMap(map);

        marker.setPosition(e.latLng);
        map.panTo(e.latLng);

        input_lat.value = marker.getPosition().lat().toPrecision(6);
        input_lng.value = marker.getPosition().lng().toPrecision(6);
    });
}

function updateMap() {
    if (input_lat.value == '' || input_lng.value == '') {
        marker.setMap(null);
    }
    else {
        marker.setMap(map);

        latitude = input_lat.value;
        longitude = input_lng.value;

        latitude = (latitude && +latitude) || 50.450087;
        longitude = (longitude && +longitude) || 30.524010;
        
        marker.setPosition({ lat: latitude, lng: longitude });
        map.panTo({ lat: latitude, lng: longitude });
    }
}