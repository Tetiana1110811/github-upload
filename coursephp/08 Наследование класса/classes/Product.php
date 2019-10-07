<?php
class Product
{
    public $name;
    public $price;


    public function __construct($name,$price)
    {
        $this->name = $name;
        $this->price = $price;

    }


    public function getProduct()
    {
        return "<hr><b>О товаре:</b><br>
             Наименование:{$this->name}<br>
             Цена : {$this->price}<br>";
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
        return $this->price;
    }
}