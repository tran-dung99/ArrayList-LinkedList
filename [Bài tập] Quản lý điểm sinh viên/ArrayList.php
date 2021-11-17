<?php
include_once "Student.php";
class ArrayList
{
    public $studentList;
    public $totalStudentFail;
    public $path = "data.json";
     public function __construct()
     {
         $this->studentList = [];
         $this->totalStudentFail = 0;
     }

     public function saveData($data) {
         $dataJson = json_encode($data);
         file_put_contents($this->path,$dataJson);
     }

     public function load() {
         $dataJson = file_get_contents($this->path);
         if(!empty($dataJson)) {
             $data = json_decode($dataJson,true);
//             return $data;
             return $this->convertToObject($data);
         }else return [];

     }

     public function convertToObject($arr) {
         $students = [];
         foreach($arr as $key => $value) {
             $student = new Student($value['name'],$value['score']);
             array_push($students,$student);
         }
         return $student;
     }

     public function insertFirst($request) {
         $students = $this->load();
         $student = new Student($request["name"],$request["score"]);
         array_push($students,$student);
         $this->saveData($students);
     }
}