<?php


class Car
{

  public $color;
  public $wheels = 4;
  public $speed = 180;
  public $brand;

  public function __construct($color,$brand,$speed,$wheels)
  {
      $this->color = $color;
      $this->wheels = $wheels;
      $this->brand = $brand;
      $this->speed = $speed;
  }

    public function getCarInfo(){
      return "<h3>О моём авто:</h3>
      Марка : {$this->brand}<br>
      Цвет : {$this->color}<br>
      Кол-во колёс : {$this->wheels}<br>
      Скорость : {$this->speed}<br>;
       
    


";}

public function __destruct()
{
    var_dump($this);
}

}
