<?php

class Person
{
    function showinfo()
    {
        echo "hello world";
    }
    function __destruct()
    {
        echo "this is destruct ";
    }
}
$ali=new Person();
// die();
unset($ali);