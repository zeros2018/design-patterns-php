<?php

require_once 'BurgerChef.php';
require_once 'VeggieBurgerBuilder.php';
require_once 'AmericanBurgerBuilder.php';

$chef = new BurgerChef();

$veggie = $chef->makeBurger(new VeggieBurgerBuilder()); 
$american = $chef->makeBurger(new AmericanBurgerBuilder()); 