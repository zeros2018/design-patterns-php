<?php 
require_once 'AbstractFactory.php';
require_once 'FiguraFactory.php';
require_once 'ColorFactory.php';
class FactoryProducer{

    Const FIGURA = 0;
    Const COLOR = 1;

    public static  function getFactory($factory){
        switch ($factory) {
            case self::FIGURA:
                return new FiguraFactory();                
                break;

            case self::COLOR:
                return new ColorFactory();                                
                break;            
            default:
                return null;
                break ;
        }
    }    

}