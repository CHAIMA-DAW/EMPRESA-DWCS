<?php
// CARGA DE CLASES (APIs externas)
require_once "../src/GeoAPI.php";
require_once "../src/WeatherAPI.php";
require_once "../src/ElevationAPI.php";

// Instanciamos los servicios
$geo = new GeoAPI();
$weather = new WeatherAPI();
$elevation = new ElevationAPI();

// Variable donde guardaremos los datos finales
$data = null;

// SI EL USUARIO HA ENVIADO UNA CIUDAD
if (isset($_GET["city"])) {

    $city = trim($_GET["city"]);

    // 1) Obtener coordenadas mediante Nominatim
    $coords = $geo->getCoordinates($city);

    if ($coords) {

        $lat = $coords["lat"];
        $lon = $coords["lon"];

        // 2) Obtener datos del tiempo desde Open‑Meteo
        $weatherData = $weather->getWeather($lat, $lon);

        // 3) Obtener altitud desde Open‑Elevation
        $elevationData = $elevation->getElevation($lat, $lon);

        // VALIDACIÓN DE RESPUESTA DE OPEN‑METEO
        
        if (
            isset($weatherData["current_weather"]["temperature"]) &&
            isset($weatherData["current_weather"]["windspeed"]) &&
            isset($weatherData["current_weather"]["weathercode"])
        ) {

            // Si todo está correcto, guardamos los datos
            $data = [
                "city" => $city,
                "lat" => $lat,
                "lon" => $lon,
                "temp" => $weatherData["current_weather"]["temperature"],
                "wind" => $weatherData["current_weather"]["windspeed"],
                "code" => $weatherData["current_weather"]["weathercode"],
                "elevation" => $elevationData
            ];

        } else {
            // Error si Open‑Meteo no devuelve datos válidos
            $error = "No se han podido obtener datos del tiempo desde Open‑Meteo.";
        }

    } else {
        $error = "No se han encontrado coordenadas para esa ciudad.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>TAREA 08 - Aplicación Web Híbrida</title>

    <!-- CSS de Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css">

    <style>
        /* ESTILOS GENERALES*/
        body {
            font-family: Arial, sans-serif;
            background: #eef2f7;
            padding: 20px;
            text-align: center;
        }

        /* Tarjeta de datos */
        .card {
            background: white;
            width: 400px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 0 10px #ccc;
        }

        /* Mapa */
        #map {
            height: 300px;
            border-radius: 12px;
            margin-top: 20px;
        }

        /* Formulario */
        input {
            padding: 10px;
            width: 250px;
            border-radius: 8px;
            border: 1px solid #aaa;
        }

        button {
            padding: 10px 20px;
            border: none;
            background: #0078ff;
            color: white;
            border-radius: 8px;
            cursor: pointer;
        }

        button:hover {
            background: #005fcc;
        }
    </style>
</head>
<body>

<h1>🌦 Aplicación Web Híbrida – Tiempo y Mapa</h1>

<!-- FORMULARIO DE BÚSQUEDA -->
<form method="GET">

    <!-- Mostrar error si existe -->
    <?php if (isset($error)): ?>
        <p style="color:red;"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>

    <input type="text" name="city" placeholder="Introduce una ciudad" required>
    <button>Buscar</button>
</form>

<!-- SI HAY DATOS, MOSTRAR TARJETA Y MAPA -->
<?php if ($data): ?>
<div class="card">
    <h2><?= htmlspecialchars($data["city"]) ?></h2>
    <p><strong>Temperatura:</strong> <?= $data["temp"] ?> °C</p>
    <p><strong>Viento:</strong> <?= $data["wind"] ?> km/h</p>
    <p><strong>Código meteorológico:</strong> <?= $data["code"] ?></p>
    <p><strong>Altitud:</strong> <?= $data["elevation"] ?> m</p>
</div>

<!-- Mapa -->
<div id="map"></div>

<!-- Scripts -->
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="app.js"></script>

<script>
    // Cargar mapa desde app.js
    loadMap(<?= $data["lat"] ?>, <?= $data["lon"] ?>);
</script>

<?php endif; ?>

</body>
</html>
