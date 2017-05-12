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

function addMarker(map, adresse, title, text) {
    addMarker(map, adresse, title, text, null);
}

var lastInfoWindow = null;

function addMarker(map, adresse, title, text, icon) {
    $.getJSON('http://maps.googleapis.com/maps/api/geocode/json?address='+adresse+'&sensor=false', null, function (data) {
        var p = data.results[0].geometry.location
        var latlng = new google.maps.LatLng(p.lat, p.lng);

        var aMarker= new google.maps.Marker({
            position: latlng,
            map: map,
            title: title,
            icon : icon
        });

        var infowindow = new google.maps.InfoWindow({
            content: '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h4 id="firstHeading" class="firstHeading">' + title + '</h4>'+
            '<div id="bodyContent">'+
            '<p>' + text + '</p>'+
            '</div>'+
            '</div>'
        });

        aMarker.addListener('click', function() {
            if (lastInfoWindow != null) {
                lastInfoWindow.close();
            }
            infowindow.open(map, aMarker);
            lastInfoWindow = infowindow;
        });

    });
}