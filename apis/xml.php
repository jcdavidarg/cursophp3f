<?php
// Cargar el archivo XML
$xml = simplexml_load_file("archivo.xml");

// Acceder a elementos y atributos
//echo $xml->CD->TITLE;

// Iterar sobre elementos
foreach ($xml->CD as $elemento) {
    echo $elemento->TITLE;
    echo $elemento->ARTIST;
   
}
?>