<?php

class Calculator {
    static function add($a,$b){
        return $a+$b;
    }
        static function subtract($a,$b){
        return $a-$b;
    }
        static function multiply($a,$b){
        return $a*$b;
    }
        static function divide($a,$b){
            if($b==0){
                return "cannot divide by zero";
            }
        return $a/$b;
    }
}
$result=Calculator::divide(20,10);
echo $result;
echo "<br/>";
$cal=new Calculator();
echo $cal::subtract(50,10.5);