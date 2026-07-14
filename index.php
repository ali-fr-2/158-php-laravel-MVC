<?php

// final class Base{

// }
// class Child extends Base{
    
// }
class Base{
   final public function Test(){
    return "hello world";
   }
}
class Child extends Base{
    public function Test(){
        return "child class";
    }
}
$test=new Child();
echo $test->Test();