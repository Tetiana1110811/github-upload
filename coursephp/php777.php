<?php

echo $user =isset($_GET['user']) ? $_GET['user'] : 'guest';
echo $user = $_GET['user'] ?? $_GET['user2'] ?? 'guest';
//spaceship
$a = 1;
$b = 2;
echo $a <=> $b;

//массив define

define('ANIMALS',[
    'dog',
    'cat',
    'bird'
]);
echo ANIMALS[1];

//use 01 Объект.Класс.\controllers\{Controller,PageController};
//intdiv()

var_dump(intdiv(10,3));
//int (3)