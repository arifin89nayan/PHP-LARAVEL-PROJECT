<?php 
class GrandFather{
    protected $grandFatherName = 'Rahim uddin';
}

class Father extends GrandFather{
    private $money = 6000;
    protected function giveMeMoney($amount){
        echo "Father amount 1: ".$this->money."<br>";
        $this->money = $this->money - $amount;
        echo "Father amount 2: ".$this->money."<br>";
        return $amount;
    }
}
class Son extends Father{
    protected $name = 'Son Name';

    private $sonMoney = 5;

    public function __construct()
    {
        echo 'Load from __construct';
    }

    public function showMoney()
    {
        $this->sonMoney = $this->sonMoney + $this->giveMeMoney(45);
       echo $this->sonMoney."Taka";
    }

    public function whatYourGrandFatherName(){
        echo $this->grandFatherName."<br>";
        echo $this->name;
    }
}
$sonObject  = new Son;
$sonObject->whatYourGrandFatherName();
// $sonObject->showMoney();//50 taka
