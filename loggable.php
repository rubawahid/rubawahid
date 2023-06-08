<?php

namespace Programe;

class course{
    public int $courseId;
    public string $courseName;

    public function __construct(int $courseId, string $courseName){
        $this->courseName = $courseName;
        $this->courseId = $courseId; 
    }

    public function Name(){
        return $this->courseName;
    }

    public function Id() {
        return $this->courseId;
    }
}


