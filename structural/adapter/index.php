<?php

require_once 'Bombilla.php';
require_once 'VelaAdaptado.php';

$cliente = new VelaAdaptado();


$cliente->encender();
$cliente->AumnetarIntensidad();
$cliente->Apagar();