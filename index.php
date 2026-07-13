<?php

// class person{
//     public $name;
//     public $family;

//     const age=22;

//     public function showFullName(){
//         echo $this->name." ".$this->family." is ".person::age;
//         // echo $this->name." ".$this->family." is ".self::age;
//     } 
// }

// $ali=new person();
// $ali->name="ali";
// $ali->family="farjamy";

// $ali->showFullName();

// we could create two objdect with same name but we couldnt create two property with same name ;

// class person{
//     public $name;
//     public $family;

//     const age=22;

//     public function showFullName(){
//         echo $this->name." ".$this->family." is ".person::age;
//         // echo $this->name." ".$this->family." is ".self::age;
//     } 
// }

// echo person::age;





// class person{
//     public $name;
//     public $family;

//     const age=22;

//     public function showFullName(){
//         echo $this->name." ".$this->family." is ".person::age;
//         // echo $this->name." ".$this->family." is ".self::age;
//     } 
// }

// $ali=new person();
// $ali->name="ali";
// $ali->family="farjamy";

// echo $ali::age;


class Car{
    static $number=0;

    static function CarNumber(){
        self::$number++;
    }
}

echo Car::$number;
Car::CarNumber();
echo Car::$number;
Car::CarNumber();
echo Car::$number;



?>



