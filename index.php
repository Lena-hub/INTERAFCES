<?php

require_once "Car.php";
require_once "Bus.php";
require_once "Bike.php";
require_once "SkateBoard.php";
require_once "PedestrianWay.php";
require_once "LightableInterface.php";

$car = new Car('black', 4);
$bike = new Bike('red', 2);
$schoolBus = new Bus('yellow', 40);
$skateBoard = new SkateBoard('pink', 2);
$pedestrianWay = new PedestrianWay();

// VERIF' ET AFFICHAGE INTERFACES

$interfaceCar = new Car ("Green", 4);
echo $interfaceCar->switchOn() ?"allumé":"éteint" . "<br/>";
echo $interfaceCar->switchOff() . "<br/>";

var_dump($interfaceCar);

$interfaceBike = new Bike ("Blue", 2);
echo $interfaceBike->switchOn() ?"allumé":"éteint" . "<br/>";
echo $interfaceBike->switchOff() . "<br/>";

var_dump($interfaceBike);

$interfaceBike2 = new Bike ("Blue", 2, 15);
echo $interfaceBike2->switchOn() ?"allumé":"éteint" . "<br/>";
echo $interfaceBike2->switchOff() . "<br/>";

var_dump($interfaceBike2);

// FIN INTERFACE

var_dump ("Au tout début", $pedestrianWay->getCurrentVehicles());

var_dump ("Echec de l'ajout de la la voiture");
$pedestrianWay->addVehicle($car);
var_dump($pedestrianWay->getCurrentVehicles());

var_dump ("Reussite de l'ajout de la voiture");
$pedestrianWay->addVehicle($bike);
var_dump ($pedestrianWay->getCurrentVehicles());

$car = new Car('green', 4);

try{
    echo $car->start() . '</br>';
}
catch (Exception $e)
{
    echo $e->getMessage() . '</br>';
    echo $car->setParkBrake() . '</br>';
}
finally
{
    echo "Ma voiture roule comme un donut.</br>";
}

echo '</br>';

echo $car->setParkBrake();

try{
    echo $car->start() . '</br>';
}
catch (Exception $e)
{
    echo 'Warning: ' . $e->getMessage() . '</br>';
    echo $car->setParkBrake() . '</br>';
}
finally
{
    echo "Ma voiture roule comme un donut.</br>";
}

?>