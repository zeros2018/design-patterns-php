<?php
require('Circulo.php');
require('Cuadrado.php');
require('AbstractFactory.php');

class FiguraFactory extends AbstractFactory{
    const CIRCULO = 0;
    const CUADRADO = 1;
    

    public function getFigura($figura){
        switch($tipo){
            case self::CIRCULO:
                return new Circulo();
            case self::CUADRADO:
                return new Cuadrado();    
        }
        return null;
    }

    public function getColor($color) {
        return null;
    }
}