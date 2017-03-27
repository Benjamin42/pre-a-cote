function createMap(adresse, zoom){
    var deferred = $.Deferred();

    $.getJSON('http://maps.googleapis.com/maps/api/geocode/json?address='+adresse+'&sensor=false', null, function (data) {
        var p = data.results[0].geometry.location
        var latlng = new google.maps.LatLng(p.lat, p.lng);

        var myOptions = {
            zoom      : zoom,
            center    : latlng,
            mapTypeId : google.maps.MapTypeId.ROADMAP,
            maxZoom   : 16
        };
        deferred.resolve(new google.maps.Map(document.getElementById('map-canvas'), myOptions));
    });
    return deferred.promise();
}

/*
 function addMarker(lat, long, title, text) {
 callback(lat, long, title, text);
 }*/

function addMarker(map, adresse, title, text) {
    $.getJSON('http://maps.googleapis.com/maps/api/geocode/json?address='+adresse+'&sensor=false', null, function (data) {
        var p = data.results[0].geometry.location
        var latlng = new google.maps.LatLng(p.lat, p.lng);

        var aMarker= new google.maps.Marker({
            position: latlng,
            map: map,
            title: title
        });
    });
}