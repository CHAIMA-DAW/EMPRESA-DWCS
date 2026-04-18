<?php

class PokemonAPI {
    
    // Guardamos la URL base
    private $baseUrl = "https://pokeapi.co/api/v2/pokemon/";

    // Método para conseguir un Pokémon aleatorio
    public function getRandomPokemon() {
        $idAleatorio = rand(1, 1025);
        $url = $this->baseUrl . $idAleatorio;
        
        // Hacemos la petición
        $respuesta = @file_get_contents($url);
        
        // Si hay respuesta, devolvemos el array. Si falla, devolvemos null.
        if ($respuesta !== false) {
            return json_decode($respuesta, true);
        }
        
        return null;
    }
}
?>