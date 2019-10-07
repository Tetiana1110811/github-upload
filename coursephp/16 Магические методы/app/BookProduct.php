<?php
namespace app;

use wfm\interfaces\I3D;
use wfm\Product;

class BookProduct extends Product implements I3D

{
    public $numPages;
    

    const TEST = 20;
    public function __construct($name, $price,$numPages)
    {
        parent::__construct($name,$price);
        $this->numPages=$numPages;
        var_dump(self::TEST);


    }
     public function __get($name)
     {
         // TODO: Implement __get() method.
         var_dump($name);
     }
     public function __set($name, $value)
     {
         var_dump($name,$value);
     }

    public function __toString()
    {
        return$this->getProduct();
    }

    public function test(){
       // var_dump(self::TEST2);
    }

    public function getProduct()
    {
        $out = parent::getProduct();
        $out .="Количество страниц : {$this->numPages}<br>";
        return $out;
    }


    /**
     * @return mixed
     */
    public function getNumPages()
    {
        return $this->numPages;
    }
    //обязательно нужно создать абстрактный метод,абстрактного класса
    //в классе наследователе
    //область видимости(public,protected,private) метода в классе наследователя должна быть
    //такой же или ниже,чем у наследуемого класса
    //количество параметров в методе должно совпадать или добавить,как ниже
    //$NumPages=0
    //абстрактные методы только в абстрактном классе
    public function addProduct($name, $price,$NumPages=0)
    {
        // TODO: Implement addProuct() method.
        var_dump($name);
        var_dump($price);
        var_dump($NumPages);
    }


}
//Интерфейсы можно наслдовать несколько и разных,объявляя их через запятую
//класс,только один наследуется.Все методы,которые мы объявляем в Интерфейсе должны быть публичными
//от Интерфейса нельзя создать объект
//Методы Интерфейса не должны иметь реализацию,как и методы абстрактного класса
