<?php
namespace Manager;
use Student\Student;
trait Loggable
{
    private $logFile = 'loggable.txt';

    private function LogFile($message)
    {
        file_put_contents($this->logFile, $message . PHP_EOL, FILE_APPEND);
    }
}

class Manager
{
    use Loggable;
    public $students = [];
public function addStudent(Student $student)
    {
        $this->students[$student->id] = $student;
        $this->LogFile('Added student: ' . $student->name);
    }
    public function getStudent($id)
    {
        if (isset($this->students[$id])) {
            $this->LogFile("Retrieved student by ID: {$id}");
            return $this->students[$id];
        }

        return null;
    }
    public function updateStudent(Student $student, $name, $email)
    {
        if (isset($this->students[$student->id])) {
            $student->name = $name;
            $student->email = $email;

            $this->LogFile('Updated student: ' . $student->name);
        }
    }
    public function deleteStudent(Student $student)
    {
        if (isset($this->students[$student->id])) {
            unset($this->students[$student->id]);
            $this->LogFile("Deleted student: {$student->id}");
        }
}
}

?>