<?php


class BookProduct extends Product

{
    public $numPages;
    public function __construct($name, $price,$numPages)
    {
        parent::__construct($name,$price);
        $this->numPages=$numPages;
        var_dump($this->public);
        var_dump($this->protected);
        //var_dump($this->private);

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
}
