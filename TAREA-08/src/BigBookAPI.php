<?php

class BigBookAPI {

    private $baseUrl = "https://api.bigbookapi.com";

    public function buscarPorLetraTitulo($letra) {

        $url = $this->baseUrl . "/search-books?title=" . urlencode($letra);

        $response = file_get_contents($url . "&api-key=5748eae789874d5ea587e309d722a815");

        return json_decode($response, true);
    }
}