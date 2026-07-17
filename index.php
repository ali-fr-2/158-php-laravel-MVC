<?php

// class ParentClass
// {
//     public function mymethod()
//     {
//         echo "method from parentclass";          //3
//     }
// }
// trait NameTrait
// {
//     public function mymethod()
//     {
//         echo "method from trait";               //2
//     }
// }

// class ChildClass extends ParentClass
// {
//     use NameTrait;
//     public function mymethod()
//     {
//         echo "method from child class";        // 1
//     }
// }

// $obj = new ChildClass();
// $obj->mymethod();



// trait trait1{
//         public function mymethod()
//     {
//         echo "method from trait1";             
//     }
// }
// trait trait2{
//         public function mymethod()
//     {
//         echo "method from trait2";             
//     }
// }

// class childclass {
//     use trait1, trait2 {
//         trait2::mymethod insteadof trait1;  // اولویت با trait2
//     }
// }

// $obj = new childclass();
// $obj->mymethod(); 

trait nametrait1{
    private function test(){
        echo "mytest";
    }
}
class child{
    use nametrait1 {
        nametrait1::test as public;
        nametrait1::test as public T;
    }
}

$obj=new child();
$obj->T();