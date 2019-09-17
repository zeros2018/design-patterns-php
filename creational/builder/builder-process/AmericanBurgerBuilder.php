<?php

require_once 'BurgerBuilder.php';

class AmericanBurgerBuilder extends BurgerBuilder {
    public function prepareBun(): void {
        $this->burger->setBun('slider');
    }

    public function cookPatty(): void {
        $this->burger->setPatty('beef');
    }

    public function addToppings(): void {
        $this->burger->addToppings(['tomato', 'cheese', 'onion', 'pickles', 'bacon']);
    }
}