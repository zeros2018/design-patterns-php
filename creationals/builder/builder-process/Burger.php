<?php
class Burger {
    private $patty;
    private $toppings = [];
    private $bun;

    public function setPatty($patty): void {
        $this->patty = $patty;
    }
    
    public function addToppings($toppings): void {
        $this->stoppings = $toppings;
    }
    
    public function setBun($bun): void {
        $this->bun = $bun;
    }
    
}