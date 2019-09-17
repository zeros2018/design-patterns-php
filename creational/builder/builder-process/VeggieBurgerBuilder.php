<?php

require_once 'BurgerBuilder.php';

class VeggieBurgerBuilder extends BurgerBuilder{
    public function prepareBun(): void {
        $this->burger->setBun('brioche');
    }

    public function cookPatty(): void {
        $this->burger->setPatty('halloumi');
    }

    public function addToppings(): void {
        $this->burger->addToppings(['cauliflower', 'tomato', 'onion', 'cheese']);
    }
}