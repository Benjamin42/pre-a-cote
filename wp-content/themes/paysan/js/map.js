var adresseOrigin = "Impasse de la Sarretie 19100 BRIVE";
var map;

function createMap() {
    var locationDfd = getLocation(adresseOrigin);

    locationDfd.then(function (location) {
        var options = {
            zoom: 8,
            center: location,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            maxZoom: 20
        };
        map = new google.maps.Map(document.getElementById('map'), options);
    });
}

function addAdresse(adresse, title, text) {
    var locationDfd = getLocation(adresse);
    locationDfd.then(function(location) {
        addMarker(map, location, title, text);
    });
}

function getLocation(adresse) {
    var deferred = $.Deferred();

    $.getJSON('http://maps.googleapis.com/maps/api/geocode/json?address=' + adresse + '&sensor=false').done(function (data) {
        var p = data.results[0].geometry.location
        var latlng = new google.maps.LatLng(p.lat, p.lng);

        deferred.resolve(latlng);
    });
    return deferred.promise();
}


var lastMarker = null;
function addMarker(map, location, title, text) {
    var marker = new google.maps.Marker({
        position: location,
        map: map,
        title: title,
        icon: "http://maps.google.com/mapfiles/ms/icons/red-dot.png"
    });

    var infowindow = new google.maps.InfoWindow({
        content: constructContentWindow()
    });

    marker.addListener('click', function () {

        if (lastMarker != null) {
            lastMarker.setIcon("http://maps.google.com/mapfiles/ms/icons/red-dot.png");
        }
        marker.setIcon("http://maps.google.com/mapfiles/ms/icons/blue-dot.png");
        lastMarker = marker;
        //infowindow.open(map, marker);
    });

}

function constructContentWindow() {
    var contentString = '<div id="content">' +
        '<div id="siteNotice">' +
        '</div>' +
        '<h1 id="firstHeading" class="firstHeading">Uluru</h1>' +
        '<div id="bodyContent">' +
        '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
        'sandstone rock formation in the southern part of the ' +
        'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) ' +
        'south west of the nearest large town, Alice Springs; 450&#160;km ' +
        '(280&#160;mi) by road. Kata Tjuta and Uluru are the two major ' +
        'features of the Uluru - Kata Tjuta National Park. Uluru is ' +
        'sacred to the Pitjantjatjara and Yankunytjatjara, the ' +
        'Aboriginal people of the area. It has many springs, waterholes, ' +
        'rock caves and ancient paintings. Uluru is listed as a World ' +
        'Heritage Site.</p>' +
        '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">' +
        'https://en.wikipedia.org/w/index.php?title=Uluru</a> ' +
        '(last visited June 22, 2009).</p>' +
        '</div>' +
        '</div>';
    return contentString;
}
