<?php

//include './clases.php';

class Persona {
    public $nombre;
    public $genero;
    private $edad;
    protected static $pasaporte = 'AB102';
    const RAZA = 'Humano';

    public function get_edad(){
        return $this->edad;
    }

    public function donar_sangre($destinatario){
        return 'Has donado sangre';
    }
    
}

/* $obj_one = new Persona;
$obj_one->nombre = 'casa';

echo 'funciona' . '<br/>' . $obj_one->nombre . '<br/>';
print_r($obj_one); */

class PersonaAPositivo extends Persona{
    public static $tipo_sangre = 'A+';

    public static function get_pasaporte(){
        return parent::$pasaporte;
    }
}

echo PersonaAPositivo::$tipo_sangre;
echo PersonaAPositivo::get_pasaporte();

?>