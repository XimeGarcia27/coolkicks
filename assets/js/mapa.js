var map;

function initMap() {
    var utsjr = {
        lat: 20.367393,
        lng: -100.010187
    };

    map = new google.maps.Map(document.getElementById("map"), {
        center: utsjr,
        zoom: 18
    });

    marker = new google.maps.Marker({
        position: utsjr,
        map: map,
        title: 'Universidad Tecnológica SJR',
        icon: 'assets/images/icons/marcador.png'
    });

    infoWindow = new google.maps.InfoWindow({
        content: `'<h1>Universidad</h1>
                   <br>
                   <p>Dirección: Av. La Palma #125, Vistahermosa</p>
                   <br>
                   <a href="http://utsjr.edu.mx">Página Web</a>
                   <br>
                   <img src="../assets/images/UTSJR.png" width="100px">'`
    });

    /*

    Eventos
    "click"
    "dbclick"
    "mouseup"
    "mouseover"
    "mouseout"
    */

    google.maps.event.addListener(marker, 'click', function() {
        infoWindow.open(map, marker);
    });

}