<?php
error_reporting(-1);?>

<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

</head>
<body>
<?php

/*
$i=1;
while ($i< 10){
    echo $i . '<br>';
    $i++;
}

$i=1;
echo "<table border='1'>\n";
while ($i<=10){
    echo "\t<tr>\n";
    $n=1;
    while ($n<=3){
        echo "\t\t<td>Row $i | Col $n</td>";
        $n++;
    }
    echo "</tr>";
    $i++;
}
echo "</table>";



$arr=array('Ivanov','Petrov','Sidorov','Pupkin','Doe');

for ($i=0;$i<count($arr);$i++){
    echo '<pre>';
    echo $arr[$i];
    echo '</pre>';
}


$i=1;


while ($i<11)
{
    echo $i . "<br>";
    $i++;
}
for ($i=1;$i<11;$i++){
    echo $i . "<br>";
}
*/
echo '<select>';
for ($i=1900;$i<=2016;$i++){
    echo "<option>$i</option>";

}
echo '</select>';
?>
</body>
</html>