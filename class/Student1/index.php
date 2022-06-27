<?php 
require 'today.php';
require 'student.php';
$stu = new Person;

// echo $objStd01->name;
// echo '<br />';
// echo $objStd01->getEmail();
// echo'<br />';
// echo $objStd01->getAddress();
echo $stu->Age();
echo '<br />';
echo $stu->phone;
echo '<br />';
echo $stu->getAge();