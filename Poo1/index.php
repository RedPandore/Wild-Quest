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

$bike = new Bicycle('red', 18, 1, 2);

var_dump($bike);


$bike->setColor('blue');
$bike->setCurrentSpeed(20);
var_dump($bike);

$bike->setColor('black');
$bike->setCurrentSpeed(25);
var_dump($bike);

// Moving bike

echo $bike->forward();

echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';

echo $bike->brake();

echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';

echo $bike->brake();

require_once 'Car.php';
?> </br></br> <?php
/* Moving Cars*/

$porshe = new Car('noir', 2, 'diesel');


echo $porshe->run();

echo '<br> Vitesse du vélo : ' . $porshe->getCurrentSpeed() . ' km/h' . '<br>';

echo $porshe->forward();

echo '<br> Vitesse du vélo : ' . $porshe->getCurrentSpeed() . ' km/h' . '<br>';

echo $porshe->brake();

echo '<br> Vitesse du vélo : ' . $porshe->getCurrentSpeed() . ' km/h' . '<br>';
    ?>
</body>
</html>
