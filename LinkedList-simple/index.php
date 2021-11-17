<?php
include_once "LinkList.php";
include_once "Node.php";

$linkedlist = new LinkList();
$linkedlist->addFirstNode("Dung");
$linkedlist->addFirstNode("Hoa");
$linkedlist->addFirstNode("Ngân");
$linkedlist->addFirstNode("Lan");
$linkedlist->addLastNode("Nga");
echo "<br>";
$linkedlist->readLinkedList();