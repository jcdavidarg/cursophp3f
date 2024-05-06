<?php
//https://www.openbrewerydb.org/documentation
// URL de la API
$url = "https://www.tokkobroker.com/api/v1/countries/?lang=es_ar&format=json&key=5940ea45eb7cfb55228bec0b958ea9c0be151757";
//$url = "https://www.tokkobroker.com/api/v1/development_type/?lang=en&format=json&key=5940ea45eb7cfb55228bec0b958ea9c0be151757";
//$url = "https://api.openbrewerydb.org/v1/breweries/b54b16e1-ac3b-4bff-a11f-f7ae9ddc27e0";

// Inicializar cURL
$ch = curl_init();

// Configurar las opciones de cURL
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Ejecutar la petición
$response = curl_exec($ch);

// Cerrar cURL
curl_close($ch);

// Decodificar la respuesta JSON a un array
$data = json_decode($response, true);

// Imprimir los datos
print_r($data);
?>
