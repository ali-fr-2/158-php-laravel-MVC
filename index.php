<?php 

trait traitname{
    private $name;

    public function showname(){
        echo "hello world";
    }
}

trait traitname2{
    private $name;

    public function showname2(){
        echo "ali";
    }
}

class usetrait{
    use traitname;
    use traitname2;
}

$ali=new usetrait();
$ali->showname2();


?>