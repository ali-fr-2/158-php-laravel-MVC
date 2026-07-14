<?php
interface Test
{
    public function test1();
    public function test2($a, $b);
}
interface Animal
{
    public function MakeSound();
}
class Cat implements Animal
{
    public function MakeSound()
    {
        echo "meow";
    }
}
$cat = new Cat();
$cat->MakeSound();

class Both implements Animal, Test
{
    public function test1() {}
    public function test2($a, $b) {}
    public function MakeSound() {}
}

class myclass {}

class third extends myclass implements Animal, Test
{
    public function test1() {}
    public function test2($a, $b) {}
    public function MakeSound() {
         echo "meow";
    }
}
$cat1 = new third();
$cat1->MakeSound();