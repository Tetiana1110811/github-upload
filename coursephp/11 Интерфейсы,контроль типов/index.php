<?php

error_reporting(-1);
require_once 'classes/I3D.php';
require_once 'classes/IGadget.php';
require_once 'classes/Product.php';
require_once 'classes/BookProduct.php';
require_once 'classes/NotebookProduct.php';
//require_once 'app/BookProduct.php';

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

 function offerCase(IGadget $product){
    echo "<p> Предлагаем чехол для гаджета{$product->getName()}</p>";
 }

$book = new BookProduct('Три мушкетера',20,1000);
$notebook = new NotebookProduct('Dell',1000,'Intel');
var_dump($notebook instanceof NotebookProduct);
var_dump($book instanceof BookProduct);
offerCase($notebook);
//offerCase($book);
debug($book);

echo $book->getProduct($book);
$book->addProduct('test',10,5);
$book->test();





