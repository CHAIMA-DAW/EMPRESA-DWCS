<?php

/**
 * Servicio de geocodificación usando Nominatim (OpenStreetMap)
 * Devuelve latitud y longitud a partir del nombre de una ciudad.
 */
class GeoAPI {

    public function getCoordinates($city) {

        // Construimos la URL de búsqueda
        $url = "https://nominatim.openstreetmap.org/search?format=json&q=" . urlencode($city);

        // Inicializamos cURL
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Nominatim exige un User-Agent personalizado
        curl_setopt($ch, CURLOPT_USERAGENT, "DWES-TAREA08-APP");

        // Ejecutamos la petición
        $response = curl_exec($ch);
        curl_close($ch);

        // Decodificamos JSON
        $data = json_decode($response, true);

        // Si no hay resultados, devolvemos null
        if (empty($data)) {
            return null;
        }

        // Devolvemos latitud y longitud
        return [
            "lat" => $data[0]["lat"],
            "lon" => $data[0]["lon"]
        ];
    }
}
