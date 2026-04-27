# TAREA 08 – Aplicación Web Híbrida (DWES)

Este proyecto forma parte de la TAREA 08: Aplicaciones web híbridas
El objetivo es crear una **aplicación web híbrida** que combine datos procedentes de **APIs REST externas**, siguiendo los contenidos del Tema 8.

---

## 🌦 Funcionalidad

El usuario introduce una ciudad y la aplicación obtiene:

- **Coordenadas** (API Nominatim – OpenStreetMap)
- **Tiempo actual** (API Open‑Meteo – sin API key dado que genera problemas)
- **Altitud** (API Open‑Elevation)
- **Mapa interactivo** centrado en la ciudad (Leaflet + OpenStreetMap)

---

## Tecnologías utilizadas

- PHP 8
- cURL
- JSON
- Leaflet.js
- OpenStreetMap
- Open‑Meteo API
- Nominatim API
- Open‑Elevation API

---

## Estructura del proyecto

TAREA-08/
├── public/
│   ├── index.php
│   ├── app.js
│   └── (Leaflet CSS desde CDN)
├── src/
│   ├── GeoAPI.php
│   ├── WeatherAPI.php
│   └── ElevationAPI.php
└── docs/
└── resumen-tarea-08.odt


---

## Cómo usar

1. Configurar un VirtualHost apuntando a `public/`
2. Acceder a:http://empresa-dwcs.localhost
3. Introducir una ciudad (ej: “Pontevedra”)
4. Ver el tiempo, altitud y mapa interactivo
   
---
Las APIs utilizadas (Nominatim, Open‑Meteo y Open‑Elevation) funcionan exclusivamente mediante parámetros GET y no aceptan JSON por POST.
 
Este proyecto no utiliza Blade porque no es un proyecto Laravel.
Se usa PHP como motor de plantillas, separando la lógica en src/ y la presentación en public/.

---

## Autor

Chaima 
Ciclo: Desarrollo de Aplicaciones Web  
Módulo: DWES – Aplicaciones Web Híbridas  

