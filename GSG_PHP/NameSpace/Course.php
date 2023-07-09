<?php
namespace Course;
class Course{
    public readonly string $id;
    public $name;
    function __construct(string $name){
         $this->id=uniqid();
        $this->name=$name;  
    }
} 
?>