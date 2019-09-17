<?php
require_once 'Bombilla.php';
class BombillaModerna implements Bombilla {

    public function encender(){
        echo "Bombilla Moderna Encendida";
    }
    public function AumnetarIntensidad(){
        echo "Bombilla Moderna Intensidad Sincronizada";        
    }
    public function Apagar(){
        echo "Bomnilla Moderna apagado Cargado";
    }


}