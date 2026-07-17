<?php

spl_autoload_register(function($classname){
    require_once "./myclaas/$classname.php";
});

?>