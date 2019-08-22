<?php
require_once 'Rectangulo.php';
require_once 'Triangulo.php';
require_once 'AbstractFactory.php';
class FiguraFactory extends AbstractFactory {
    
    Const RECTANGULO = 0;
    Const TRIANGULO = 1;

    public function getFigura($figura){
        switch ($figura) {
            case self::RECTANGULO:
                return new Rectangulo();
                break;
            
            case self::TRIANGULO:
                return new Triangulo();
                break;
            
            default:
                return null;
                break;
        }
    }

    public function getColor($color){}


}