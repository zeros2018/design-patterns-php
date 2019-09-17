<?php
require_once 'Bombilla.php';
class BombillaNormal implements Bombilla{

    public function encender(){
        echo "Bombilla Normal Encendida";
    }
    public function AumnetarIntensidad(){
        echo "Bombilla Normal Subiendo Intensidad";        
    }
    public function Apagar(){
        echo "Bomnilla Normal apagada";
    }


}