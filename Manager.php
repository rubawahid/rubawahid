<?php
namespace programe;




include_once 'students.php';
include_once 'loggable.php';

class Manager {
    use loggable;

    public $students = array();

    public function students($students){
        $this->students[$students->Id()] = $students;
        $this->log("students with Id: " . $students->Id());
    }

    public function getStudentById($id): ?students {
        if (isset($this->students[$id])){
            return $this->students[$id];
        }
        else {
            return null;
        }
    }

    public function updatestudents($students){
        if (isset($this->students[$students->Id()])){
            $this->students[$students->Id()] = $students;
            $this->log("update students id:" . $students->Id());
        }
    }

    public function deletestudents($id)
    {
        if (isset($this->students[$id])){
            $students = $this->students[$id];
            unset($this->students[$id]);
            $this->log("Deleted student:" .$students->Id() , $students->Name());
        }
    }
}

namespace programe\Traits;
trait loggable {
    public function log(string $message){
        $logFile = fileopen('log.txt','a');
        filewrite($logFile, $message . "\n");
        fileclose($logFile);
    }
}