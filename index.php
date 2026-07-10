<?php

// class Person
// {
//     public $name;
//     public $sport;

//     public function play()
//     {
//         echo $this->name . "   " . "plays" . "  " . $this->sport;
//     }
// }

// $man = new Person();
// $man->name = "ali";
// $man->sport = "volleyball";
// $man->play();
// echo "<br>";
// $man = new Person();
// $man->name = "ali";
// $man->sport = "volleyball";
// $man->play();

class pet{

public $voice;

public function myVoice(){
    echo $this->voice;
}

}

$cat=new pet();

$cat->voice="<script> alert('meow')</script>";
$cat->myVoice();


// we could create two objdect with same name but we couldnt create two property with same name ;

?>



