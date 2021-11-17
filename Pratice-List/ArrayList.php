<?php

class ArrayList
{
    public $arrayList;

    public function __construct($arr = "")
    {
        if (is_array($arr)) {
            $this->arrayList = $arr;
        } else {
            $this->arrayList = [];
        }
    }

    public function add($obj) {
        array_push($this->arrayList,$obj);
    }

    public function get($index) {
        if($this->isInteger($index) && $index < $this->size()) {
            return $this->arrayList[$index];
        }else{
            die("ERROR in Arraylist.get");
        }
    }

    public function Delete ($index) {
        if($this->isInteger($index) && $index < $this->size()) {
            return array_splice($this->arrayList,$index,1);
        }else{
            die("ERROR in Arraylist.get");
        }
    }
    public function isInteger($check) {
        return preg_match("/^[0-9]+$/",$check);
    }

    public function size() {
        return count($this->arrayList);
    }
}