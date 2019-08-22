<?php

require_once 'Burger.php';

abstract class BurgerBuilder {
    
    private $burguer;

    public function createBurger(): void {
        $this->burger = new Burger();
    }

    public function getBurger(): Burger {
        return $this->burger;
    }

    abstract public function prepareBun(): void;
    abstract public function cookPatty(): void;
    abstract public function addToppings(): void;

}