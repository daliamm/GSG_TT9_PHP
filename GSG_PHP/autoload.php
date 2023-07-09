<?php
/// autoloade class trate 
spl_autoload_register(function($classname){
    if(str_starts_with($classname,'Test\A')){
        include __DIR__ .'/namespaceB.php';
    }else if(str_starts_with($classname,'Test\a')){
        include __DIR__ .'/namespaceB.php';
    }
    echo 'class name'.$classname;
}); // OR include __DIR__ ."/$classname.php";