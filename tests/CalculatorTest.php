<?php

class CalculatorTest extends \PHPUnit\FrameWork\TestCase {
    public function testAdd(){
        $calculator = new \Calculator\Calculator;
        $total= $calculator->Add(2,3);
        $this->assertEquals(5,$total);
        $result= $calculator->Add(100,20);
        $this->assertEquals(120,$result);
        $result= $calculator->Add(10,20);
        $this->assertEquals(30,$result);
        $result= $calculator->Add(54,7);
        $this->assertEquals(61,$result);
    }
    public function testSubtract(){
        $calculator = new \Calculator\Calculator;

        $result= $calculator->Subtraction(10,5);
        $this->assertEquals(5,$result);
        $result= $calculator->Subtraction(30,5);
        $this->assertEquals(25,$result);
        $result = $calculator->Subtraction(45, 25);
       // $this->assertEquals(5,$result);
        $this->assertEquals(20, $result);
        $result= $calculator->Subtraction(4,3);
        $this->assertEquals(1,$result);
    }
    public function testExponent(){
        $calculator = new \Calculator\Calculator;
        $result= $calculator->exponent(2,4);
        $this->assertEquals(16,$result);
        $result= $calculator->exponent(3,2);
        $this->assertEquals(9,$result);
        $result= $calculator->exponent(2,2);
        $this->assertEquals(4,$result);
    }
    //public function testAddition(){
      //  $calculator = new \Calculator\Calculator;
        //$result= $calculator->Add(100,20);
        //$this->assertEquals(120,$result);
    //}
  //  public function testSubtr()
    //{
      //  $calculator = new \Calculator\Calculator;
        //$result = $calculator->Subtraction(45, 25);
        //$this->assertEquals(20, $result);
   // }



}