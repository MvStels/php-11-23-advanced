<?php

interface TaxiClass
{
    public function class(): void;

    public function money(): void;
}

abstract class Creator
{


    public function someOperation(): void
    {
        $product = $this->getTaxi();
        $product->class();
        $product->money();


    }

    abstract public function getTaxi(): TaxiClass;

}

class Economy extends Creator
{

    private $car, $prise;


    public function __construct(string $car, float $prise)
    {
        $this->car = $car;
        $this->prise = $prise;
    }

    public function getTaxi(): TaxiClass
    {
        return new ClassPrice ($this->car, $this->prise);
    }

}
class Standard extends Creator
{

    private $car, $prise;


    public function __construct(string $car, float $prise)
    {
        $this->car = $car;
        $this->prise = $prise;
    }

    public function getTaxi(): TaxiClass
    {
        return new ClassPrice ($this->car, $this->prise);
    }

}
class Lux extends Creator
{

    private $car, $prise;


    public function __construct(string $car, float $prise)
    {
        $this->car = $car;
        $this->prise = $prise;
    }

    public function getTaxi(): TaxiClass
    {
        return new ClassPrice ($this->car, $this->prise);
    }

}

class ClassPrice implements TaxiClass
{
    private $car, $prise;


    public function __construct(string $car, float $prise)
    {
        $this->car = $car;
        $this->prise = $prise;
    }
    public function class(): void{
        echo " Машина- $this->car";
    }
    public function money(): void{
        echo "Ціна (Грн) - $this->prise";
    }

}





function clienCode(Creator$creator)
{
    $creator->someOperation();
}

echo "Economy Taxi: ";
clienCode(new Economy("Жигуль ",70));
echo " Standard Taxi: ";
clienCode(new Standard("Форд ",120));
echo " Lux Taxi: ";
clienCode(new Lux("Rolls-Royce ",800));
