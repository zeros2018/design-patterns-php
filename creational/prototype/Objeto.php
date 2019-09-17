<?php
class Objeto {
    public $val1;
    public $string1;

    function __construct(){
        $this->val1 = 2;
    }

    function __clone(){
        $this->val1 = 0;
    }

}