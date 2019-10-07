<?php
namespace classes\interfaces;
interface I3D
{
    const TEST2 = 'test interfaces';
    public function test();//метод не должен иметь реализацию
}

//Нельзя переопределять констанну ,которую мы определили в Интерфейсе
//Константу класса,можно переопределить в классе наследователя

//Интерфейсы можно наслдовать несколько и разных,объявляя их через запятую
//класс,только один наследуется.Все методы,которые мы объявляем в Интерфейсе должны быть публичными
//от Интерфейса нельзя создать объект
//Методы Интерфейса не должны иметь реализацию,как и методы абстрактного класса
