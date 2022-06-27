<?php 
class Person extends People
{
 public $name='lo van A';// access mọi nơi trong và ngoài class con

 protected $email='aaa@gmail.com';// access mọi nơi trong và ngoài class con

 private $address='hà nội';// access ở mọi nơi trong class
 public function setName($value){
     $this->name = $value;
 }

 public function getName(){
     return $this->name;
 }

 public function getEmail(){
     return $this->email;
 }

 public function getAddress(){
     return $this->address;
 }
 public function getAge(){
     parent::Age();
     return __METHOD__;
 }
}
