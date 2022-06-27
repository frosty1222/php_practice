<?php
include('validateChild.php');
include('MailFunction.php');
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $title = $_POST['title'];
    $content = $_POST['content'];
   if(validatePhone($phone) &&  validateEmail($email)){
     $send =  sendEmail($name,$email,$phone,$title,$content);
       header('Location:home.php');
   }
  }
?>