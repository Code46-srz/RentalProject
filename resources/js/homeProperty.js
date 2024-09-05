// Initialize and add the map
let map;

async function initMap() {
    // The location of Uluru
    const position = { lat: -25.344, lng: 131.031 };
    // Request needed libraries.
    //@ts-ignore
    const { Map } = await google.maps.importLibrary("maps");
    const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");

    // The map, centered at Uluru
    map = new Map(document.getElementById("map"), {
        zoom: 4,
        center: position,
        mapId: "DEMO_MAP_ID",
    });

    // The marker, positioned at Uluru
    const marker = new AdvancedMarkerElement({
        map: map,
        position: position,
        title: "Uluru",
    });
}


initMap();

$('#showRent').click(function () {
    $('.property').hide(); // Hide all properties
    $('.property[data-home-type="rent"]').show(); // Show only rent properties
});

$('#showBuy').click(function () {
    $('.property').hide(); // Hide all properties
    $('.property[data-home-type="sale"]').show(); // Show only buy properties
});
