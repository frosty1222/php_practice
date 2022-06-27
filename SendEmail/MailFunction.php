<?php
session_start();
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
function sendEmail($name,$email,$phone,$title,$content){
//Import PHPMailer classes into the global namespace

$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host = 'smtp.mailtrap.io';    //mailtrap SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = '2198c9559491af';   //username
    $mail->Password = '3c22a207c70529';   //password
    $mail->Port = 465;                   //smtp port
  
    $mail->setFrom('noreply@artisansweb.net', 'Artisans Web');
    $mail->addAddress('sajid@artisansweb.net', 'Sajid');
  
    $mail->isHTML(true);
  
    $mail->Subject = 'testing email';
    $mail->Body    = '<table class="table table-bordered">
    <thead>
        <tr>
            <th>name</th>
            <th>email</th>
            <th>phone</th>
            <th>title</th>
            <th>content</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>.'.$name.'</td>
        <td>.'.$email.'</td>
        <td>.'.$phone.'</td>
        <td>.'.$title.'</td>
        <td>.'.$content.'</td>
        </tr>
    </tbody>
</table>
';
    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        $_SESSION['message'] = 'Your email has been sent successfully.';
    }
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
}

