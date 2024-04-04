<?php 
require_once('Animal.php');

class Ape extends Animal
{
    public function __construct($name) {
        $this->legs = 2;
        $this->name = $name;
    }
    public function yell()
    {
        echo "Auuuoooo";
    }
}