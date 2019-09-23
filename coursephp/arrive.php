<?php


//массивы

$arr2= [1,2,3,4,5,6,[1,2,3,4,5,6,],7,8,9,10,];

echo "<pre>";
var_dump($arr2);
echo "</pre>";

echo $arr2[6][2];

$goods = [
    [
        'title' =>'Nokia',
        'price' => '100',
        'description' => 'Description'
    ],
    [
        'title' =>'iPad',
        'price' => '200',
        'description' => 'Description'
    ]

];
echo "<pre>";
var_dump($goods);
echo "</pre>";

echo  $goods [0]['price'] . '-' . $goods [0]['title'];
echo '<br>';
echo $goods [1]['title'] . '-' . $goods [1]['price'];



$i=0;
while ($i<2)

{
    echo  $goods [$i]['price'] . '-' . $goods [$i]['title'];
    echo '<br>';
    $i++;


    echo count($goods,1);


    $array1 = array("a" => "green", "red", "blue", "red");
    $array2 = array("b" => "green", "yellow", "red");
    $result3 = array_intersect($array1, $array2);

    print_r($result3);


    $search_array = array('first' => 1, 'second' => 4);
    if (array_key_exists('first', $search_array)) {
        echo "Массив содержит элемент 'first'.";}
}

$result1=array_keys($goods[0]);
echo '<pre>';
print_r($result1);
echo '</pre>';

$result2=array_values($goods[0]);
echo '<pre>';
print_r($result2);
echo '</pre>';


$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);


//array_rand ( array $array [, int $num = 1 ] ) : mixed
$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
echo $input[$rand_keys[1]] . "\n";
$rand_keys1=array_rand($array1,3);
echo '<pre>';
print_r($rand_keys1);
echo '</pre>';

$result5=array_reverse($input,true);//true ключи не перезаписываются
echo '<pre>';
print_r($result5);
echo '</pre>';

$city  = "San Francisco";
$state = "CA";
$event = "SIGGRAPH";

$result6=compact('city','state','event');
echo '<pre>';
print_r($result6);
echo '</pre>';

$result7=[
    'city'=>'SF',
    'state'=>'CA',
    'event'=>'do'
];

extract($result7);//создает из ключа переменные,только буквы,ассотиативные массивы
//echo $city;
//array_combine,array_search,array_shift,array_unique,array_unshift,array_flip
//array_pop,array_push,in_array,list
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);
echo '<pre>';
print_r($c);
echo '<pre>';


$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key = array_search('green', $array); // $key = 2;
$key = array_search('red', $array);   // $key = 1;


$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_shift($stack);
echo '<pre>';
print_r($stack);
echo '</pre>';


$unique = array_unique($array);

print_r($unique);
$array= array("blue","green");
array_unshift($array,"pink");
echo '<pre>';
print_r($array);
echo '</pre>';

$queue = array("orange", "banana");
array_unshift($queue, "apple", "raspberry");//добавляет значение в начало массива
$fliped=array_flip($queue);//меняет местами ключи и значения,возвращает массив
$pop=array_pop($fliped);//извлекает последний элемент из массива,уменьшая его
$push = array_push($queue,"blue","green");//добавляет значения в конец массива
$inarray= in_array("apple",$queue);//проверяет существует ли элемент в массиве
echo '<pre>';
print_r($queue);
echo '</pre>';
echo '<pre>';
print_r($fliped);
echo '</pre>';
echo '<pre>';
print_r($pop);
echo '</pre>';
echo '<pre>';
print_r($push);
echo '</pre>';
echo '<pre>';
print_r($inarray);
echo '</pre>';


//list — Присваивает переменным из списка значения подобно массиву

$info = array('кофе', 'коричневый', 'кофеин');

// Составить список всех переменных
list($drink, $color, $power) = $info;
echo "$drink - $color, а $power делает его особенным.\n";

// Составить список только некоторых из них
list($drink, , $power) = $info;
echo "В $drink есть $power.\n";

// Или пропустить все, кроме третьей
list( , , $power) = $info;
echo "Мне нужен $power!\n";

// list() не работает со строками
list($bar) = "abcde";
var_dump($bar); // NULL

$info[] = 'вода';//добавление ОДНОГО элемента в массив
echo '<pre>';
print_r($info);
echo '</pre>';