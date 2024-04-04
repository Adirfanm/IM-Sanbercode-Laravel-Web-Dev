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

