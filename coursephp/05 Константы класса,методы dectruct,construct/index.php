<?php

require_once 'classes/Car.php';

function debug($data) {
    echo '<pre>' . print_r($data, 1 . '</pre>');
}
echo Car::$countCar;
echo '<br>';

$car1 = new Car('Black','Volvo','200','4');
echo Car::$countCar;//Обращение к статическому свойству класса
echo '<br>';

$car2 = new Car('white','bmw','180','4');
echo Car::getCount();
echo '<br>';

debug($car1);
debug($car2);

echo $car1->getCarInfo();
echo $car2->getCarInfo();

echo $car1->getPrototipeInfo();
echo Car::TEST_CAR_SPEED;

echo Car::class;
