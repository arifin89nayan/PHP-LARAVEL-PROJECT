<?php
abstract class Car {
    protected $tankVolume;
    public function setTankVolume($volume)
    {
      $this -> tankVolume = $volume;
    }
    abstract public function calcNumMilesOnFullTank();
  }
  class Honda extends Car {
    public function calcNumMilesOnFullTank()
    {
      return $miles = $this -> tankVolume*30;
    }
    public function speed(){
        return "Top Speed 255 mile";
    }
  }
  class Toyota extends Car {
    public function calcNumMilesOnFullTank()
    {
      return $miles = $this -> tankVolume*33;
    }
    public function getColor()
    {
      return "Red";
    }
  }
  $toyota = new Toyota();
  $toyota -> setTankVolume(10);
  echo $toyota -> calcNumMilesOnFullTank();
  echo"<br>";
  echo $toyota -> getColor();
  $honda = new Honda();
  $honda->setTankVolume(10);
  echo"<br>";
  echo $honda->calcNumMilesOnFullTank();
  echo"<br>";
  echo $honda -> speed();