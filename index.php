<?php
interface mainInterface
{
  public function moveForward();
  public function moveBack();
  public function usePower(); 
}

abstract class Machine implements mainInterface 
{
	public $bodyColor;
	public $weight;
	public $power;
}

class Car extends Machine 
{
    public $power = 'Use N20';
    public $signal = 'Beep!';
    public $wipers = 'Use wipers';

	public function usePower() {
		echo $this->power;
	}
	public function moveForward() {
		echo $this->usePower();
		echo ' and move forward';
	}
    public function moveBack()
    {
        echo 'Move back';
    }
    public function useSignal()
    {
        echo $this->signal;
    }
    public function useWipers()
    {
        echo $this->wipers;
    }
}

class Tank extends Machine 
{
    public $power = 'Shoot';
    public $cloack = 'Tactical Cloack';

    public function usePower()
    {
        echo $this->power;
    }
    public function moveForward()
    {
        echo $this->usePower();
        echo ' and move forward';
    }
    public function moveBack()
    {
        echo 'Move back';
    }
}

class Special extends Machine 
{
    public $power = 'Raise shovel';
    public $wheel = 'Huge Wheels';

    public function usePower()
    {
        echo $this->power;
    }
    public function moveForward()
    {
        echo $this->usePower;
        echo ' and move forward';
    }
    public function moveBack()
    {
        echo 'Move back';
    }
}

$objCar = new Car();
echo $objCar->moveForward();


?>
