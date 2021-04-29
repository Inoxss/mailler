<?php


    $name = $_REQUEST['name'];
    $phone = $_REQUEST['phone'];
    $from = $_REQUEST['email'];
    $message = $_REQUEST['message'];
    $headers = "From: $from";
    $subject = "contact Service-mika";
    
    require './phpMailer/PHPMailerAutoload.php';
    //$from = "ascrea@ascrea.ma";
    
   
     
    $username = "contact@domainname.com";
    $password = "password of email" ;

    //hitch hatchdo hatsifto l rask so username = to
    $to  = $username;
    //$path='../assets/programme.pdf';

    $mail = new PHPMailer(); 
    
    $mail->isSMTP();
    
    //   $mail->Host = "smtp.gmail.com"; 
    $mail->Host = "mail.domain.ma/com";
    $mail->Port = 465 ; // or 587 to tls
    $mail->SMTPAuth = true;  
    $mail->SMTPSecure='SSL' ;//tls
    $mail->Username = "$username";  
    $mail->Password = "$password"; 
    $mail->setFrom('hamigo70@gmail.com',$_REQUEST['name']);
    $mail->addAddress($to);
    $mail->addReplyTo('hamigo70@gmail.com');
    $mail->WordWrap = 50;
    $mail->isHTML(true);
    $mail->Subject=$subject;
    $mail->Body='<h4 style="algin:center">contact infos</h4><br>
                                                    
                                                       '.' - Nom: '. $name .'<br>'
                                                       .' - Phone: '. $phone .'<br>'
                                                        .' - Email: '. $from .'<br>'   
                                                        .' <h4 style="color:Teal" > Message:</h4>'. $message .'<br>'; 
                                                             
   

    
    $mail->send();
         
   
?>
