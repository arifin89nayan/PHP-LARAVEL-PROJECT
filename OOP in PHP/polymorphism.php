<?php
interface Shape {
  public function calcArea();
}
class Circle implements Shape {
    private $radius;
    public function __construct($radius)
    {
      $this -> radius = $radius;
    }
    public function calcArea()
    {
      return $this -> radius * $this -> radius * pi();
    }
  }
  class Rectangle implements Shape {
    private $width;
    private $height;
    public function __construct($width, $height)
    {
      $this -> width = $width;
      $this -> height = $height;
    }
    public function calcArea()
    {
      return $this -> width * $this -> height;
    }
  }
  class Triangle implements Shape {
    private $base;
    private $height;
    public function __construct($base, $height)
    {
      $this -> base = $base;
      $this -> height = $height;
    }
    public function calcArea()
    {
      return ($this -> base * $this -> height)/2;
    }
  }
   $circ = new Circle(3);
   $rect = new Rectangle(3,4);
   $tria = new Triangle(10,15);
   echo $circ -> calcArea();
   echo "<br>";
   echo $rect -> calcArea(); 
   echo "<br>";
   echo $tria -> calcArea();