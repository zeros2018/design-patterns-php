<?php

require_once 'Objeto.php';

$objecto = new Objeto();
$objecto->string1 = 'objeto 1';

$clon = clone $objecto;

print_r($clon);