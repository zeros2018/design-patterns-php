<?php
require('Circulo.php');
require('Cuadrado.php');
require('Rectangulo.php');
require('AbstractFactory.php');

class FiguraFactory extends AbstractFactory{
    const CIRCULO = 0;
    const CUADRADO = 1;
    const RECTANGULO = 2;
    

    public function getFigura($figura){
        switch($figura){
            case self::CIRCULO:
                return new Circulo();
            case self::CUADRADO:
                return new Cuadrado();    
            case self::RECTANGULO:
                return new Rectangulo();    
        }
        return null;
    }

}