<?php
namespace x;
class myclass
{
    public function my()
    {
        echo __CLASS__;
        echo "<br/>";
        echo  __FILE__;
        echo "<br/>";
        echo __DIR__;
        echo "<br/>";
        echo __LINE__;
        echo "<br/>";
        echo __FUNCTION__;
        echo "<br/>";
        echo __METHOD__;
        echo "<br/>";
        echo __NAMESPACE__;
        echo "<br/>";


    }
}

$obj = new myclass();
$obj->my();

trait mytrait{
    public function traitfunc(){
        echo __TRAIT__;
    }
}
class tratiuse{
    use mytrait;
}
$traitobj=new tratiuse();
$traitobj->traitfunc();