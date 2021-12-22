<?php

namespace Calculator;

use Calculator\Operations\Exponent;
use Calculator\Operations\Add;
use Calculator\Operations\Subtraction;


class Calculator
{
    function exponent($num, $exponent): int
    {
        $exponentObj = new Exponent($num, $exponent);
        return $exponentObj->compute();
    }

    // Write your functions below
    function Add($num1,$num2): int
    {
        $AddObj=new Add($num1,$num2);
        return $AddObj->Add();
    }

   function Subtraction($num1,$num2):int
   {
    $SubtractionObj= new Subtraction($num1,$num2);
    return $SubtractionObj->Subtraction();
}
}
