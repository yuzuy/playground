<?php
class Car
{
    private $name;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

$car = new Car();
$car->setName('PRIUS');
echo 'name: ' . $car->getName() . "\n";

class SportsCar extends Car
{
    private $max_speed;

    public function setMaxSpeed($speed)
    {
        $this->max_speed = $speed;
    }

    public function getMaxSpeed()
    {
        return $this->max_speed;
    }
}

$sports_car = new SportsCar();
$sports_car->setName('GTO');
$sports_car->setMaxSpeed(252);
echo 'name: ' . $sports_car->getName() . ', max speed: ' . $sports_car->getMaxSpeed() . "km/h\n";

class Circle
{   
    const PI = 3.14;
    public static $radius = 1;

    public static function calcArea()
    {
        return self::$radius * self::$radius * self::PI;
    }
}

echo Circle::PI . "\n";
echo Circle::$radius . "\n";
Circle::$radius = 5;
echo Circle::$radius . "\n";
echo Circle::calcArea() . "\n";

class ParentClass
{
    protected static function func1()
    {
        echo "A\n";
    }
}

class ChildClass extends ParentClass
{
    public static function func2()
    {
        parent::func1();
    }
}

ChildClass::func2();

class ConstructDestruct
{
    public function __construct()
    {
        echo "Construct\n";
    }

    public function __destruct()
    {
        echo "Destruct\n";
    }
}

$obj = new ConstructDestruct();
unset($obj);

class Override1
{
    public function func()
    {
        echo "A\n";
    }

    final public function fin()
    {
        echo "A\n";
    }
}

class Override2 extends Override1
{
    public function func()
    {
        echo "B\n";
    }

    /**
     * public function fin()
     * {
     *     echo "B\n";
     * }
     */
}

$obj = new Override2();
$obj->func();
$obj->fin();

abstract class Printer
{
    abstract public function print();
}

class HelloPrinter extends Printer
{
    public function print()
    {
        echo "Hello\n";
    }
}

$obj = new HelloPrinter();
$obj->print();

interface Caller
{
    public function call($to);
}

class CallerImpl implements Caller
{
    public function call($to)
    {
        echo "Calling $to...\n";
    }
}

$obj = new CallerImpl();
$obj->call('yuzuy');

class Point
{
    private $x;
    private $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function setX($num)
    {
        $this->x = $num;
    }

    public function __toString()
    {
        return "($this->x, $this->y)";
    }
}

$obj = new Point(1, 1);
$obj2 = clone $obj;
$obj2->setX(2);
echo "$obj $obj2\n";
