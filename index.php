<?php

// class A{
//     public $color="blue";
// }
class A{
    protected $color="blue";
}
// class A{
//     private $color="blue";
// }

class B extends A{
    public $age=22;
    function ShowColor(){
       return $this->color;
    }
}

class C extends B{
    function getone(){
        return $this->color." ".$this->age;
    }
}

$c=new C();
echo $c->getone();

?>



