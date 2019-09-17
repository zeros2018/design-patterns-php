<?php

require_once 'Figura.php';

class Rectangulo implements Figura {
    
    private $ancho;
    private $alto;

    public function setDimention($ancho, $alto){
        $this->ancho = $ancho;
        $this->alto = $alto;
    }

    function getArea(){
        return $this->ancho * $this->alto;
    }
}