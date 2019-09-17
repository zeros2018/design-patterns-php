<?php

require_once 'BurgerBuilder.php';

class BurgerChef {
    public function makeBurger(BurgerBuilder $builder): Burger {
        $builder->createBurger();
        $builder->prepareBun();
        $builder->cookPatty();
        $builder->addToppings();

        return $builder->getBurger();
    }
}