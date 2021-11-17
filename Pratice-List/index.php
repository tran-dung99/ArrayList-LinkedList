<?php
include_once "ArrayList.php";

$arrayList = new ArrayList();
 $arrayList->add(2);
 $arrayList->add(5);
 $arrayList->add(4);
 $arrayList->add(7);
 echo $arrayList->get(1);
 $arrayList->Delete(1);
 echo "<pre>";
 print_r($arrayList);
