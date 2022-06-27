<?php 
function validatePhone($phone){
    if(preg_match('/^[0-9]{10}+$/', $phone)) {
      $int =$phone;
          $getPhonelenght =strlen($int);
        if($getPhonelenght < 10) {
            echo "Invalid Phone Number" ."***". "$phone";
        }else if($getPhonelenght >= 10 && $getPhonelenght <12){
           return $phone;
      }
    } else {
      echo "Invalid Phone Number" ."***". "$phone";
    }

}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
function validateEmail($email){
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format";
          echo $emailErr ."***". "$email";
        }else{
          return $email;
        }
      }
      return false;
}
?>