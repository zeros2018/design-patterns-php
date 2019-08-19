<?php
require_once 'Rojo.php';
require_once 'Rosado.php';
require_once 'AbstractFactory.php';
class ColorFactory extends AbstractFactory {
    
    Const ROJO = 0;
    Const ROSADO = 1;

    public function getColor($color){
        switch ($color) {
            case self::ROJO:
                return new Rojo();
                break;
            
            case self::ROSADO:
                return new Rosado();
                break;
            
            default:
                return null;
                break;
        }
    }

    public function getFigura($figura){
        return null;
    }


}