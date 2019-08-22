<?php
include_once 'Figura.php';

class Cuadrado implements Figura {
    
    public $lado;

    public function __construct($lado){
        $this->lado = $lado;
    }

    public function getArea(){
        return $this->lado * 2;
    }
}