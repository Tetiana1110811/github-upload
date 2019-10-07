<?php
require_once 'classes/File.php';


$file2=new File(__DIR__ . '/text.txt');
$file2->write('Строка1');



