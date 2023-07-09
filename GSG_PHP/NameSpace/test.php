<?php
use Course\Course;
use Manager\Manager;
use Student\Student;
require_once('Student.php');
require_once('Course.php');
require_once('Manager.php');
$manager = new Manager();
$student1 = new Student('Dalia Mohisen', 'daliamohisen@gmail.com');
$manager->addStudent($student1);
$student2 = new Student('Nour Ali', 'nourali@gamil.com');
$manager->addStudent($student2);
$student1->addCourse(new Course('Algorithm'));
$manager->updateStudent($student1, 'Nesma abushammala', 'nesmaabushammala@gmail.com');
$retrievedStudent = $manager->getStudent($student1->getId());
if ($retrievedStudent) {
    echo "Retrieved student: {$retrievedStudent->name} (ID: {$retrievedStudent->getId()})" . PHP_EOL
;}
$manager->deleteStudent($student2);
echo 'The number of students is: ' . count($manager->students);


