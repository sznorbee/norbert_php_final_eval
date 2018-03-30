<?php
require 'Cat.php';

//cat from constructor
$catOriginal = new Cat();
$catArray = $catOriginal->getInfo();

//create cats
$cat1 = new Cat();
$cat2 = new Cat();
$cat3 = new Cat();

//fil them up 
$cat1->setAge(2)->setColor('white')->setName('tom')->setRace('little')->setSex('male');
$cat2->setAge(3)->setColor('black')->setName('jerry')->setRace('big')->setSex('female');
$cat3->setAge(4)->setColor('brown')->setName('sam')->setRace('biggest')->setSex('male');

//create container for display them
$cats = [$catOriginal, $cat1, $cat2, $cat3];

//loop on container and 

foreach ($cats as $example)
{   
   
    $Array = $example->getInfo();
    foreach ($Array as $key => $values)
    {
        echo $key.': '.$values."<br>";
    }
    echo "<br>";
   
}
