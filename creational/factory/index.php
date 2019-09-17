<?php

require('FiguraFactory.php');

$lado = 5;
$type = 2;

$figura = FiguraFactory::getFigura($type);
$figura->setDimention(5,5);
echo $figura->getArea();