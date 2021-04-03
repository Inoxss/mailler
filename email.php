<?php
if (isset($_POST['submit'])) {

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    require './mailer/PHPMailerAutoload.php';
    //$from = "ascrea@ascrea.ma";
    $to  = "contact@ascrea.ma";
     
    $username = "ascrea@ascrea.ma";
    $password = "ascrea123--" ;
    //$path='../assets/programme.pdf';

    $mail = new PHPMailer(); 

    $mail->IsSMTP();
    $mail->Host = "serveur82.heberjahiz.com"; 
    $mail->SMTPAuth = true;  
    $mail->Username = "$username";  
    $mail->Password = "$password"; 
    $mail->setFrom($email, $fname.' '.$lname);
    $mail->addAddress($to);
    $mail->WordWrap = 50;
    $mail->Subject=$subject;
    $mail->Body= $message ; 
   
       if($mail->send()){
           header("Location: http://testsite.ascrea.ma/#contact-section");
       }
}
