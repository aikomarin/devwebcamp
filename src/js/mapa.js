if(document.querySelector('#mapa')) {

    const lat = 19.433984802003646
    const long = -99.1957981688052
    const zoom = 16

    const map = L.map('mapa').setView([lat, long], zoom);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([lat, long]).addTo(map)
        .bindPopup(`
            <h2 class="mapa__heading">DevWebCamp</h2>
            <p class="mapa__texto">Centro de Convenciones</p>
        `)
        .openPopup();
}
