<?php

class LinkList
{
    public $firstNode;
    public $lastNode;
    public $count = 0;
    public function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
    }

    public function addFirstNode($data) {
        $newNode = new Node($data);

            $newNode->link = $this->firstNode;
            $this->firstNode = $newNode;

        if(is_null($this->lastNode)){
            $this->lastNode = $newNode;
        }
        $this->count++;
    }

    public function addLastNode($data) {
        if(!is_null($this->firstNode)) {
            $newNode = new Node($data);
            $this->lastNode->link = $newNode;
            $this->lastNode = $newNode   ;
            $newNode->link = null;
            $this->count++;
        }else {
            $this->addFirstNode($data);
        }

    }

    public function getSize() {
        return $this->count;
    }

    public function readLinkedList() {
        echo "The total of linkedList is ".$this->count."<br>";
        $currentNode = $this->firstNode;
        while ($currentNode->link !== null) {
            echo ($currentNode->data."<br>");
            $currentNode = $currentNode->link;
        }
    }

}