<?php


$arr=['Ivanov','Petrov','Sidorov'];
$arr[]='Pupkin';
$arr[]='Doe';
echo '<pre>';
print_r($arr);
echo '</pre>';

foreach ($arr as $name){
    echo $name . '<br>';
}

foreach ($arr as $key=>$name){
    echo "Name: $key,Surname: $name <br>";
}

$a = 5;
if ($a<7&&$a>3){
    echo 'OK';
} else {
    echo 'No';
}

for ($i=0;$i<=30;$i++){
    echo $i . '<br>';
    if ($i==5)
    {echo 'Found';
    break;
    }

}

for ($i=0;$i<=30;$i++){
    if ($i==10 || $i==20) continue;
    echo '<pre>';
    echo $i;
    echo '</pre>';
}


