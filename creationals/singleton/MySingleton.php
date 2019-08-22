<?php
/**
 * Created by PhpStorm.
 * User: Erwin
 * Date: 16/8/2019
 * Time: 14:48
 */

class MySingleton
{
    private static $instance;
    private $counter;

    private function __construct()
    {
        echo 'Construtting object';
    }

    public static function getInstance(){
        if (!self::$instance instanceof self){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function hazAlgo()
    {
        echo 'Escribimos algo por pantalla.'.PHP_EOL;
        ++$this->counter;
    }

    public function getCounter()
    {
        return $this->counter;
    }

}