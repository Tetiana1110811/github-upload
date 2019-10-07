<?php
class Product
{
    public $name;
    public $price;
    public $public = 'PUBLIC';
    protected $protected = 'PROTECTED';
    private $private = 'PRIVATE';
    public $discount = '0';


    public function __construct($name,$price)
    {
        $this->name = $name;
        $this->price = $price;
        var_dump($this->public);
        var_dump($this->protected);
        var_dump($this->private);

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
}