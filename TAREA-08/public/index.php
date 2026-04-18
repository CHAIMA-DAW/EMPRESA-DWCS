<?php
// CARGA DE CLASES (APIs externas)
require_once "../src/GeoAPI.php";
require_once "../src/WeatherAPI.php";
require_once "../src/ElevationAPI.php";

require_once "../src/BigBookAPI.php";

//Código Sergio - Cargar clase PokeAPI
require_once "../src/PokeAPI.php";

// Instanciamos los servicios
$geo = new GeoAPI();
$weather = new WeatherAPI();
$elevation = new ElevationAPI();

// CÓDIGO NOEMI - servicio Big Book
$booksAPI = new BigBookAPI();

//Código Sergio - servicio PokeAPI
$pokemonAPI = new PokemonAPI();

// Variable donde guardaremos los datos finales
$data = null;

$error = null;

//Código Sergio - Variable para el pokemon aleatorio
$pokemonAleatorio = null;

// SI EL USUARIO HA ENVIADO UNA CIUDAD
if (isset($_GET["city"])) {
    $letra = null;

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


            // CÓDIGO NOEMI
            // la letra será el primer caracter de la ciudad en mayúscula
            $letra = strtoupper($city[0]);

            if ($letra) {

                // buscamos el libro por la letra del título (método definido en BigBookAPI.php)
                $books = $booksAPI->buscarPorLetraTitulo($letra);

                // creamos un array vacío para guardar los libros que encontremos
                $librosFiltrados = [];

                // si se encuentran libros, evaluaremos cada libro para ver si cumple la condición
                if ($books && isset($books["books"])) {

                    // usamos dos foreach porque los datos de los libros están guardados dentro de dos arrays
                    foreach ($books["books"] as $grupo) {
                        foreach ($grupo as $book) {

                            // convertimos los caracteres del título a mayúscula para comprobar que el primero coincida con la primera letra de la ciudad, que también está en mayúsculas
                            if (isset($book["title"]) && strtoupper($book["title"][0] === $letra)) {

                                // añadimos al array los libros
                                $librosFiltrados[] = $book;
                            }
                        }
                    }
                }
            }

            // Código Sergio - Obtención del pokemon
            $pokemonAleatorio = $pokemonAPI->getRandomPokemon();
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

    <!-- CÓDIGO NOEMI 
 Mostramos los libros en la web
-->
    <?php if (!empty($librosFiltrados)): ?>
        <div class="card">
            <h3>Libros que empiezan por "<?= strtoupper($city[0]) ?>"</h3>

            <?php foreach ($librosFiltrados as $book): ?>
                <p>
                    <strong><?= htmlspecialchars($book["title"]) ?></strong><br>
                </p>
                <hr>
            <?php endforeach; ?>
        </div>

    <?php elseif ($data): ?>
        <div class="card">
            <p>No hay libros que coincidan con esa letra.</p>
        </div>
    <?php endif; ?>

    <!-- Código Sergio - Mostrar el pokemon aleatorio -->

    <?php
    // Solo dibujamos la tarjeta si el index.php consiguió el Pokémon y la ciudad
    if (isset($pokemonAleatorio) && $pokemonAleatorio && isset($data)) {
    ?>

        <div class="card" style="border: 2px solid #ef5350;">
            <h3>¡Un Pokémon salvaje apareció en <?= htmlspecialchars($data["city"]) ?>!</h3>
            <p><strong><?= ucfirst($pokemonAleatorio['name']) ?></strong> (#<?= $pokemonAleatorio['id'] ?>)</p>

            <?php if ($pokemonAleatorio['sprites']['front_default']): ?>
                <img src="<?= $pokemonAleatorio['sprites']['front_default'] ?>" alt="<?= ucfirst($pokemonAleatorio['name']) ?>" style="width: 150px; height: 150px;">
            <?php endif; ?>
        </div>

    <?php
    }
    ?>

</body>

</html>