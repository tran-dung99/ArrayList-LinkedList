<?php

class Student
{
    public $name;
    public $score;

    public function __construct($name,$score)
    {
        $this->name = $name;
        $this->score = $score;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getScore()
    {
        return $this->score;
    }


}