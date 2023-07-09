<?php
namespace Student;
class Student{
     readonly string $id;
     public $name;
     public $email;
     public $course=[];
     function __construct(string $name, string $email){
            $this->id=uniqid();
            $this->name=$name;
            $this->email=$email;
     }
     public function getId()
     {
         return $this->id;
     }
public function addCourse($course){
     $this->course[]=$course;
}
public function deleteCourse($course){
       unset($this->course[array_search($course,$this->course)]);
}

}
