<?php

class Persona {
    public $nombre;
    public $genero;
    private $edad;
    protected $pasaporte;
    
    public static $contador = 0; // Propiedad estática para contar instancias

    public function __construct($nombre, $genero, $edad, $pasaporte) {
        $this->nombre = $nombre;
        $this->genero = $genero;
        $this->edad = $edad;
        $this->pasaporte = $pasaporte;

        // Incrementar el contador de instancias
        self::$contador++;
    }

    public static function contarInstancias() {
        return self::$contador;
    }
}

// Crear algunas instancias de Persona
$persona1 = new Persona('Juan', 'Masculino', 30, 'ABC123');
$persona2 = new Persona('Maria', 'Femenino', 25, 'DEF456');

// Obtener el número de instancias creadas
echo 'Número de instancias de Persona creadas: ' . Persona::contarInstancias(); // Salida: 2


?>