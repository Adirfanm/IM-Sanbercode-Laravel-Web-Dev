<?php 
require('animal.php');

$sheep = new Animal("shaun");

echo "Embeek";
echo "<br>";
echo "Name: $sheep->name"; // "shaun"
echo "<br>";
echo "Legs: $sheep->legs"; // 4
echo "<br>";
echo "Cold blooded: $sheep->cold_blooded"; // "no"
echo "<br>";
echo "<br>";

echo "Frog";
echo "<br>";
$kodok = new Frog("Buduk");
echo "Name: ";
echo $kodok->get_name();
echo "<br>";
echo "Legs: ";
echo $kodok->get_legs();
echo "<br>";
echo "Cold bloded: ";
echo $kodok->get_cold_blooded();
echo "<br>";
echo "Jump: ";
$kodok->jump() ; // "hop hop"
echo "<br>";
echo "<br>";

echo "Ape";
echo "<br>";
$sungokong = new Ape("kera sakti");
echo "Name: $sungokong->name";
echo "<br>";
echo "Legs: $sungokong->legs";
echo "<br>";
echo "Cold blooded: $sungokong->cold_blooded";
echo "<br>";
echo "yell: ";
$sungokong->yell(); // "Auooo"






