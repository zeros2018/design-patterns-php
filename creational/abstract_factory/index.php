<?php

require_once 'FactoryProducer.php';

// $figura_factory = FactoryProducer::getFactory(0);

// $triangulo = $figura_factory->getFigura(1);

// echo $triangulo->dibujar();


$figura_factory = FactoryProducer::getFactory(1);

$triangulo = $figura_factory->getColor(0);

echo $triangulo->llenar();