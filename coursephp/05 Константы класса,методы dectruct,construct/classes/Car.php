<?php


class Car
{

  public $color;
  public $wheels = 4;
  public $speed = 180;
  public $brand;
  public static $countCar = 0;
  const TEST_CAR = 'Prototip';
  const TEST_CAR_SPEED = '300';



  public function __construct($color,$brand,$speed,$wheels)
  {
      $this->color = $color;
      $this->wheels = $wheels;
      $this->brand = $brand;
      $this->speed = $speed;
      self::$countCar++;
  }

    public static function getCount()
    {
        return self::$countCar;
    }

    public function getCarInfo(){
      return "<h3>О моём авто:</h3>
      Марка : {$this->brand}<br>
      Цвет : {$this->color}<br>
      Кол-во колёс : {$this->wheels}<br>
      Скорость : {$this->speed}<br>;
       
    


";}

public function getPrototipeInfo()
{
    return "<h3>Данные тестового авто:</h3>
      Наименование : " . self::TEST_CAR . " <br>
      Скорость : " . self::TEST_CAR_SPEED . " <br>";
}
public function __destruct()
{
    var_dump($this);
}

}
