<?php

error_reporting(-1);
require_once 'classes/Product.php';
require_once 'classes/I3D.php';
require_once 'classes/BookProduct.php';

/*function autoloader1($class)
{
    $class = str_replace("\\",'/',$class);
    $file = __DIR__ . "/{$class}.php";
    if (file_exists($file)){
        require_once $file;
    }
}

spl_autoload_register('autoloader1');
*/
function debug($data)
{
    echo '<pre>' . print_r($data,1) . '</pre>';
}

$book = new BookProduct('Три мушкетера',20,1000);

debug($book);

echo $book->getProduct($book);
$book->addProduct('test',10,5);
$book->test();





