<?php
include_once 'Figura.php';

class Circulo implements Figura {
    
    public $radio;

    public function __construct($radio){
        $this->radio = $radio;
    }

    public function getArea(){
        return $this->radio * 3.14 * $this->radio;
    }
}