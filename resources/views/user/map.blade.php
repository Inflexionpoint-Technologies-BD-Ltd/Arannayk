<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Arannayk- Where We Work</title>
    <link
        rel="stylesheet"
        href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin=""
    />

    <style>
        #map {
            height: 100vh;
        }
    </style>
</head>
<body>
<div id="map"></div>
</body>

<script
    src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""
></script>

<script>
    var map = L.map("map").setView([23.7806207, 90.3492859], 7);

    const tileUrl = "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png";

    const attribution =
        "© OpenStreetMap contributors ♥ Make a Donation. Website and API terms";

    const tiles = L.tileLayer(tileUrl, {
        attribution,
    });

    tiles.addTo(map);

    L.marker([22.335, 91.8325]).bindPopup('Chittagong <br><br> <a href="{{ route('viewProjects') }}" style="text-decoration: none;" > View Projects</a>').addTo(map);

</script>
</html>

