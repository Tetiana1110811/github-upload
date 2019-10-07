<?php
namespace wfm;
class Product
{
    public $name;
    public $price;
    private $discount = 0;
    const TEST = 10;


    public function __construct($name,$price)
    {
        $this->name = $name;
        $this->price = $price;
    }


    public function getProduct()
    {
        return "<hr><b>О товаре:</b><br>
             Наименование:{$this->name}<br>
             Цена : {$this->getPrice()}<br>";
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price - ($this->discount /100* $this->price);
    }

     //abstract protected function addProduct($name,$price);
    //абстрактный метод не может содержить в себе тело метода,
    //абстрактный метод должен быть объявлен в классе наследователя
    //нельзя создать объект абстрактного класса,возможно только наследование

    //обязательно нужно создать абстрактный метод,абстрактного класса
    //в классе наследователе
    //область видимости(public,protected,private) метода в классе наследователя должна быть
    //такой же или ниже,чем у наследуемого класса
    //количество параметров в методе должно совпадать или добавить,как ниже
    //$NumPages=0
    //абстрактные методы только в абстрактном классе


}