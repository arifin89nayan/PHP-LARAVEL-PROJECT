<?php 
ini_set('display_errors',1);
error_reporting(E_ALL);
class Student{
    protected $name = 'Rimon';
    protected $roll = 17;
    private $money = "500 taka";
    public $instituteName = 'UIU';

}

class A extends Student{

    public function testData()
    {
        echo $this->name."<br>";
        echo $this->roll."<br>";
        echo $this->instituteName."<br>";
        // echo $this->money."<br>";
    }
}
$aClass = new A;
$aClass->testData();


// echo $studentObj->name."<br>";
// echo $studentObj->roll."<br>";
// echo $studentObj->money."<br>";
// $studentObj->getStudentName();
// echo $studentObj->instituteName."<br>";

