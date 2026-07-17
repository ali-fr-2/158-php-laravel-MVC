<?php 
require "./test.php";
require "./test2.php";

$test=new test\Test();
$test->test();
echo "<br/>";
$x=new test2\Test();
$x->test();

?>