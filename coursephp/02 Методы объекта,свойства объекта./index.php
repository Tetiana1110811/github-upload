<?php

require_once 'classes/Car.php';

function debug($data) {
    echo '<pre>' . print_r($data, 1 . '</pre>');
}

$car1 = new Car('Black','Volvo','200','4');
$car2 = new Car('white','bmw','180','4');

debug($car1);
debug($car2);

echo $car1->getCarInfo();
echo $car2->getCarInfo();



