<?php

// class Person{
//     function __construct()
//     {
//         echo "hello world";
//     }

//     function show(){
//         return "my name is ali";
//     }
// }

// $a=new Person();
// echo "<br/>";
// echo $a->show();
//------------------------------

// class Time{
//     private $hour;
//     private $minute;
//     private $second;
//     function __construct($hour=0,$minute=0,$second=0)
//     {
//         $this->hour=$hour;
//         $this->minute=$minute;
//         $this->second=$second;
//         echo $this->hour." : ".$this->minute." : ".$this->second;
//     }
// }

// // $time=new Time();
// $time=new Time(16,25,50);

class Time{
    private $hour;
    private $minute;
    private $second;
    function __construct($hour=0,$minute=0,$second=0)
    {
        $this->hour=$hour;
        $this->minute=$minute;
        $this->second=$second;
    }
    function gettime(){
        return $this->hour." : ".$this->minute." : ".$this->second;
    }
}

// $time=new Time();
$time=new Time(16,25,50);
echo $time->gettime();


?>



