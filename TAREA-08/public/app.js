/**
 * Carga un mapa Leaflet centrado en las coordenadas recibidas.
 * @param {float} lat - Latitud
 * @param {float} lon - Longitud
 */
function loadMap(lat, lon) {

    // Crear mapa centrado en la ubicación
    const map = L.map('map').setView([lat, lon], 12);

    // Capa base de OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '© OpenStreetMap'
    }).addTo(map);

    // Marcador en la ubicación
    L.marker([lat, lon]).addTo(map)
        .bindPopup("Ubicación encontrada")
        .openPopup();
}
