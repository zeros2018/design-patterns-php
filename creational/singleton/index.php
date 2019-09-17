<?php
/**
 * Created by PhpStorm.
 * User: Erwin
 * Date: 16/8/2019
 * Time: 14:46
 */

require 'MySingleton.php';

MySingleton::getInstance()->hazAlgo();
MySingleton::getInstance()->hazAlgo();
MySingleton::getInstance()->hazAlgo();

echo 'Contador = '.mySingleton::getInstance()->getCounter().PHP_EOL;