<?php
require 'Cat.php';

$cat1 = new Cat('Tiger', 2, 'yellow', 'male', 'chat');
$cat2 = new Cat('Gyilkos', 1, 'white', 'female', 'tiger');
$cat3 = new Cat('Alibaba', 5, 'blue', 'male', 'chat');

//create container for display them
$cats = [$cat1, $cat2, $cat3];

//loop on container and
echo "<section>";
foreach ($cats as $example)
{
    echo "<article>";

    $Array = $example->getInfo();
    foreach ($Array as $key => $values)
    {
        echo $key.': '.$values."<br>";
    }
    echo "<br>";
    
    echo "</article>";
}
echo "</section>";
