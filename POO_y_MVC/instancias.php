<?php

//include './clases.php';

class Persona {
    public $nombre;
    public $genero;
    private $edad;
    protected static $pasaporte = 'AB102';
    const RAZA = 'Humano';

    public function getEdad(){
        return $this->edad;
    }
    
}

/* $obj_one = new Persona;
$obj_one->nombre = 'casa';

echo 'funciona' . '<br/>' . $obj_one->nombre . '<br/>';
print_r($obj_one); */

class PersonaAPositivo extends Persona{
    public static $tipo_sangre = 'A+';

    public static function getPasaporte(){
        return parent::$pasaporte;
    }
}

echo PersonaAPositivo::$tipo_sangre;
echo PersonaAPositivo::getPasaporte();

?>