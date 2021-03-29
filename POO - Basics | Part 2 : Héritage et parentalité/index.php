<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

require_once 'Bicycle.php';


$bicycle = new Bicycle('blue', 1);
$bicycle->setCurrentSpeed(20);
echo $bicycle->forward();

var_dump($bicycle);

// CAR

require_once 'Car.php';

$car = new Car('green', 4, 'electric');

echo $car->forward();

var_dump($car);

// Truck

require_once 'Truck.php';

$iveco = new Truck('White', '3','Fuel','50');

var_dump($iveco);

$iveco->setactualCapacity(40); 

echo $iveco->forward().PHP_EOL;?> </br> 
<?php

echo $iveco->brake().PHP_EOL;?> </br> 
<?php

echo $iveco->emptyorfull().PHP_EOL;?> </br> 
<?php
echo $iveco->getactualCapacity();?> </br> 
<?php
$iveco->setactualCapacity(45);
echo $iveco->emptyorfull().PHP_EOL;?> </br> 
<?php
echo $iveco->getactualCapacity();?> </br> 
<?php
$iveco->setactualCapacity(50);
echo $iveco->emptyorfull().PHP_EOL;?> </br> 
<?php
echo $iveco->getactualCapacity();
    ?>
</body>
</html>
