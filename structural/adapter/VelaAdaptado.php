<?php
require_once 'Bombilla.php';
require_once 'Vela.php';

class VelaAdaptado implements Bombilla {

    private $vela;
    
    public function __construct(){
        $this->vela = new Vela();
    }
    public function encender(){        
        $this->vela->prenderVela();
    }
    public function AumnetarIntensidad(){
        $this->vela->AumnetarIntensidad();   
    }
    public function Apagar(){
        $this->vela->apagarVela();        
    }


}