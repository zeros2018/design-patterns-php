<?php

require('FiguraFactory.php');

$lado = 5;
$type = 1;

$figura = FiguraFactory::getFigura($type,$lado);

echo $figura->getArea();