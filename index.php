<?php

abstract class abclass
{
    protected $name;
    abstract function greet($greet);

    public function setname($name)
    {
        $this->name = $name;
    }
}

class child extends abclass
{
    function greet($greet) {
        return $greet." ".$this->name;
    }
}
$obj=new child();
$obj->setname("ali");
echo $obj->greet("welcome");