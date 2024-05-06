<?php
//https://www.openbrewerydb.org/documentation
// URL de la API
$url = "https://api.openbrewerydb.org/v1/breweries";

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
$data = json_decode($response, true); // El true lo convierte en un array asociativo a los objetos dentro del array sino lo deja como objetos
//$data_2 = json_encode($data[0], true);
// Imprimir los datos
//print_r($data_2);
print_r($data);
?>
