<?php
require_once 'date.php';


//$arr = array(1,2,5);
//$result = array_rand($arr,3);
//print_r($result);




$arr=file('txt');
$rand_keys= array_rand($arr,2);
echo $arr[$rand_keys[1]] . "\n";
echo '<pre>';
//print_r($arr);
echo '</pre>';

foreach ($arr as $key=>$text){
    //echo {$key} . '$text' . "<br>";
     //echo "Строка #<b>{$key}</b> : " . htmlspecialchars($text) . "<br />\n";

};

//$open = fopen('E:\OSPanel\domains\localhost\coursephp\Новая папка\Ротенберг Е.И. - Искусство Италии. Средняя Италия в период Высокого Возрождения (О.И. и Т.И.И.) - 1974_p001.pdf','r');

//$fileopen = fopen('txt','r');
//echo $fileopen;
//echo $open;
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="downloaded.pdf"');

readfile('123.pdf');
