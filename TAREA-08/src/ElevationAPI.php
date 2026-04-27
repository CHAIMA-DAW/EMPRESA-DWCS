<?php

/**
 * Servicio de altitud usando Open-Elevation.
 * Devuelve la altitud en metros a partir de latitud y longitud.
 */
class ElevationAPI {

    public function getElevation($lat, $lon) {

        // Construimos la URL
        $url = "https://api.open-elevation.com/api/v1/lookup?locations=$lat,$lon";

        // Inicializamos cURL
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Ejecutamos la petición
        $response = curl_exec($ch);
        curl_close($ch);

        // Decodificamos JSON
        $data = json_decode($response, true);

        // Devolvemos la altitud si existe
        return $data["results"][0]["elevation"] ?? null;
    }
}
