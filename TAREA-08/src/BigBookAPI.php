<?php

class BigBookAPI {

    // Creamos la url base
    private $baseUrl = "https://api.bigbookapi.com";

    // función para completar la url en base a la letra que queramos buscar
    public function buscarPorLetraTitulo($letra) {

        // url más completa: le añadimos la letra que queremos buscar
        $url = $this->baseUrl . "/search-books?title=" . urlencode($letra);

        // respuesta con la url final con la llave de acceso a la API
        $response = file_get_contents($url . "&api-key=5748eae789874d5ea587e309d722a815");

        // devolvemos respuesta decodificada
        return json_decode($response, true);
    }
}