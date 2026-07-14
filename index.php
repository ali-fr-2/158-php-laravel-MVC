<?php

class Test{
    private $name;
    private $age;
    function SetName($name){
        $this->name=$name;
    }
    function SetAge($age){
        $this->age=$age;
    }
    function GetName(){
        return $this->name;
    }
    function GetAge(){
        return $this->age;
    }
}
$ali=new Test();
$ali->SetName("ali");
$ali->SetAge("22");
echo $ali->GetName();
echo "<br>";
echo $ali->GetAge();
