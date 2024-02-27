<?php
include "Animal.php";
include "Cat.php";
include "Dog.php";


// on Importe une Source donc ici c'est la Classe Cat

echo "<center><h1> Classe</h1></center>";


//MonChat est un Objet
//$MonChat = new Cat("Evita", "Female",2,55,"white","Tigré");

//var_dump($MonChat);


// Pour parcourir un objet c'est => au lieu de "." comme sur Java
//echo $MonChat -> getName();

$tabCat[0] = (new Cat())->setName("Plume")->setAge(4)->setWeight(35)->   setColor("Blanc")->   setSex("Mal");
$tabCat[1] = (new Cat())->setName("Mistigri")->setAge(3)->setWeight(30)->setColor("Noir")-> setSex("Femelle");
$tabCat[2] = (new Cat())->setName("Felix")->setAge(5)->setWeight(40)->   setColor("Roux")->    setSex("Male");
$tabCat[3] = (new Cat())->setName("Garfield")->setAge(6)->setWeight(45)->setColor("Roux")-> setSex("Male");
$tabCat[4] = (new Cat())->setName("Minette")->setAge(2)->setWeight(25)-> setColor("Gris")->  setSex("Femelle");
$tabCat[5] = (new Cat())->setName("Mimi")->setAge(1)->setWeight(20)->    setColor("Blanc")->    setSex("Femelle");
$tabCat[6] = (new Dog())->setName("Yuki")->setAge(7)->setWeight(40)->    setColor("Noir")->     setSex("Male");
$tabCat[7] = (new Animal())->setName("Minou")->setAge(5)->setWeight(40)->setColor("Blanc")->setSex("Femelle");
//le Set renvoie un objet c'est une cascade d'object

foreach ($tabCat as $chat) {
    if ($chat->getSex() === "Male") {
        echo "Il";
    } else {
        echo "Elle";
    }
    echo " s'appelle " . $chat->getName() . " et a " . $chat->getAge() . " ans.<br>";
    //un point est un concaténation c'est comme un +
}

