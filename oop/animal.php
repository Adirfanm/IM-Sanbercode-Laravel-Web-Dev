<?php 

class Animal
{
    public $name;
    public $legs = 4; 
    public $cold_blooded = "no";

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function get_name()
    {
        echo $this->name;
    }
    public function get_legs()
    {
        echo $this->legs;
    }
    public function get_cold_blooded()
    {
        echo $this->cold_blooded;
    }
}

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

class Frog extends Animal
{
    public function jump()
    {
        echo "Hop hop";
    }
}