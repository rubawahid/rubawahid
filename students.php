<?php
namespace Programe;
 class Student
 {
  public int $studentId;
  public string $studentName;
  public string $studentgmail;
  public $studentCourses = array();

  public function __construct(int $studentId, string $studentName, string $studentgmail){
    $this->id = $studentId;
    $this->name = $studentName;
    $this->gmail = $studentgmail;
  }
 


 public function id(){
    return $this->id;
 }

 public function Name(){
    return $this->name;
 }

public function gmail(){
    return $this->gmail;
}

public function course($studentCourses){
    return $this->courses[] = $studentCourses;
}
 }



